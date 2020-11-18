<?php namespace App\Controllers;
use App\Models\CertificateModel;

class Certificate extends BaseController
{

  // View All Certificates in this method
	public function index()
	{

	}

// add Certificate if he or she is qulified for certificate
	public function createcertificate()
	{

	}

// add certificate
	public function verifycertificate(){
		helper('form');

			$data = [];



			if ($this->request->getMethod()=='post')
			{


					$rules=[
						'certificateno'=> 'required|min_length[3]|max_length[20]|validatecertificate[certificateno]',

					];


				$errors=[
					'certificateno'=> [
						'validatecertificate'=> 'Certificate Number is not in the Database',

					]				];
			 if (! $this->validate($rules,$errors)){

				$data['validation']= $this->validator;
			}
			 else
				{
					$model = new CertificateModel();

					$data['certificate']= $model->where('idcertificate',$this->request->getVar('certificateno'))
							->first();
					
								return view("certificates/validcertificate",$data);

			 }
			}



		return view("certificates/verifycertificate",$data);

}
 function validecertificate(){
	 echo "Certificate is Valid";
 }
}
