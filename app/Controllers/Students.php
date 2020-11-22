<?php namespace App\Controllers;
use App\Models\StudentModel;
use CodeIgniter\I18n\Time;

class Students extends BaseController
{

	// login
	public function index()
	{
		$model = new StudentModel();
		$data['students']= $model->findAll();
		//	echo var_dump($data);
		return  view("students/students_view",$data);

}


public function slug_view($slug=null){
	$model = new StudentModel();
		$data['student'] = $model->getStudent($slug);

		if (empty($data['student']))
	 {
			 throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
	 }

	     $data['title'] = $data['student']['certname'];
	return  view("students/student_slug_view",$data);
}
	public function createstudent()
	{
		$data=[];
		helper('form');

		if ($this->request->getMethod()=='post')
		{
			$rules=[
				'firstname'=> 'required|min_length[3]|max_length[30]',
				'lastname'=> 'required|min_length[3]|max_length[20]',
				'certname'=> 'required|min_length[3]|max_length[255]',
				'gender'=> 'required|min_length[3]|max_length[20]',
				'role'=> 'required|min_length[3]|max_length[20]',
				'dateofbirth'=> 'required|min_length[3]|max_length[20]|valid_date',
				'nic'=> 'required|min_length[10]|max_length[12]',
					'hometel'=> 'required|min_length[10]|max_length[10]|valid_phone_number[hometel]',
						'mobile'=> 'required|min_length[10]|max_length[10]|valid_phone_number[mobile]',
				'email'=> 'required|min_length[6]|max_length[255]|valid_email|is_unique[users.email]',

			];
		 if (! $this->validate($rules)){

		 	$data['validation']= $this->validator;
		}
		 else
		  {

		  $model = new StudentModel();
			$newdata = [




			  'firstname' => $this->request->getVar('firstname'),
			  'lastname' => $this->request->getVar('lastname'),
				'certname'=> $this->request->getVar('certname'),
				'gender'=> $this->request->getVar('gender'),
				'role'=> $this->request->getVar('role'),
				'dateofbirth'=> $this->request->getVar('dateofbirth'),
				'nic'=> $this->request->getVar('nic'),
					'hometel'=> $this->request->getVar('hometel'),
						'mobile'=> $this->request->getVar('mobile'),
										'email' => $this->request->getVar('email'),
			];
		//	echo var_dump($newdata);
		$myTime = new Time('now');
		$time = Time::parse($myTime);
			$model->save($newdata);
			$user_id = $model->getInsertID();

			$gmail =$newdata['email'];
			$preregid = $time->getYear().$user_id;
			$email_message=$this->send_mail($gmail,$preregid);
			$message = "Sucessfuly Registred your Pre Registration Id is".$preregid.$email_message;

			$session= session();
			$session->setFlashdata('sucess', $message);

			return redirect()->to('/');
		 }
		}

		return  view("students/application",$data);




	}

	public function profile(){

		$data=[];
		helper('form');
		  $model = new UserModel();
		if ($this->request->getMethod()=='post')
		{
			$rules=[
				'firstname'=> 'required|min_length[3]|max_length[20]',
				'lastname'=> 'required|min_length[3]|max_length[20]',
			];
			if ($this->request->getPost('password')!=''){
				$rules['password']= 'required|min_length[3]|max_length[20]';
				$rules['cpassword']= 'matches[password]';
			}

		 if (! $this->validate($rules)){

		 	$data['validation']= $this->validator;
		}
		 else
		  {


			$newdata = [
				'idusers' => session()->get('id'),
			  'role' => $this->request->getPost('role'),
			  'firstname' => $this->request->getPost('firstname'),
			  'lastname' => $this->request->getPost('lastname'),

			];

			if ($this->request->getPost('password')!=''){
				$newdata['password']= $this->request->getPost('password');
			}


		//	echo var_dump($newdata);
			//$model->update(session()->get('id'),$newdata);
		//	$model->update($newdata['idusers'], $newdata);
			$model->save($newdata);
			session()->setFlashdata('sucess', 'Sucessfully Updated');
			return redirect()->to('/profile');
		 }
		}
		$data['user']=$model->where('idusers',session()->get('id'))->first();


		return view("profile",$data);


}

public function student_accept()
{

}


public function send_mail($e_mail,$preregid)
{
        $email = \Config\Services::email();
        $email->setTo($e_mail);
				$email->setFrom('mithardware@gmail.com');
				$email->setSubject("Application has submited Successfully with pre-registraion id".$preregid);
			 $email->setMessage("Your Application Successfully Submited and Your Pre Registred id is".$preregid."Plase keep this with you for futrue refrence and 'Your Application Sttaus is '");
				if ($email->send())
				{
            return  'Email successfully sent';
        }
				else
				{
            $data = $email->printDebugger(['headers']);
            return $data;
        }
}


public function logout()
{
		session()->destroy();
		return redirect()->to('/');
}

}
