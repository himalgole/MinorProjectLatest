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
    <header class="admin-top-bar">
        <div class="logo-in-admin">
            <h2>Census<span style="color: red;">Board</span></h2>
        </div>
           <a href="logout.php"> <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
    </header>
    <main class="main-container">
        <div class="counters">
            <h3 id="admin-appointed-list-heading">Appointed Counters</h3>
        </div>
        <div class="add-counters"></div>
    </main>
    <script src="js/script.js"></script>
</body>

</html>