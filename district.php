<?php
include("congfig.inc.php");
$province_id =   $_POST['province_data'];

$district = "SELECT * FROM district WHERE pid = $province_id";

$qry = mysqli_query($conn, $district);
// $output="";
$output = '<option value="">Select district</option>';
while ($district_row = mysqli_fetch_assoc($qry)) {
    $output .= '<option value="' . $district_row['did'] . '">' . $district_row['district'] . '</option>';
}
echo $output;