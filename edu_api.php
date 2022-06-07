<?php
  session_start();
  $data = array("elementary"=>$_SESSION['edu_elem']/$_SESSION['total']*100,"primary"=>$_SESSION['edu_primary']/$_SESSION['total']*100,"secondary"=>$_SESSION['edu_secondary']/$_SESSION['total']*100,"hsecondary"=>$_SESSION['edu_hsecondary']/$_SESSION['total']*100,"bachelor"=>$_SESSION['edu_bachelor']/$_SESSION['total']*100,"masters"=>$_SESSION['edu_masters']/$_SESSION['total']*100,"phd"=>$_SESSION['edu_phd']/$_SESSION['total']*100,"none"=>$_SESSION['edu_none']/$_SESSION['total']*100);
  echo json_encode($data);
?>