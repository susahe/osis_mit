<?php namespace App\Models\User;

use CodeIgniter\Model;


class TeacherModel extends Model {
  protected $table ='teacher';
  protected $primaryKey = 'id';
  protected $allowedFields = ['address','days','time','created','update','slug','status'];
  //protected $beforeInsert = ['beforeInsert'];
  //protected $beforeUpdate = ['beforeUpdate'];





}
