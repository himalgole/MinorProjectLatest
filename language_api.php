<?php
  session_start();
  $data = array("nepali"=>$_SESSION['lang_nepali']/$_SESSION['total']*100,"newari"=>$_SESSION['lang_newari']/$_SESSION['total']*100,"tamang"=>$_SESSION['lang_tamang']/$_SESSION['total']*100,"bhojpuri"=>$_SESSION['lang_bhojpuri']/$_SESSION['total']*100,"maithili"=>$_SESSION['lang_maithili']/$_SESSION['total']*100,"other"=>$_SESSION['lang_other']/$_SESSION['total']*100);
  echo json_encode($data);
?>