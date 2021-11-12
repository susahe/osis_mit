<?php namespace App\Models\Enroll;

use CodeIgniter\Model;


class EnrolModel extends Model {
  protected $table ='enroll';
  protected $primaryKey = 'id';
  protected $allowedFields = ['user','course','status','enroldate','closedate'];
  //protected $beforeInsert = ['beforeInsert'];
  //protected $beforeUpdate = ['beforeUpdate'];







}
