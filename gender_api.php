<?php
  session_start();
  $data = array("male"=>$_SESSION['male']/$_SESSION['total']*100,"female"=>$_SESSION['female']/$_SESSION['total']*100);
  echo json_encode($data);
?>