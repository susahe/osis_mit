<?php namespace App\Models;

use CodeIgniter\Model;



class CertificateModel extends Model {
  protected $table ='certificate';
  protected $primaryKey = 'idusers';
  protected $allowedFields = ['certificateno','nic'];
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];

   protected function beforeInsert(array $data){

 }

protected function beforeUpdate(array $data){



}

 protected function passwordHash(array $data){


  }
}
