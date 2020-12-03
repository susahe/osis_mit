<?php namespace App\Controllers;
use App\Models\CourseModel;

class Course extends BaseController
{

	// login
	public function index()
	{
		$model = new CourseModel();
	 $data['courses']= $model->findAll();
		//	echo var_dump($data);
		return  view("courses/course_view",$data);
		}




	public function createcourse()
	{
		$data['title']= 'Helloss';

			helper('form','url');

		if ($this->request->getMethod()=='post')
		{
			$rules=[
				'csname'=> 'required|min_length[3]|max_length[255]|is_unique[courses.csname]',
				'entryqly'=> 'required|min_length[3]|max_length[20]',
				'thhrs'=> 'required|numeric',
				'prcthrs'=> 'required|numeric',
				'asinghrs'=> 'required|numeric',
				'prjhrs'=> 'required|numeric',
				'csfees'=> 'required|numeric',
				'bdgpyear'=> 'required|numeric',
				'csdmonths'=> 'required|numeric',
				'cstype'=> 'required|min_length[3]|max_length[20]',
				 'csimage' =>'uploaded[csimage]|max_size[csimage,1024]|ext_in[csimage,jpg]|is_image[csimage]',
];
		 if (! $this->validate($rules)){

			$data['validation']= $this->validator;
		}
		 else
			{
				$file= $this->request->getFile('csimage');
				if($file->isValid() && !$file->hasMoved()){
					$file->move('./uploads/images');
				}

				$file =  $this->request->getFile('csimage');
				$fname = $file->getName();


			$model = new CourseModel();
			$newdata = [

				'csname' => $this->request->getVar('csname'),
				'csentryqly' => $this->request->getVar('entryqly'),
				'cstheryhrs' => $this->request->getVar('thhrs'),
				'cspracthrs' => $this->request->getVar('prcthrs'),
				'csassinghrs' => $this->request->getVar('asinghrs'),
				'csprojecthrs' => $this->request->getVar('prjhrs'),
				'csfees' => $this->request->getVar('csfees'),
				'cstype' => $this->request->getVar('cstype'),
				'csimage' => $this->request->getVar('csimage'),
				'csduemonths' => $this->request->getVar('csdmonths'),
				'csperyear' => $this->request->getVar('bdgpyear'),
				'csslug' => url_title($this->request->getVar('csname')),
				'csimage' =>$fname,

			];
			//echo var_dump($newdata);
			$model->save($newdata);

			$session= session();
			$session->setFlashdata('sucess', 'Sucessful Add Course to the System');
			return redirect()->to('/dashboard');
		 }
		}

		return  view("courses/createcourse",$data);




	}


}
