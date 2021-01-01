<?php namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Users\UserModel;
use App\Models\DaysModel;
use App\Models\Users\StudentModel;
use App\Models\CourseModel;
use App\Models\EnrolModel;
use App\Models\Users\PersonModel;
use App\Models\Custom;
use App\Libraries\Send_Mail;
use App\Libraries\Curd;
use CodeIgniter\I18n\Time;
use Endroid\QrCode\QrCode;

class Student extends BaseController
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
					$this->model 				= new UserModel();
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


				public function admin_edit_users($slug)
				{
					//	$model = new UserModel();
							$data['user'] = $this->model->getusers($slug);

							if (empty($data['user']))
						 {
								 throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
						 }
						 	$session = session();
								$session->set('seleuid', $data['user']['id']);
								 $data['title'] = $data['user']['firstname'];

						return  view("users/user_details_view",$data);
				}

				public function admin_edit_user()
					{
									$data=[];
									if ($this->request->getMethod()=='post')
									{
										$rules=[
											'firstname'=> 'required|min_length[3]|max_length[20]',
											'lastname'=> 'required|min_length[3]|max_length[20]',
												'email'=> 'required|min_length[5]|max_length[50]|valid_email',
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
										$newdata =
										[
													'id' => session()->get('seleuid'),
													'role' => $this->request->getPost('role'),
													'firstname' => $this->request->getPost('firstname'),
													'lastname' => $this->request->getPost('lastname'),
													'email' => $this->request->getVar('email'),
													'mobile'=> $this->request->getVar('mobile'),
													'slug' => url_title($this->request->getVar('email')),
													'update' => date('Y-m-d H:i:s',now()),
										];

							if ($this->request->getPost('password')!=''){
								$newdata['password']= $this->request->getPost('password');
							}
										$this->model->save($newdata);
										session()->setFlashdata('sucess', 'Sucessfully Updated');
										return redirect()->to('/view_users');
									 }
									}
									$data['user']=$this->model->where('id',session()->get('id'))->first();
									return view("users/user_profile_view",$data);
				}





				public function admin_edit_user()
					{
									$data=[];
									if ($this->request->getMethod()=='post')
									{
										$rules=[
											'firstname'=> 'required|min_length[3]|max_length[20]',
											'lastname'=> 'required|min_length[3]|max_length[20]',
												'email'=> 'required|min_length[5]|max_length[50]|valid_email',
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
										$newdata =
										[
													'id' => session()->get('seleuid'),
													'role' => $this->request->getPost('role'),
													'firstname' => $this->request->getPost('firstname'),
													'lastname' => $this->request->getPost('lastname'),
													'email' => $this->request->getVar('email'),
													'mobile'=> $this->request->getVar('mobile'),
													'slug' => url_title($this->request->getVar('email')),
													'update' => date('Y-m-d H:i:s',now()),
										];

							if ($this->request->getPost('password')!=''){
								$newdata['password']= $this->request->getPost('password');
							}
										$this->model->save($newdata);
										session()->setFlashdata('sucess', 'Sucessfully Updated');
										return redirect()->to('/view_users');
									 }
									}
									$data['user']=$this->model->where('id',session()->get('id'))->first();
									return view("users/user_profile_view",$data);
				}


}
