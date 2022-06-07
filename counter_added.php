<?php
if (isset($_POST['register'])) {
    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];
    if ($pwd1 == $pwd2) {
        if ($_POST['contact'] != "" && $_POST['a-code'] != "") {
            include("congfig.inc.php");
            $flName = $_POST['fl_name'];
            $contact = $_POST['contact'];
            $acode = $_POST['a-code'];
            $sql = "INSERT  INTO counters (Full_Name,contact,pwd,a_code) VALUES('" . $flName . "','" . $contact . "','" . $pwd1 . "','" . $acode . "')";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
        } else {
            session_start();
            $_SESSION['start'] = time();
            $_SESSION['err'] = array("required fields are empty.");
            header('location: admin.php');
        }
    } else {
        session_start();
        $_SESSION['start'] = time();
        $_SESSION['err'] = array("passwords are not matched.");
        header('location: admin.php');
    }
} else {
    header('location: admin.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="admin.php">Go Back</a>
</body>

</html>