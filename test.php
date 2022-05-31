<?php
session_start();
if (isset($_SESSION['loggedIn'])) {
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
    <title>Census Nepal</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/3773a0fd0c.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: lightyellow;
        }
    </style>
   
</head>

<body>
    <i class="fa-solid fa-bars"></i>
    <div class="sidebar">
        <header>
            <h4><?php echo $_SESSION['full_name']; ?><i class="fa-solid fa-rectangle-xmark"></i>
        </header>
        <div class="task">
            <ul>
                <li><a href=""><i class="fa-solid fa-user"></i>Profile</a></li>
                <li><a href=""><i class="fa-solid fa-clock-rotate-left"></i>History</a></li>
                <li><a href=""><i class="fa-solid fa-user-group"></i>Friends</a></li>
                <li><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a></li>
            </ul>
        </div>
    </div>
    <div class="form-contents">
        <form action="">
            <div class="progress">
                <a href="" class="step step1">General</a>
                <a href="" class="step step2">Family Details</a>
                <a href="" class="step step3">Agriculture Details</a>
                <a href="" class="step step4">Home Animals Details</a>
                <a href="" class="step step5">Other Details</a>
            </div>
            <div class="note">
                <p><span style="color: red;">*</span>fields are mandatory</p>
            </div>
            <div class="whole-form">
            <div class="section1">
                
                 <!-- form row ends-->
               <!-- form row ends-->
             
                <!--form row ends -->
            
                <!--form row ends-->
             
                <!--form row ends-->
                <div class="form-row">
                    <div class="btn-div">
                        <div class="save">
                            <button id="save-btn" class="btn">Save</button>
                        </div>
                        <div class="nxt-btns">
                            <button id="nxt1" class="btn">Next</button>
                        </div>
                    </div>
                </div>

            </div> <!-- section1 ends-->
            <div class="section2">
                
                
               
                <div class="form-row">
                    <p>
                        Did anyone die last 12 months?<span style="color: red;">*</span>
                        <label for="yes">yes:</label>
                        <input type="radio" name="death" id="" onclick="if(this.checked){death_yes(this)}">
                        <label for="no">no</label>
                        <input type="radio" name="death" id="" checked onclick="if(this.checked){death_no(this)}">
                    </p>
                </div>
          
                <!--death-whole-->
             
         <!--member div-->
                <div class="form-row">
                    <div class="btn-div">
                        <div class="save">
                            <button id="save-btn" class="btn">Save</button>
                        </div>
                        <div class="nxt-btns">
                            <button id="prev1" class="btn prev">Prev</button>
                            <button id="nxt2" class="btn nxt">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--section2-->
            </div>
        </form>
    </div>
    <script src="js/script2.js"></script>
</body>
</html>