<?php
namespace App\Libraries;

class Admin{
public function title($param){

  if($param['title']){
    return view('admin/cmps/title',$param);
  }
}

}

 ?>
