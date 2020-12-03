<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$data['title']= 'Users';
		$data['table']='Table';
		return view('admin/users/table',$data);
	}

	//--------------------------------------------------------------------



}
