<?php namespace App\Controllers;
use App\Models\UserModel;

class Users extends BaseController
{
	public function __construct()
	{
		helper('form');

	}
	// login
	public function index()
	{
		$model = new UserModel();
		$data['users']= $model->findAll();
		//	echo var_dump($data);

		echo view("users/users_view",$data);
	}

	public function view_profile($slug=null){
		$model = new UserModel();
			$data['user'] = $model->getusers($slug);

			if (empty($data['user']))
		 {
				 throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
		 }

				 $data['title'] = $data['user']['firstname'];
		return  view("users/user_profile_view",$data);

	}

	public function create_user(){

		$rules=[
			'firstname'=> 'required|min_length[3]|max_length[20]',
			'lastname'=> 'required|min_length[3]|max_length[20]',
			'email'=> 'required|min_length[5]|max_length[50]|valid_email|is_unique[users.email]',
			'password'=> 'required|min_length[8]|max_length[255]',
			'mobile'=> 'required',
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
			'slug' => url_title($this->request->getVar('email')),
		];

		$model->save($newdata);

		$session= session();
		$session->setFlashdata('sucess', 'Sucessful Registraiton');
		return redirect()->to('/');
	 }

	return  view("users/create_user");
	}





	public function edit_user(){
		echo view("users/edit_user");
	}
	public function activate_user(){
		echo "activate";
	}
	public function deactiveate_user(){
		echo "Deactiveate";
	}


}
