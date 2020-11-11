<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [];

    echo view('templates/header',$data);
    echo view('templates/nav');
    echo view("dashboard");
    echo view("templates/footer");

	}

	//--------------------------------------------------------------------

}
