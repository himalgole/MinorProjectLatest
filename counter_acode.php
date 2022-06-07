<?php
session_start();
$id = $_SESSION['id'];
include("congfig.inc.php");
$sql = "select * from counters where ID = '".$id."'";
$res = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($res);
echo $data['a_code'];
?>