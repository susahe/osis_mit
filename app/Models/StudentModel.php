<?php namespace App\Models;

use CodeIgniter\Model;



class StudentModel extends Model {
  protected $table ='pre_reg_students';
  protected $allowedFields = ['firstname','lastname','certname','gender','role','dateofbirth','nic','hometel','mobile','email'];

  public function getStudent($slug = false)
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
