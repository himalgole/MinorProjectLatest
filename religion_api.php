<?php
  session_start();
  $data = array("hindu"=>$_SESSION['rel_hindu']/$_SESSION['total']*100,"buddhist"=>$_SESSION['rel_buddhist']/$_SESSION['total']*100,"christian"=>$_SESSION['rel_christian']/$_SESSION['total']*100,"muslim"=>$_SESSION['rel_muslim']/$_SESSION['total']*100,"other"=>$_SESSION['rel_other']/$_SESSION['total']*100);
  echo json_encode($data);
?>