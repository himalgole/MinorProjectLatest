<?php
session_start();
if (isset($_SESSION['adminLoggedIn'])) {
} else {
    header('location: populate.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/3773a0fd0c.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
</head>

<body>
    <header class="admin-top-bar">
        <img src="photo/counters.png" alt="" srcset="" height="33px" style="margin-top: 3.5px;margin-left: 5px;" id="show-panel">
        <div class="logo-in-admin">
            <h2>Census<span style="color: red;">Board</span></h2>
        </div>
        <a href="logout.php"> <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
    </header>
    <main class="main-container">
        <div class="counters" onscroll="changecolor()">
            <div class="heading-counter">
                <h3 class="on-work">Counters on work</h3>
                <div class="admin-menu">
                    <i class="fa-solid fa-circle-xmark"></i>
                </div>

            </div>
            <div class="list-counters">

                <?php
                include("congfig.inc.php");
                $sql = "SELECT * FROM counters";
                $res = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($res)) {
                ?>
                    <div class="main-list-counter">
                        <div class="id-counter"><?php echo $row['ID'] ?></div>
                        <div class="fullName-counter"><?php echo $row['Full_Name'] ?></div>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
        <div class="add-counters">
            <div class="heading-add">
                <h3>Register new Counter</h3>
            </div>
            <div class="counter-register">
                <form action="counter_added.php" method="post">
                    <div class="formdiv">
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
                        <label for="">Full Name:</label><br>
                        <input type="text" name="fl_name" class="h30 w250" required><br>
                        <label for="">Mobile number or email:</label><br>
                        <input type="text" name="contact"  class="h30 w250" required><br>
                        <label for="">Area Code:</label><br>
                        <input type="text" name="a-code"  class="h30 w250" required><br>
                        <label for="">New Password:</label><br>
                        <input type="password" name="pwd1"  class="h30 w250" required><br>
                        <label for="">Confirm password:</label><br>
                        <input type="password" name="pwd2" class="h30 w250"><br>
                        <input type="submit" value="Register" name="register">
                    </div>
                </form>

            </div>
        </div>
    </main>
    <script>
        jQuery(document).ready(function() {
            jQuery('input').each(function() {

                // Add your read only attribute and remove it onClick/focus
                jQuery(this).attr('readonly', 'true').attr('onClick', "this.removeAttribute('readonly');");

                // Reintroduce the readonly attribute on mouseleave
                jQuery(this).on('mouseleave', function() {
                    jQuery(this).attr('readonly', 'true')
                });
            });
        });

        function changecolor() {
            var x = document.querySelector(".heading-counter");
            x.style.backgroundColor = "#09265F";
            document.querySelector(".heading-counter h3").style.color = "#fff";
        }
        document.querySelector(".admin-menu").onclick = function() {
            document.querySelector(".counters").style.marginLeft = "-1000px";
        }
        document.getElementById("show-panel").onclick = function() {
            document.querySelector(".counters").style.marginLeft = "0px";
        }
    </script>
</body>

</html>