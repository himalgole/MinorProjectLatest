<?php
include("congfig.inc.php");

$district_id =  $_POST['district_data'];

$city = "SELECT * FROM city WHERE did = $district_id";
$qry = mysqli_query($conn, $city);


$output = '<option value="">Select city</option>';
while ($city_row = mysqli_fetch_assoc($qry)) {
    $output .= '<option value="' . $city_row['cid'] . '">' . $city_row['city'] . '</option>';
}
echo $output;
