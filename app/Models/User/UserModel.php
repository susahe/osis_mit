<?php namespace App\Models\User;

use CodeIgniter\Model;




class UserModel extends Model
  {

    protected $table ='users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email','password','role','firstname','lastname','slug','mobile','status','update','lastlogin','username'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];






    protected function beforeInsert(array $data)
      {
          $data = $this->passwordHash($data);
          return $data;
      }


    protected function beforeUpdate(array $data)
      {

       $data = $this->passwordHash($data);
       return $data;
      }


    protected function passwordHash(array $data)
      {
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

       public function getuser_from_email($email)
       {
           if ($email)
           {

                  return $this->asArray()->select('id,email,status,firstname,lastname')
                       ->where(['email' => $email])
                       ->first();
        }
      }

       public function getUserStatusById($id){

          return $this->db->table($this->table)
                ->where('id',$id)
                ->get()
                ->getRow();

       }

       public function update_lastlogin(array $data)
       {


       }

       // create personal details
       public function personal_details_add()
       {

       }

       // update person details
       public function personal_details_edit()
       {

       }


       public function getuser_from_id($id)
       {
           if ($id)
           {

                  return $this->asArray()->select('id,email,status,firstname,lastname')
                       ->where(['id' => $id])
                       ->first();
        }}


        public function getUserById($id){
          if($id){
            return $this->asArray()->select('id,username,status,role,created,lastlogin,email,update,firstname,lastname,slug,mobile')
                 ->where(['id' => $id])
                 ->first();
          }

        }


  }
