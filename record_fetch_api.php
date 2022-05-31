<?php
  header("content-type: application/json");
  require("congfig.inc.php");
  $sql = "select * from member";
  $result = mysqli_query($conn,$sql);
  $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
  echo json_encode($output);
  
?>