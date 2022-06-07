<?php
 
 include("congfig.inc.php");
 $sql = "select province from sthaniya_taha";
 $res = mysqli_query($conn,$sql);
 if(mysqli_num_rows($res)>0)
 {
     $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
     echo json_encode($data);
 }

 else
 {
      echo json_encode(array('msg'=>'no data found','status'=>false));
 }

?>