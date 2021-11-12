<?php
namespace App\Libraries;

class Admin{
public function title($param){

  if($param['title']){
    return view('templates/title',$param);
  }
}


public function registration_no($id){
  $myTime = new Time('now');
  $time = Time::parse($myTime);
  $preregid = $time->getYear()." ".$id;
  return $preregid;
}
}

 ?>
