<?php namespace App\Controllers;
use App\Models\UserModel;

class Users extends BaseController
{

	// login
	public function index()
	{
		helper('form');
		$data = [];

		helper('form');

		if ($this->request->getMethod()=='post')
		{
			$rules=[

				'email'=> 'required|min_length[6]|max_length[50]|valid_email',
				'password'=> 'required|min_length[8]|max_length[255]|validateUser[email,password]',

			];
			$errors=[
				'password'=> [
					'validateUser'=> 'Email or Password don\'t match',

				]

			];
		 if (! $this->validate($rules,$errors)){

			$data['validation']= $this->validator;
		}
		 else
			{
				$model = new UserModel();

				$user= $model->where('email',$this->request->getVar('email'))
						->first();

				$this->setUserSession($user);
			//	echo var_dump($this->setUserSession($user));
			  return redirect()->to('/dashboard');
		 }
		}
		echo view('templates/header',$data);
		echo view('templates/nav');
		echo view("login");
  	    	echo view("templates/footer");


	//--------------------------------------------------------------------
}
	// Register4

	private function setUserSession($user){

		$data=[
			'id'=>$user['idusers'],
			'firstname'=>$user['firstname'],
			'lastname'=>$user['lastname'],
				'email'=>$user['email'],
			'isLogedIn' => true,

		];

		session()->set($data);

		return true;

	}

	public function register()
	{
		$data=[];
		helper('form');

		if ($this->request->getMethod()=='post')
		{
			$rules=[
				'firstname'=> 'required|min_length[3]|max_length[20]',
				'lastname'=> 'required|min_length[3]|max_length[20]',
				'email'=> 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email],',
				'password'=> 'required|min_length[8]|max_length[255]',
				'cpassword'=> 'matches[password]',
			];
		 if (! $this->validate($rules)){

		 	$data['validation']= $this->validator;
		}
		 else
		  {

		  $model = new UserModel();
			$newdata = [

				'email' => $this->request->getVar('email'),
				'password' => $this->request->getVar('password'),
			  'role' => $this->request->getVar('role'),
			  'firstname' => $this->request->getVar('firstname'),
			  'lastname' => $this->request->getVar('lastname'),
			];
		//	echo var_dump($newdata);
			$model->save($newdata);

			$session= session();
			$session->setFlashdata('sucess', 'Sucessful Registraiton');
			return redirect()->to('/');
		 }
		}
		echo view('templates/header',$data);
		echo view('templates/nav');
		echo view("register");
  	echo view("templates/footer");



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
		echo view('templates/header',$data);
		echo view('templates/nav');
		echo view("profile");
		echo view("templates/footer");

	}

	public function logout(){
		session()->destroy();
		return redirect()->to('/');

	}

}
