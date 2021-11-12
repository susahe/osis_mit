<?php namespace App\Controllers;

use App\Models\User\UserModel;
use App\Libraries\Send_Mail;
use App\Libraries\Curd;
use CodeIgniter\I18n\Time;


class Home extends BaseController

{
				// class attributes

				private $model;
				private $curd;

				// consturct
				//======================================================================
				public function __construct(){
					// Helpers
					helper('form');
					helper('date');

					// create models from model classes
					$this->model = new UserModel();
					$this->curd = new Curd();
				}


				// Index Page Home Page
				//======================================================================
				public function index(){
						$data=[];
						return  view("home/login",$data);

				}


				// Register session
				//======================================================================
				private function setUserSession($user){

							$data=[
											'id'=>$user['id'],
											'firstname'=>$user['firstname'],
											'lastname'=>$user['lastname'],
											'email'=>$user['email'],
											'isLogedIn' => true,
											'loginUser'=>$user['role'],
										];
							session()->set($data);
							return true;
				}


				// user login
				//======================================================================
				public function login(){
					helper('form');
					$data['title'] = "Users";
					if ($this->request->getMethod()=='post')
					{
						$rules=
									[
									'email'			=> 'required|min_length[6]|max_length[50]|valid_email|user_not_registred[email]|is_active[email]',
									'password'	=> 'required|min_length[8]|max_length[255]|validateUser[email,password]',
									];
						$errors=
									[
									'password'	=> [ 'validateUser'	=> 'Email or Password don \'t match'],
									'email' 		=> ['user_not_registred'			=> "You are not registred user",
																	'is_active' 		=> "Your account not activated, please check your email"]
									];

				 	 if (! $this->validate($rules,$errors))
					 {
								 $data['validation']= $this->validator;
					 }
					 else
					 {
			  			 $user= 	$this->model->where('email',$this->request->getVar('email'))
														 ->first();
							 $id = $user['id'];
			  			 $this->curd->update_lastlogin($id,$this->model);
    					 $this->setUserSession($user);
							 return redirect()->to('/dashboard');
				 	 	}
				}

						return  view("home/login",$data);

			}


				// user logout
				//======================================================================
				public function logout(){
						session()->destroy();
						return redirect()->to('/');

				}

}
