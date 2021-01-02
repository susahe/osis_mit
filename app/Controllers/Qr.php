<?php namespace App\Controllers;
use App\Controllers\BaseController;


class Qr extends BaseController
{

public function index()
{



	$data = 'otpauth://totp/test?secret=B3JX4VCVJDVNXNZ5&issuer=chillerlan.net';

	// quick and simple:
	echo '<img src="'.(new QRCode)->render($data).'" alt="QR Code" />';
}
}
