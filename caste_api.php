<?php
  session_start();
  $data = array("brahmin"=>$_SESSION['caste_brahman']/$_SESSION['total']*100,"chhetri"=>$_SESSION['caste_xetri']/$_SESSION['total']*100,"magar"=>$_SESSION['caste_magar']/$_SESSION['total']*100,"tamang"=>$_SESSION['caste_tamang']/$_SESSION['total']*100,"yadav"=>$_SESSION['caste_yadav']/$_SESSION['total']*100,"other"=>$_SESSION['caste_other'] /$_SESSION['total']*100);
  echo json_encode($data);
?>