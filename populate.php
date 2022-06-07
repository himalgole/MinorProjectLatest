<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>population census nepal -- verify yourself</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body
        {
            background-color: #f0f0f1;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="index.php" style="text-decoration: none;">
                <h2 style="color: #CA2126;">Census<span style="color:#09265F; font-size: 23px;">Board</span></h2>
            </a>
        </div>
        <div class="centerdiv">
        

            <form name="login-panel" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="login-form" autocomplete="false">
            <?php
                error_reporting(0);
                session_start();
                if (time() - $_SESSION['start'] > 4) {
                    $_SESSION['err'] = "";
                }
                if (isset($_SESSION['err'])) { ?>
                    <div class="show-error">
                        <?php
                        foreach ($_SESSION['err'] as $err) {
                            echo $err;
                        }
                        ?>
                    </div> <?php } ?>
                <input type="text" name="username" class="inputbox" placeholder="Mobile number or email">
                <br>
                <input type="Password" name="password" class="inputbox" placeholder="Password">
                <br>
                
                <input type="checkbox" name="admin" id="" value="yes">
                <labelfor="admin">Are you an admin?</label><br>
                <input type="submit" value="Log In" class="submit-btn-1" name="submit">
               
            </form> <br>

        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    include("congfig.inc.php");
    if (isset($_POST['admin'])) {
        $admin_sql = "select * from admin where pwd = '" . $password . "' and username = '" . $username . "'";
        $admin_res = mysqli_query($conn, $admin_sql);
        $adData = mysqli_fetch_assoc($admin_res);
        if (mysqli_num_rows($admin_res) > 0) {
            session_start();
            $_SESSION['adminLoggedIn'] = "yes";
            $_SESSION['name'] = $adData['Full_Name'];
            header('location: admin.php');
        } else {
            session_start();
            $_SESSION['start'] = time();
            $_SESSION['err'] = array("You are not an admin.");
            header("location:populate.php");
        }
    } else {
        $sql = "select * from counters where pwd = '" . $password . "' and contact = '" . $username . "'";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION['loggedIn'] = "yes";
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['full_name'] = $data["Full_Name"];
            $_SESSION['id'] = $data["ID"];
            $_SESSION['acode'] = $data['a_code'];
            header('location: login.php');
            exit();
        } else {
            session_start();
            $_SESSION['start'] = time();
            $_SESSION['err'] = array("Entered data not available.");
            header('location: populate.php');
        }
    }
}

?>