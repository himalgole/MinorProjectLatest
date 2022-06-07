<?php
  session_start();
  $data = array("doctor"=>$_SESSION['prof_doctor']/$_SESSION['total']*100,"teacher"=>$_SESSION['prof_teacher']/$_SESSION['total']*100,"engineer"=>$_SESSION['prof_engineer']/$_SESSION['total']*100,"businessman"=>$_SESSION['prof_business']/$_SESSION['total']*100,"military"=>$_SESSION['prof_military']/$_SESSION['total']*100,"other"=>$_SESSION['prof_other']/$_SESSION['total']*100,"unemp"=>$_SESSION['umemp']/$_SESSION['total']*100);
  echo json_encode($data);
?>