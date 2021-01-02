<?php namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\User\UserModel;
use App\Models\User\PersonModel;
use App\Models\User\StudentModel;

use App\Models\Enroll\DaysModel;
use App\Models\Course\CourseModel;
use App\Models\Enroll\EnrolModel;

use App\Models\Custom;

use App\Libraries\Send_Mail;
use App\Libraries\Curd;
use CodeIgniter\I18n\Time;
use Endroid\QrCode\QrCode;

class Students extends BaseController
{

				private $model;
				private $mail;
				private $studentmodel;
				private $curd;
				private $csmodel;
				private $days;
				private $enroll;
				public function __construct()

				{
					// helper classess
					helper('form');
					helper('date');
				//	$this->db = db_connect();



					// Using Model create Objects
					$this->model = new UserModel();
					$this->studentmodel = new StudentModel();
					$this->csmodel = new CourseModel();
					$this->curd = new Curd();
					$this->mail 	= new Send_Mail();
					$this->days = new DaysModel();
					$this->enroll = new EnrolModel();
				}

				// login
				public function index()
				{
					$data=[];


					 //$student = new
					// echo var_dump($student);
					//
				//	 $data['students'] = $student->getStudents();
				//	echo var_dump($data);
				//$model = new StudentModel();

					//	echo var_dump($data);

					$data['students'] = $this->studentmodel->getStudents();
				//		echo var_dump($std);



					echo  view("users/student/student_view",$data);

				}

				public function view_profile($slug=null){
				//	$model = new UserModel();
						$data['user'] = $this->model->getusers($slug);

						if (empty($data['user']))
					 {
							 throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
					 }
					 		$this->setUserSession($data['user']);
							 $data['title'] = $data['user']['firstname'];

					return  view("users/user_profile_view",$data);

				}




				// Set Sessions





				// Edit users






							public function  create_student()
							{


									$data=[];
										$rest = session()->get('cs');
									$data['courses']= $this->csmodel->getselectedCourse($rest);
									if ($this->request->getMethod()=='post')
									{
									$rules=[
										'address'=> 'required|min_length[3]|max_length[255]',
										'gender'=> 'required',
										'nic'=> 'required',
										'birthdate'=>'required',
										'installment'=>'required',
										'qulification' => 'required'

								];

										if (! $this->validate($rules)){

								 		$data['validation']= $this->validator;
								 	}
								 	 else
								 		{


								 			//	$model = new UserModel();
								 		$newdata = [
											'user' => session()->get('id'),
								 			'address' => $this->request->getVar('address'),
										'gender' => $this->request->getVar('gender'),
											'nic' => $this->request->getVar('nic'),
								 			'birthdate' => $this->request->getVar('birthdate'),
								 		'hometel' => $this->request->getVar('birthdate'),

								 		];
										$coursedata=[
											'user'=>session()->get('id'),
											'course'=>2,
										];

										$stddata =[
											'user' => session()->get('id'),
											'installment'=> $this->request->getVar('installment'),
											'addmision'=> 1
										];
										$number = sprintf('%04d',$user_id);
										$stdnumber = $time->getYear().$number;
										$studentno = $stdnumber.session()->get('id');
										$userdata=[
												'id' => session()->get('id'),
												'username' => $studentno,
												'role' => "Student",
										];
										$this->enroll->save($coursedata);
										$person = new PersonModel();
										$person->save($newdata);
										$this->studentmodel->insert($newdata);
										$this->model->save($userdata);
									//$this->enroll->insert($coursedata);

										// if (session()->get('is_parent')==1){
										// 	$body = "You Child/ Slibling has Sucessfuly Apply for the Course ". " ".$data['courses']['csname']." ". " and your registration id is"." ".$studentno. "Your QR Code " ;
										// }
										// else{
										//
										// }
										$user_id = $this->model->getInsertID();
										$email = session()->get('email');
										$myTime = new Time('now');

										$subject = "Application has submited successfully" ;
										$body=	$body = "You are Sucessfuly submit your course application ". " ".$data['courses']['csname']." ". " and your registration id is"." ".$studentno. "Your QR Code " ;
										$this->mail->user_reg_sendmail($email,$subject,$body);

										$message = $subject." ".	$studentno;
										$session= session();
										$session->setFlashdata('sucess', $message);
										$session->set('loginUser','Student');
//echo var_dump($newdata);
									return redirect()->to('/dashboard');
								 	 }
								 }
								 #$
								 $data['days'] = $this->days->get_days_id(session()->get('id'));
								 $myTime = new Time('now');
	 							 $time = Time::parse($myTime);
								 $year = $time->getYear()-4;
	 							 $data['bdate']= '2017-12-31';

								 	return  view("/users/student/create_student",$data);
								 	}








									public function retirive_course_select($rest){
										$session = session();



											$session->set('cs',$rest);

												return redirect()->to('/create_student');

									}

									public function activate_student($id)
											{
													$message = "The Student sucessfully activated";
													//$data=$this->model->getUserStatusById($id);
													$this->curd->change_status($id,$status=0,$message,$this->studentmodel);
													return redirect()->to('/dashboard');
												}


									public function deactivate_student($id)
											{
												$message = "The Student sucessfully deactivated";
												//$data=$this->model->getUserStatusById($id);
												$this->curd->change_status($id,$status=1,$message,$this->studentmodel);
												return redirect()->to('/dashboard');
											}


									public function set_days($d){


											//	$model = new UserModel();
										$newdata = [
											'user' => session()->get('id'),
										//	'days' => $this->request->getVar('days'),
											'days' => $d,
											//'slug' => url_title($this->request->getVar('time')),
										];
										$days = new DaysModel();
										echo var_dump($newdata);
											$days->save($newdata);


									return redirect()->to('/create_student');




}

public function remove_days($id)
{
	 		$days = new DaysModel();
			$days->delete($id);
		return redirect()->to('/create_student');
}


public function add_qulifcation($id)
{
	//	$model = new UserModel();
$newdata = [
	'user' => session()->get('id'),
//	'days' => $this->request->getVar('days'),
	'days' => $d,
	//'slug' => url_title($this->request->getVar('time')),
];
$days = new DaysModel();
echo var_dump($newdata);
	$days->save($newdata);


return redirect()->to('/create_student');


}

public function remove_qulfication($id)
{
	$days = new DaysModel();
	$days->delete($id);
return redirect()->to('/create_student');
}


public function apply_course($csid)
{
	$session = session();
	$session->set('cs',$csid);
	return redirect()->to('/create_student');
}


}
