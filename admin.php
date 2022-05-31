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
</head>

<body>
    <div class="add-panel">
        <div class="add-panel-top"><img src="photo/close-panel.png" alt="" class="add-panel-close" height="20px"></div>
        <form action="admin.php" method="post" autocomplete="off">
            <div style="text-align: center; margin-bottom: 30px;">
                <p>Add new counter </p>
                
            </div>
            <input type="text" name="counter_name" id="" placeholder="Full Name" class="admin-form-control"><br>
            <input type="text" name="contact" id="" placeholder="Mobile number or Email" class="admin-form-control" autocomplete="off"><br>
            <input type="password" name="password" id="" placeholder="New Password" class="admin-form-control" autocomplete="off"><br>
            <div class = "admin-form-control">
            <label for="gender">Gender:</label>
            <label for="male" style="border: 1px solid grey; margin-left: 3px;">Male
                <input type="radio" name="gender" id="" value="male">
            </label>
            <label for="female" style="border: 1px solid grey; margin-left: 3px;">Female
                <input type="radio" name="gender" id="" value="female">
            </label>
            </div>
            <br>
            <input type="submit" value="Register" name="register" class = "admin-form-control">
        </form>
    </div>
    <header class="admin-top-bar">
        <nav class="admin-menu">
            <ul>
                <li><a href="" id="counters-list">Counters</a></li>
                <li><a href="" id="add-counter">Add</a></li>

            </ul>
        </nav>
        <div class="mobile-menu">
            <img src="photo/menu.png" alt="menu icon" height="25px">
        </div>
        <div class="admin-logout-section">
            <a href="logout.php"> <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
           
        </div>
    </header>
    <script src="js/script.js"></script>
</body>

</html>