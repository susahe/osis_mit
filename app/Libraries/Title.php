<?php
namespace App\Libraries;
use CodeIgniter\I18n\Time;

class Title{

  public function title($param){

    if($param['title']){
      return view('admin/cmps/title',$param);
    }
  }




}

 ?>
