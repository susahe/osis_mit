<?php namespace App\Models;

use CodeIgniter\Model;



class CourseModel extends Model {
  protected $table ='courses';
  protected $primaryKey = 'idcourses';
  protected $allowedFields = ['csname','csentryqly','cstheryhrs','cspracthrs','csassinghrs','csprojecthrs','csfees','cstype','csperyear','csslug','csimage'];


public function getCourses($slug=null){
  if(!$slug){
    return $this->findAll();
  }

  return $this->asArray()
          ->where(['csslug'=>$slug])
          ->first();
}
function getCountCourses(){

return $query = $this->countAll() ;
}
}
