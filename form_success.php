<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>success</title>
</head>
<body>
    <p>form submission success. <a href="">Go Back</a></p>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $fid = $_POST['fcode'];
    $head_fname = $_POST['fname'];
    $head_fmname = $_POST['mname'];
    $head_flname = $_POST['lname'];
    $member_number = $_POST['member-number'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $lanuage = $_POST['lanuage'];
    $income = $_POST['income'];
    $home_ownership = $_POST['homeownership'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $district = $_POST['local'];
}

?>

