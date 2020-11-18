<?php namespace App\Validation;
use App\Models\CertificateModel;



class CertificateRules {
  public function validatecertificate(string $str, string $fields, array $data):bool
  {

    $model = new CertificateModel();
    $certificate = $model->where('idcertificate',$data['certificateno'])
          ->first();

    if (!$certificate)
      return false;


      return true;


  }


}
