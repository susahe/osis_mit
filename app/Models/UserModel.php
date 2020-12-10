<?php namespace App\Models;

use CodeIgniter\Model;



class UserModel extends Model {
  protected $table ='users';
  protected $primaryKey = 'idusers';
  protected $allowedFields = ['email','password','role','firstname','lastname','slug'];
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];

   protected function beforeInsert(array $data){
 $data = $this->passwordHash($data);
     return $data;
 }

protected function beforeUpdate(array $data){

   $data = $this->passwordHash($data);

  return $data;

}

 protected function passwordHash(array $data){
  if(isset($data['data']['password']))
   $data['data']['password']=password_hash( $data['data']['password'],PASSWORD_DEFAULT);

    return $data;

  }

  public function getusers($slug = false)
  {
      if ($slug === false)
      {
          return $this->findAll();
      }

      return $this->asArray()
                  ->where(['slug' => $slug])
                  ->first();
  }

}
