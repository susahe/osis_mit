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
		$data=[];
		helper('form');

		if ($this->request->getMethod()=='post')
		{
			$rules=[
				'coursename'=> 'required|min_length[3]|max_length[20]',
				'coursefees'=> 'required|min_length[3]|max_length[20]',
				'courseduration'=> 'required|min_length[6]|max_length[50]',

			];
		 if (! $this->validate($rules)){

		 	$data['validation']= $this->validator;
		}
		 else
		  {

		  $model = new CourseModel();
			$newdata = [

				'coursename' => $this->request->getVar('coursename'),
				'coursefees' => $this->request->getVar('coursefees'),
			  'courseduraion' => $this->request->getVar('courseduration'),

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
