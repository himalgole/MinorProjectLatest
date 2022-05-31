<?php
session_start();
if (isset($_SESSION['loggedIn'])) {
    session_unset();
    session_destroy();
    header("location:populate.php");
} 
else 
{ 
    header('location: populate.php');
}
?>