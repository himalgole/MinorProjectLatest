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
            background-color: #f0f0f1;
        }
    </style>
    <script src="js/jquery-3.6.0.min.js"></script>
</head>

<body>

    <div class="sidebar">
        <header>
            <h4><?php echo $_SESSION['full_name']; ?><i class="fa-solid fa-rectangle-xmark"></i>
        </header>
        <div class="task">
            <ul>
                <li onmouseover="showProfile()"><a href=""><i class="fa-solid fa-user"></i>Profile</a>
                    <div class="profile-div">
                        hello
                    </div>
                </li>
                <li><a href=""><i class="fa-solid fa-clock-rotate-left"></i>History</a></li>
                <li><a href=""><i class="fa-solid fa-user-group"></i>Friends</a></li>
                <li><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a></li>
            </ul>
        </div>
    </div> <!-- sidebar div ends-->
    <div class="form-heading">
        <i class="fa-solid fa-bars"></i>
        <h2>Census<span style="color: red;">Board</span></h2>
    </div>
    <div class="form-div">
        <div class="note">
            <p>Fill up the population details.</p>
        </div>
        <div class="note">
            <p><span style="color: red;">*<span>fields are mandatory.</p>
            <?php
            
            if (isset($_POST['submit'])) {
                ob_start();
                $province = array();
                $province = $_POST['district'];
                echo $province;
            }
            ?>
        </div>
        <form action="form_success.php" method="post">
            <div class="title">
                <h3>General:</h3>
            </div>
            <div class="form-row">
                <div class="p-name">

                    <label for="">Province<span style="color: red;">*</span>:</label>
                    <select id="province" class="w200 h25" name="province">
                        <option selected disabled>Select Province</option>
                        <?php
                        include("congfig.inc.php");
                        $sql = "SELECT * FROM province";
                        $res = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($res)) { ?>
                            <option value="<?php echo $row['pid'] ?>"><?php echo $row['province'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="d-name">
                    <label for="">District<span style="color: red;">*</span>:</label>
                    <select id="district" class="w200 h25" name="district">
                        <option selected disabled>Select district</option>
                    </select>
                </div>
                <div class="c-name">
                    <label for="">Local Level<span style="color: red;">*</span>:</label>
                    <select id="city" class="w200 h25" name="city">
                        <option selected disabled>Select city</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <p>
                    <label for="">Province Code</label>
                    <input type="number" name="pro_code" id="pro-code" class="w60 h25">
                </p>
                <p>
                    <label for="">District Code</label>
                    <input type="number" name="dis_code" id="dis-code" class="w60 h25">
                </p>
                <p>
                    <label for="">Local Level Code</label>
                    <input type="number" name="loc-code" id="lvl-code" class="w60 h25">

                </p>
            </div>
            <!--form-row -->
            <div class="form-row">
                <div class="village-name">
                    <label for="village">Village<span style="color: red;">*</span>:</label>
                    <input type="text" name="village" class="h25 w100" placeholder="Village Name">
                </div>
                <div class="hof">
                    <label for="hof">Head Of Family<span style="color: red;">*</span>:</label>
                    <input type="text" name="fname" class="h30 w100" placeholder="First Name">
                    <input type="text" name="mname" class="h30 w100" placeholder="Middle Name">
                    <input type="text" name="lname" class="h30 w100" placeholder="Last Name">
                </div>
            </div>
            <div class="form-row">
                <div class="a-code">
                    <label for="">Area Code<span style="color: red;">*</span>:</label>
                    <input type="number" name="acode" class="h25 w100" id="acode" placeholder="Area Code">
                </div>
                <div class="h-code">
                    <label for="">House Code<span style="color: red;">*</span>:</label>
                    <input type="number" name="hcode" class="h30" placeholder="House Code" required>
                </div>
            </div>

            <div class="title">
                <h3>Family Section:</h3>
            </div>
            <div class="form-row">
                <p>
                    Family members number<span style="color: red;">*</span>
                    <input type="number" name="member-number" id="member-num" class="h25 w40">
                </p>
                <p>
                    <label for="">Religion:</label>
                    <select name="religion">
                        <option value="buddhist">buddhist</option>
                        <option value="hindu">hindu</option>
                        <option value="christian">christian</option>
                        <option value="muslim">muslim</option>
                        <option value="other">other</option>
                    </select>
                </p>
            </div>
            <div class="form-row">
                <p>
                    How many members are currently abroad?<span style="color: red;">*</span>
                    <input type="number" name="abroad-member" id="meber-num" class="h25 w40">
                </p>
                <p>
                    <label for="">Caste:</label>
                    <select name="caste">
                       
                        <option value="brahman">brahman</option>
                        <option value="chhetri">chhetri</option>
                        <option value="magar">magar</option>
                        <option value="tamang">tamang</option>
                        <option value="yadav">yadav</option>
                        <option value="other">other</option>
                    </select>
                    
                </p>
            </div>

            <div class="form-row">
                <p>
                    Did anyone die last 12 months?<span style="color: red;">*</span>
                    <label for="yes">yes:</label>
                    <input type="radio" name="death" id="yes" onclick="if(this.checked){death_yes(this)}">
                    <label for="no">no</label>
                    <input type="radio" name="death" id="no" checked onclick="if(this.checked){death_no(this)}">
                </p>
                <p>
                    <label for="">Language:</label>
                    <select name="language">
                        <option value="tamang">tamang</option>
                        <option value="nepali">nepali</option>
                        <option value="maithili">maithili</option>
                        <option value="bhojpuri">bhojpuri</option>
                        <option value="newari">newari</option>
                        <option value="other">other</option>
                    </select>
                </p>
            </div>

            <div class="death-whole">
                <div class="death-div">
                    <hr>
                    <div class="simple-row">
                        <div class="first-name">
                            <label for="first name">First Name:</label>
                            <input type="text" placeholder="First Name" class="h30 w150" name="df_name1">
                        </div>
                        <div class="middle-name">
                            <label for="middle name">Middle Name:</label>
                            <input type="text" placeholder="Middle Name" class="h30 w150" name="dm_name1">
                        </div>
                        <div class="last-name">
                            <label for="last name">Last Name:</label>
                            <input type="text" placeholder="Last Name" class="h30 w150" name="dl_name1">
                        </div>
                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">Age:</label>
                            <input type="number" name="death-age1" class="w40 h25" class="death-input">
                        </p>
                        <p>
                            <label for="death-cause">Cause of Death</label>
                            <select name="death-cause1" class="h25">
                            <option value="Natural">Natural/Aged</option>
                                <option value="Disease">Disease</option>
                                <option value="Accident">Accident</option>
                                <option value="Suicide">Suicide</option>
                                <option value="Child Delivery">Child Delivery</option>
                                <option value="Natural Disaster">Natural Disaster</option>
                                <option value="Murder">Murder</option>
                                <option value="Other">Any Other</option>
                            </select>
                        </p>
                        <p style="margin-right: 30px;">
                            <label for="">Sex:</label>
                            <label for="male">M</label>
                            <input type="radio" name="sex1" class="death-input" value="male">
                            <label for="female">F</label>
                            <input type="radio" name="sex1" class="death-input" value="female">
                        </p>
                    </div>
                    <hr>
                </div> <!-- death div-->
                <div class="death-div">
                    <hr>
                    <div class="simple-row">
                        <div class="first-name">
                            <label for="first name">First Name:</label>
                            <input type="text" placeholder="First Name" class="h30 w150" name="df_name2">
                        </div>
                        <div class="middle-name">
                            <label for="middle name">Middle Name:</label>
                            <input type="text" placeholder="Middle Name" class="h30 w150" name="dm_name2">
                        </div>
                        <div class="last-name">
                            <label for="last name">Last Name:</label>
                            <input type="text" placeholder="Last Name" class="h30 w150" name="dl_name2">
                        </div>
                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">Age:</label>
                            <input type="number" name="death-age2" class="w40 h25">
                        </p>
                        <p>
                            <label for="death-cause">Cause of Death</label>
                            <select name="death-cause2" class="h25">
                            <option value="Natural">Natural/Aged</option>
                                <option value="Disease">Disease</option>
                                <option value="Accident">Accident</option>
                                <option value="Suicide">Suicide</option>
                                <option value="Child Delivery">Child Delivery</option>
                                <option value="Natural Disaster">Natural Disaster</option>
                                <option value="Murder">Murder</option>
                                <option value="Other">Any Other</option>
                            </select>
                        </p>
                        <p style="margin-right: 30px;">
                            <label for="">Sex:</label>
                            <label for="male">M</label>
                            <input type="radio" name="sex2" id="" value="male">
                            <label for="female">F</label>
                            <input type="radio" name="sex2" id="" value="female">
                        </p>
                    </div>
                    <hr>
                </div>
                <!--death div-->
                <div class="death-div">
                    <hr>
                    <div class="simple-row">
                        <div class="first-name">
                            <label for="first name">First Name:</label>
                            <input type="text" placeholder="First Name" class="h30 w150" name="df_name3">
                        </div>
                        <div class="middle-name">
                            <label for="middle name">Middle Name:</label>
                            <input type="text" placeholder="Middle Name" class="h30 w150" name="dm_name3">
                        </div>
                        <div class="last-name">
                            <label for="last name">Last Name:</label>
                            <input type="text" placeholder="Last Name" class="h30 w150" name="dl_name3">
                        </div>
                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">Age:</label>
                            <input type="number" name="death-age3" class="w40 h25">
                        </p>
                        <p>
                            <label for="death-cause">Cause of Death</label>
                            <select name="death-cause3" class="h25">
                                <option value="Natural">Natural/Aged</option>
                                <option value="Disease">Disease</option>
                                <option value="Accident">Accident</option>
                                <option value="Suicide">Suicide</option>
                                <option value="Child Delivery">Child Delivery</option>
                                <option value="Natural Disaster">Natural Disaster</option>
                                <option value="Murder">Murder</option>
                                <option value="Other">Any Other</option>
                            </select>
                        </p>
                        <p style="margin-right: 30px;">
                            <label for="">Sex:</label>
                            <label for="male">M</label>
                            <input type="radio" name="sex3" id="" value="male">
                            <label for="female">F</label>
                            <input type="radio" name="sex3" id="" value="female">
                        </p>
                    </div>
                    <hr>
                </div>
                <!--death div-->
            </div>
            <div class="form-row">
                <div class="ownership">
                    <label for="owner">Home Ownership Status<span style="color: red;">*</span>:</label>
                    <label for="own">Own:</label>
                    <input type="radio" name="homeownership" value="own" id="own">
                    <label for="rent">Rent:</label>
                    <input type="radio" name="homeownership" value="rent" id="rent">
                </div>
            </div>
            <div class="form-row">
                <p>
                    <label for="vehicle">1. Which of these vehecles and equipments do you have?<span style="color: red;">*</span></label><br>
                    <label for="rd">Radio:</label>
                    <input type="checkbox" name="radio" id="rd">
                    <label for="tv">Television:</label>
                    <input type="checkbox" name="television" id="tv">
                    <label for="tel">Telephone:</label>
                    <input type="checkbox" name="telephone" id="tel">
                    <label for="phone">Mobile Phone:</label>
                    <input type="checkbox" name="mobile" id="phone">
                    <label for="pc">Desktop/laptop:</label>
                    <input type="checkbox" name="pc" id="pc">
                    <label for="net">Internet:</label>
                    <input type="checkbox" name="internet" id="net">
                    <label for="car">Car/jeep/van:</label>
                    <input type="checkbox" name="car" id="car">
                    <label for="bike">Bike/Scooter:</label>
                    <input type="checkbox" name="bike" id="name">
                    <label for="cycle">Bicycle:</label>
                    <input type="checkbox" name="bicycle" id="cycle">
                    <label for="ref">Refregerator:</label>
                    <input type="checkbox" name="refrigerator" id="ref">
                    <label for="wm">Washing Machine:</label>
                    <input type="checkbox" name="washingMachine" id="wm">
                    <label for="none_e">None:</label>
                    <input type="checkbox" name="none" id="none_e">
                </p>
            </div>
            <div class="form-row">
                <p>
                    Family income (per year):
                    <input type="text" placeholder="in cash" class="h25" name="income">
                </p>
            </div>
            <div class="title">
                <h3>Personal Section:</h3>
            </div>

            <div class="note">
                <p>Enter Family members information.</p>
            </div>
            <div class="members">
                <hr>
                <div class="simple-row">
                    <div class="first-name">
                        <label for="">First Name:</label>
                        <input type="text" name="fname1" id="" placeholder="First Name" class="h25 w150">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname1" id="" placeholder="Middle Name" class="h25 w150">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname1" id="" placeholder="Last Name" class="h25 w150">
                    </div>
                </div>
                <!--form row -->
                <div class="form-row">
                    <p>
                        <label for="">Profession:</label>
                        <select name="profession1" class="h25">
                            <option value="teacher">Teacher</option>
                            <option value="doctor">Doctor</option>
                            <option value="agriculture">Agriculture</option>
                            <option value="engineer">Engineer</option>
                            <option value="businessman">Businessman</option>
                            <option value="military">Military</option>
                            <option value="other">Others</option>
                            <option value="unemp">Unemployed</option>
                        </select>
                    </p>
                    <p>
                        <label for="edu">Education:</label>
                        <select name="education1" id="" class="h25">
                            <option value="elementary">Elementary</option>
                            <option value="primary">Primary</option>
                            <option value="secondary">Secondary</option>
                            <option value="h_secodary">Higher Secondary</option>
                            <option value="bachelor">Bachelor</option>
                            <option value="masters">Masters</option>
                            <option value="phd">PHD</option>
                            <option value="none">None</option>
                        </select>
                    </p>
                    <p>
                        <label for="">Relation:</label>
                        <select name="relation1" class="h25">
                            <option value="head">Head of family</option>
                            <option value="mother">Mother</option>
                            <option value="father">Father</option>
                            <option value="wife">Wife</option>
                            <option value="husband">Husband</option>
                            <option value="son">Son</option>
                            <option value="daughter">Daughter</option>
                            <option value="daughter-in-law">Daughter-in-law</option>
                            <option value="son-in-law">Son-in-law</option>
                            <option value="grand-son">Grand son</option>
                            <option value="grand-daughter">Grand daughter</option>
                            <option value="sibling">siblings</option>
                            <option value="other">other</option>
                        </select>
                    </p>
                </div>
                <div class="form-row">
                    <p>
                        <label for="dob">DOB:</label>
                        <input type="date" name="date1" id="" class="h25">
                    </p>
                    <p>
                        <label for="gender">Gender:</label>
                        <label for="male">M</label>
                        <input type="radio" name="gender1" value="male">
                        <label for="F">F</label>
                        <input type="radio" name="gender1" value="female">
                    </p>
                </div>
                <hr>
            </div>
            <div class="members">
                <hr>
                <div class="simple-row">
                    <div class="first-name">
                        <label for="">First Name:</label>
                        <input type="text" name="fname2" id="" placeholder="First Name" class="h30 w150">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname2" id="" placeholder="Middle Name" class="h30 w150">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname2" id="" placeholder="Last Name" class="h30 w150">
                    </div>
                </div>
                <!--form row -->
                <div class="form-row">
                    <p>
                        <label for="">Profession:</label>
                        <select name="profession2" class="h25">
                        <option value="teacher">Teacher</option>
                            <option value="doctor">Doctor</option>
                            <option value="agriculture">Agriculture</option>
                            <option value="engineer">Engineer</option>
                            <option value="businessman">Businessman</option>
                            <option value="military">Military</option>
                            <option value="other">Others</option>
                            <option value="unemp">Unemployed</option>
                        </select>
                    </p>
                    <p>
                        <label for="edu">Education:</label>
                        <select name="education2" id="" class="h25">
                            <option value="elementary">Elementary</option>
                            <option value="primary">Primary</option>
                            <option value="secondary">Secondary</option>
                            <option value="h_secodary">Higher Secondary</option>
                            <option value="bachelor">Bachelor</option>
                            <option value="masters">Masters</option>
                            <option value="phd">PHD</option>
                            <option value="none">None</option>
                        </select>
                    </p>
                    <p>
                        <label for="">Relation:</label>
                        <select name="relation2" class="h25">
                            <option value="head">Head of family</option>
                            <option value="mother">Mother</option>
                            <option value="father">Father</option>
                            <option value="wife">Wife</option>
                            <option value="husband">Husband</option>
                            <option value="son">Son</option>
                            <option value="daughter">Daughter</option>
                            <option value="daughter-in-law">Daughter-in-law</option>
                            <option value="son-in-law">Son-in-law</option>
                            <option value="grand-son">Grand son</option>
                            <option value="grand-daughter">Grand daughter</option>
                            <option value="sibling">siblings</option>
                            <option value="other">other</option>
                        </select>
                    </p>
                </div>
                <div class="form-row">
                    <p>
                        <label for="">DOB:</label>
                        <input type="date" name="date2" id="" class="h25">
                    </p>
                    <p>
                        <label for="gender">Gender:</label>
                        <label for="male">M</label>
                        <input type="radio" name="gender2" value="male">
                        <label for="F">F</label>
                        <input type="radio" name="gender2" value="female">
                    </p>
                </div>
                <hr>
            </div>
            <div class="members">
                <hr>
                <div class="simple-row">
                    <div class="first-name">
                        <label for="">First Name:</label>
                        <input type="text" name="fname3" id="" placeholder="First Name" class="h30 w150">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname3" id="" placeholder="Middle Name" class="h30 w150">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname3" id="" placeholder="Last Name" class="h30 w150">
                    </div>
                </div>
                <!--form row -->
                <div class="form-row">
                    <p>
                        <label for="">Profession:</label>
                        <select name="profession3" class="h25">
                            <option value="teacher">Teacher</option>
                            <option value="doctor">Doctor</option>
                            <option value="agriculture">Agriculture</option>
                            <option value="engineer">Engineer</option>
                            <option value="businessman">Businessman</option>
                            <option value="military">Military</option>
                            <option value="other">Others</option>
                            <option value="unemp">Unemployed</option>
                        </select>
                    </p>
                    <p>
                        <label for="edu">Education:</label>
                        <select name="education3" id="" class="h25">
                        <option value="elementary">Elementary</option>
                            <option value="primary">Primary</option>
                            <option value="secondary">Secondary</option>
                            <option value="h_secodary">Higher Secondary</option>
                            <option value="bachelor">Bachelor</option>
                            <option value="masters">Masters</option>
                            <option value="phd">PHD</option>
                            <option value="none">None</option>
                        </select>
                    </p>
                    <p>
                        <label for="">Relation:</label>
                        <select name="relation3" class="h25">
                            <option value="head">Head of family</option>
                            <option value="mother">Mother</option>
                            <option value="father">Father</option>
                            <option value="wife">Wife</option>
                            <option value="husband">Husband</option>
                            <option value="son">Son</option>
                            <option value="daughter">Daughter</option>
                            <option value="daughter-in-law">Daughter-in-law</option>
                            <option value="son-in-law">Son-in-law</option>
                            <option value="grand-son">Grand son</option>
                            <option value="grand-daughter">Grand daughter</option>
                            <option value="sibling">siblings</option>
                            <option value="other">other</option>
                        </select>
                    </p>

                </div>
                <div class="form-row">
                    <p>
                        <label for="">DOB:</label>
                        <input type="date" name="date3" id="" class="h25">
                    </p>
                    <p>
                        <label for="gender">Gender:</label>
                        <label for="male">M</label>
                        <input type="radio" name="gender3" value="male">
                        <label for="F">F</label>
                        <input type="radio" name="gender3" value="female">
                    </p>
                </div>
                <hr>
            </div>
            <div class="members">
                <hr>
                <div class="simple-row">
                    <div class="first-name">
                        <label for="">First Name:</label>
                        <input type="text" name="fname4" id="" placeholder="First Name" class="h30 w150">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname4" id="" placeholder="Middle Name" class="h30 w150">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname4" id="" placeholder="Last Name" class="h30 w150">
                    </div>
                </div>
                <!--form row -->
                <div class="form-row">
                    <p>
                        <label for="">Profession:</label>
                        <select name="profession4" class="h25">
                            <option value="teacher">Teacher</option>
                            <option value="doctor">Doctor</option>
                            <option value="agriculture">Agriculture</option>
                            <option value="engineer">Engineer</option>
                            <option value="businessman">Businessman</option>
                            <option value="military">Military</option>
                            <option value="other">Others</option>
                            <option value="unemp">Unemployed</option>
                        </select>
                    </p>
                    <p>
                        <label for="edu">Education:</label>
                        <select name="education4" id="" class="h25">
                            <option value="elementary">Elementary</option>
                            <option value="primary">Primary</option>
                            <option value="secondary">Secondary</option>
                            <option value="h_secodary">Higher Secondary</option>
                            <option value="bachelor">Bachelor</option>
                            <option value="masters">Masters</option>
                            <option value="phd">PHD</option>
                            <option value="none">None</option>
                        </select>
                    </p>
                    <p>
                        <label for="">Relation:</label>
                        <select name="relation4" class="h25">
                            <option value="head">Head of family</option>
                            <option value="mother">Mother</option>
                            <option value="father">Father</option>
                            <option value="wife">Wife</option>
                            <option value="husband">Husband</option>
                            <option value="son">Son</option>
                            <option value="daughter">Daughter</option>
                            <option value="daughter">Daughter-in-law</option>
                            <option value="son-in-law">Son-in-law</option>
                            <option value="grand-son">Grand son</option>
                            <option value="grand-daughter">Grand daughter</option>
                            <option value="sibling">siblings</option>
                            <option value="other">other</option>
                        </select>
                    </p>

                </div>
                <div class="form-row">
                    <p>
                        <label for="">DOB:</label>
                        <input type="date" name="date4" id="" class="h25">
                    </p>
                    <p>
                        <label for="gender">Gender:</label>
                        <label for="male">M</label>
                        <input type="radio" name="gender4" value="male">
                        <label for="F">F</label>
                        <input type="radio" name="gender4" value="female">
                    </p>
                </div>
                <hr>
            </div>
            <div class="members">
                <hr>
                <div class="simple-row">
                    <div class="first-name">
                        <label for="">First Name:</label>
                        <input type="text" name="fname5" id="" placeholder="First Name" class="h30 w100">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname5" id="" placeholder="Middle Name" class="h30 w100">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname5" id="" placeholder="Last Name" class="h30 w100">
                    </div>
                </div>
                <!--form row -->
                <div class="form-row">
                    <p>
                        <label for="">Profession:</label>
                        <select name="profession5" class="h25">
                            <option value="teacher">Teacher</option>
                            <option value="doctor">Doctor</option>
                            <option value="agriculture">Agriculture</option>
                            <option value="engineer">Engineer</option>
                            <option value="businessman">Businessman</option>
                            <option value="military">Military</option>
                            <option value="other">Others</option>
                            <option value="unemp">Unemployed</option>
                        </select>
                    </p>
                    <p>
                        <label for="edu">Education:</label>
                        <select name="education5" id="" class="h25">
                            <option value="elementary">Elementary</option>
                            <option value="primary">Primary</option>
                            <option value="secondary">Secondary</option>
                            <option value="h_secodary">Higher Secondary</option>
                            <option value="bachelor">Bachelor</option>
                            <option value="masters">Masters</option>
                            <option value="phd">PHD</option>
                            <option value="none">None</option>
                        </select>
                    </p>
                    <p>
                        <label for="">Relation:</label>
                        <select name="relation5" class="h25">
                            <option value="head">Head of family</option>
                            <option value="mother">Mother</option>
                            <option value="father">Father</option>
                            <option value="wife">Wife</option>
                            <option value="husband">Husband</option>
                            <option value="son">Son</option>
                            <option value="daughter">Daughter</option>
                            <option value="daughter">Daughter-in-law</option>
                            <option value="son-in-law">Son-in-law</option>
                            <option value="grand-son">Grand son</option>
                            <option value="grand-daughter">Grand daughter</option>
                            <option value="sibling">siblings</option>
                            <option value="other">other</option>
                        </select>
                    </p>

                </div>
                <div class="form-row">
                    <p>
                        <label for="">DOB:</label>
                        <input type="date" name="date5" id="" class="h25">
                    </p>
                    <p>
                        <label for="gender">Gender:</label>
                        <label for="male">M</label>
                        <input type="radio" name="gender5" value="male">
                        <label for="F">F</label>
                        <input type="radio" name="gender5" value="female">
                    </p>
                </div>
                <hr>
            </div>
            <div class="members">
                <hr>
                <div class="simple-row">
                    <div class="first-name">
                        <label for="">First Name:</label>
                        <input type="text" name="fname6" id="" placeholder="First Name" class="h30 w100">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname6" id="" placeholder="Middle Name" class="h30 w100">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname6" id="" placeholder="Last Name" class="h30 w100">
                    </div>
                </div>
                <!--form row -->
                <div class="form-row">
                    <p>
                        <label for="">Profession:</label>
                        <select name="profession6" class="h25">
                            <option value="teacher">Teacher</option>
                            <option value="doctor">Doctor</option>
                            <option value="agriculture">Agriculture</option>
                            <option value="engineer">Engineer</option>
                            <option value="businessman">Businessman</option>
                            <option value="military">Military</option>
                            <option value="other">Others</option>
                            <option value="unemp">Unemployed</option>
                        </select>
                    </p>
                    <p>
                        <label for="edu">Education:</label>
                        <select name="education6" id="" class="h25">
                            <option value="elementary">Elementary</option>
                            <option value="primary">Primary</option>
                            <option value="secondary">Secondary</option>
                            <option value="h_secodary">Higher Secondary</option>
                            <option value="bachelor">Bachelor</option>
                            <option value="masters">Masters</option>
                            <option value="phd">PHD</option>
                            <option value="none">None</option>
                        </select>
                    </p>
                    <p>
                        <label for="">Relation:</label>
                        <select name="relation6" class="h25">
                            <option value="head">Head of family</option>
                            <option value="mother">Mother</option>
                            <option value="father">Father</option>
                            <option value="wife">Wife</option>
                            <option value="husband">Husband</option>
                            <option value="son">Son</option>
                            <option value="daughter">Daughter</option>
                            <option value="daughter">Daughter-in-law</option>
                            <option value="son-in-law">Son-in-law</option>
                            <option value="grand-son">Grand son</option>
                            <option value="grand-daughter">Grand daughter</option>
                            <option value="sibling">siblings</option>
                            <option value="other">other</option>
                        </select>
                    </p>

                </div>
                <div class="form-row">
                    <p>
                        <label for="">DOB:</label>
                        <input type="date" name="date6" id="" class="h25">
                    </p>
                    <p>
                        <label for="gender">Gender:</label>
                        <label for="male">M</label>
                        <input type="radio" name="gender6" value="male">
                        <label for="F">F</label>
                        <input type="radio" name="gender6" value="female">
                    </p>
                </div>
                <hr>
            </div>
            <div class="members">
                <hr>
                <div class="simple-row">
                    <div class="first-name">
                        <label for="">First Name:</label>
                        <input type="text" name="fname7" id="" placeholder="First Name" class="h30 w100">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname7" id="" placeholder="Middle Name" class="h30 w100">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname7" id="" placeholder="Last Name" class="h30 w100">
                    </div>
                    <!--form row -->
                    <div class="form-row">
                        <p>
                            <label for="">Profession:</label>
                            <select name="profession7" class="h25">
                                <option value="doctor">Doctor</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="engineer">Engineer</option>
                                <option value="businessman">Businessman</option>
                                <option value="military">Military</option>
                                <option value="other">Others</option>
                                <option value="unemp">Unemployed</option>
                            </select>
                        </p>
                        <p>
                            <label for="edu">Education:</label>
                            <select name="education7" id="" class="h25">
                                <option value="elementary">Elementary</option>
                                <option value="primary">Primary</option>
                                <option value="secondary">Secondary</option>
                                <option value="h_secodary">Higher Secondary</option>
                                <option value="bachelor">Bachelor</option>
                                <option value="masters">Masters</option>
                                <option value="phd">PHD</option>
                                <option value="none">None</option>
                            </select>
                        </p>
                        <p>
                            <label for="">Relation:</label>
                            <select name="relation7" class="h25">
                                <option value="head">Head of family</option>
                                <option value="mother">Mother</option>
                                <option value="father">Father</option>
                                <option value="wife">Wife</option>
                                <option value="husband">Husband</option>
                                <option value="son">Son</option>
                                <option value="daughter">Daughter</option>
                                <option value="daughter">Daughter-in-law</option>
                                <option value="son-in-law">Son-in-law</option>
                                <option value="grand-son">Grand son</option>
                                <option value="grand-daughter">Grand daughter</option>
                                <option value="sibling">siblings</option>
                                <option value="other">other</option>
                            </select>
                        </p>

                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">DOB:</label>
                            <input type="date" name="date7" id="" class="h25">
                        </p>
                        <p>
                        <label for="gender">Gender:</label>
                        <label for="male">M</label>
                        <input type="radio" name="gender7" value="male">
                        <label for="F">F</label>
                        <input type="radio" name="gender7" value="female">
                    </p>
                    </div>
                    <hr>
                </div>
                <div class="members">
                    <hr>
                    <div class="simple-row">
                        <div class="first-name">
                            <label for="">First Name:</label>
                            <input type="text" name="fname8" id="" placeholder="First Name" class="h30 w100">
                        </div>
                        <div class="middle-name">
                            <label for="">Middle Name:</label>
                            <input type="text" name="mname8" id="" placeholder="Middle Name" class="h30 w100">
                        </div>
                        <div class="last-name">
                            <label for="">Last Name:</label>
                            <input type="text" name="lname8" id="" placeholder="Last Name" class="h30 w100">
                        </div>
                    </div>
                    <!--form row -->
                    <div class="form-row">
                        <p>
                            <label for="">Profession:</label>
                            <select name="profession8" class="h25">
                                <option value="doctor">Doctor</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="engineer">Engineer</option>
                                <option value="businessman">Businessman</option>
                                <option value="military">Military</option>
                                <option value="other">Others</option>
                                <option value="unemp">Unemployed</option>
                            </select>
                        </p>
                        <p>
                            <label for="edu">Education:</label>
                            <select name="education8" id="" class="h25">
                                <option value="elementary">Elementary</option>
                                <option value="primary">Primary</option>
                                <option value="secondary">Secondary</option>
                                <option value="h_secodary">Higher Secondary</option>
                                <option value="bachelor">Bachelor</option>
                                <option value="masters">Masters</option>
                                <option value="phd">PHD</option>
                                <option value="none">None</option>
                            </select>
                        </p>
                        <p>
                            <label for="">Relation:</label>
                            <select name="relation8" class="h25">
                                <option value="head">Head of family</option>
                                <option value="mother">Mother</option>
                                <option value="father">Father</option>
                                <option value="wife">Wife</option>
                                <option value="husband">Husband</option>
                                <option value="son">Son</option>
                                <option value="daughter">Daughter</option>
                                <option value="daughter">Daughter-in-law</option>
                                <option value="son-in-law">Son-in-law</option>
                                <option value="grand-son">Grand son</option>
                                <option value="grand-daughter">Grand daughter</option>
                                <option value="sibling">siblings</option>
                                <option value="other">other</option>
                            </select>
                        </p>

                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">DOB:</label>
                            <input type="date" name="date8" class="h25">
                        </p>
                        <p>
                        <label for="gender">Gender:</label>
                        <label for="male">M</label>
                        <input type="radio" name="gender8" value="male">
                        <label for="F">F</label>
                        <input type="radio" name="gender8" value="female">
                    </p>
                    </div>
                    <hr>
                </div>
                <div class="members">
                    <hr>
                    <div class="simple-row">
                        <div class="first-name">
                            <label for="">First Name:</label>
                            <input type="text" name="fname9" id="" placeholder="First Name" class="h30 w100">
                        </div>
                        <div class="middle-name">
                            <label for="">Middle Name:</label>
                            <input type="text" name="mname9" id="" placeholder="Middle Name" class="h30 w100">
                        </div>
                        <div class="last-name">
                            <label for="">Last Name:</label>
                            <input type="text" name="lname9" id="" placeholder="Last Name" class="h30 w100">
                        </div>
                    </div>
                    <!--form row -->
                    <div class="form-row">
                        <p>
                            <label for="">Profession:</label>
                            <select name="profession9" class="h25">
                                <option value="doctor">Doctor</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="engineer">Engineer</option>
                                <option value="businessman">Businessman</option>
                                <option value="military">Military</option>
                                <option value="other">Others</option>
                                <option value="unemp">Unemployed</option>
                            </select>
                        </p>
                        <p>
                            <label for="edu">Education:</label>
                            <select name="education9" id="" class="h25">
                                <option value="elementary">Elementary</option>
                                <option value="primary">Primary</option>
                                <option value="secondary">Secondary</option>
                                <option value="h_secodary">Higher Secondary</option>
                                <option value="bachelor">Bachelor</option>
                                <option value="masters">Masters</option>
                                <option value="phd">PHD</option>
                                <option value="none">None</option>
                            </select>
                        </p>
                        <p>
                            <label for="">Relation:</label>
                            <select name="relation9" class="h25">
                                <option value="head">Head of family</option>
                                <option value="mother">Mother</option>
                                <option value="father">Father</option>
                                <option value="wife">Wife</option>
                                <option value="husband">Husband</option>
                                <option value="son">Son</option>
                                <option value="daughter">Daughter</option>
                                <option value="daughter">Daughter-in-law</option>
                                <option value="son-in-law">Son-in-law</option>
                                <option value="grand-son">Grand son</option>
                                <option value="grand-daughter">Grand daughter</option>
                                <option value="sibling">siblings</option>
                                <option value="other">other</option>
                            </select>
                        </p>

                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">DOB:</label>
                            <input type="date" name="date9" id="" class="h25">
                        </p>
                        <p>
                        <label for="gender">Gender:</label>
                        <label for="male">M</label>
                        <input type="radio" name="gender9" value="male">
                        <label for="F">F</label>
                        <input type="radio" name="gender9" value="female">
                    </p>
                    </div>
                    <hr>
                </div>
                <div class="members">
                    <hr>
                    <div class="simple-row">
                        <div class="first-name">
                            <label for="">First Name:</label>
                            <input type="text" name="fname10" id="" placeholder="First Name" class="h30 w100">
                        </div>
                        <div class="middle-name">
                            <label for="">Middle Name:</label>
                            <input type="text" name="mname10" id="" placeholder="Middle Name" class="h30 w100">
                        </div>
                        <div class="last-name">
                            <label for="">Last Name:</label>
                            <input type="text" name="lname10" id="" placeholder="Last Name" class="h30 w100">
                        </div>
                    </div>
                    <!--form row -->
                    <div class="form-row">
                        <p>
                            <label for="">Profession:</label>
                            <select name="profession10" class="h25">
                                <option value="doctor">Doctor</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="engineer">Engineer</option>
                                <option value="businessman">Businessman</option>
                                <option value="military">Military</option>
                                <option value="other">Others</option>
                                <option value="unemp">Unemployed</option>
                            </select>
                        </p>
                        <p>
                            <label for="edu">Education:</label>
                            <select name="education10" class="h25">
                                <option value="elementary">Elementary</option>
                                <option value="primary">Primary</option>
                                <option value="secondary">Secondary</option>
                                <option value="h_secodary">Higher Secondary</option>
                                <option value="bachelor">Bachelor</option>
                                <option value="masters">Masters</option>
                                <option value="phd">PHD</option>
                                <option value="none">None</option>
                            </select>
                        </p>
                        <p>
                            <label for="">Relation:</label>
                            <select name="relation10" class="h25">
                                <option value="head">Head of family</option>
                                <option value="mother">Mother</option>
                                <option value="father">Father</option>
                                <option value="wife">Wife</option>
                                <option value="husband">Husband</option>
                                <option value="son">Son</option>
                                <option value="daughter">Daughter</option>
                                <option value="daughter">Daughter-in-law</option>
                                <option value="son-in-law">Son-in-law</option>
                                <option value="grand-son">Grand son</option>
                                <option value="grand-daughter">Grand daughter</option>
                                <option value="sibling">siblings</option>
                                <option value="other">other</option>
                            </select>
                        </p>

                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">DOB:</label>
                            <input type="date" name="10" id="" class="h25">
                        </p>
                        <p>
                        <label for="gender">Gender:</label>
                        <label for="male">M</label>
                        <input type="radio" name="gender10" value="male">
                        <label for="F">F</label>
                        <input type="radio" name="gender10" value="female">
                    </p>
                    </div>
                    <hr>
                </div>
                <div class="members">
                    <hr>
                    <div class="simple-row">
                        <div class="first-name">
                            <label for="">First Name:</label>
                            <input type="text" name="fname11" id="" placeholder="First Name" class="h30 w100">
                        </div>
                        <div class="middle-name">
                            <label for="">Middle Name:</label>
                            <input type="text" name="mname11" id="" placeholder="Middle Name" class="h30 w100">
                        </div>
                        <div class="last-name">
                            <label for="">Last Name:</label>
                            <input type="text" name="lname11" id="" placeholder="Last Name" class="h30 w100">
                        </div>
                    </div>
                    <!--form row -->
                    <div class="form-row">
                        <p>
                            <label for="">Profession:</label>
                            <select name="profession11" class="h25">
                                <option value="doctor">Doctor</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="engineer">Engineer</option>
                                <option value="businessman">Businessman</option>
                                <option value="military">Military</option>
                                <option value="other">Others</option>
                                <option value="unemp">Unemployed</option>
                            </select>
                        </p>
                        <p>
                            <label for="edu">Education:</label>
                            <select name="education11" class="h25">
                                <option value="elementary">Elementary</option>
                                <option value="primary">Primary</option>
                                <option value="secondary">Secondary</option>
                                <option value="h_secodary">Higher Secondary</option>
                                <option value="bachelor">Bachelor</option>
                                <option value="masters">Masters</option>
                                <option value="phd">PHD</option>
                                <option value="none">None</option>
                            </select>
                        </p>
                        <p>
                            <label for="">Relation:</label>
                            <select name="relation11" class="h25">
                                <option value="head">Head of family</option>
                                <option value="mother">Mother</option>
                                <option value="father">Father</option>
                                <option value="wife">Wife</option>
                                <option value="husband">Husband</option>
                                <option value="son">Son</option>
                                <option value="daughter">Daughter</option>
                                <option value="daughter">Daughter-in-law</option>
                                <option value="son-in-law">Son-in-law</option>
                                <option value="grand-son">Grand son</option>
                                <option value="grand-daughter">Grand daughter</option>
                                <option value="sibling">siblings</option>
                                <option value="other">other</option>
                            </select>
                        </p>

                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">DOB:</label>
                            <input type="date" name="date11" id="" class="h25">
                        </p>
                        <p>
                        <label for="gender">Gender:</label>
                        <label for="male">M</label>
                        <input type="radio" name="gender11" value="male">
                        <label for="F">F</label>
                        <input type="radio" name="gender11" value="female">
                    </p>
                    </div>
                    <hr>
                </div>
                <div class="members">
                    <hr>
                    <div class="simple-row">
                        <div class="first-name">
                            <label for="">First Name:</label>
                            <input type="text" name="fname12" id="" placeholder="First Name" class="h30 w100">
                        </div>
                        <div class="middle-name">
                            <label for="">Middle Name:</label>
                            <input type="text" name="mname12" id="" placeholder="Middle Name" class="h30 w100">
                        </div>
                        <div class="last-name">
                            <label for="">Last Name:</label>
                            <input type="text" name="lname12" id="" placeholder="Last Name" class="h30 w100">
                        </div>
                    </div>
                    <!--form row -->
                    <div class="form-row">
                        <p>
                            <label for="">Profession:</label>
                            <select name="profession12" class="h25">
                                <option value="doctor">Doctor</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="engineer">Engineer</option>
                                <option value="businessman">Businessman</option>
                                <option value="military">Military</option>
                                <option value="other">Others</option>
                                <option value="unemp">Unemployed</option>
                            </select>
                        </p>
                        <p>
                            <label for="edu">Education:</label>
                            <select name="education12" id="" class="h25">
                                <option value="elementary">Elementary</option>
                                <option value="primary">Primary</option>
                                <option value="secondary">Secondary</option>
                                <option value="h_secodary">Higher Secondary</option>
                                <option value="bachelor">Bachelor</option>
                                <option value="masters">Masters</option>
                                <option value="phd">PHD</option>
                                <option value="none">None</option>
                            </select>
                        </p>
                        <p>
                            <label for="">Relation:</label>
                            <select name="relation12" class="h25" class="h25">
                                <option value="head">Head of family</option>
                                <option value="mother">Mother</option>
                                <option value="father">Father</option>
                                <option value="wife">Wife</option>
                                <option value="husband">Husband</option>
                                <option value="son">Son</option>
                                <option value="daughter">Daughter</option>
                                <option value="daughter">Daughter-in-law</option>
                                <option value="son-in-law">Son-in-law</option>
                                <option value="grand-son">Grand son</option>
                                <option value="grand-daughter">Grand daughter</option>
                                <option value="sibling">siblings</option>
                                <option value="other">other</option>
                            </select>
                        </p>

                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">DOB:</label>
                            <input type="date" name="date12" id="" class="h25">
                        </p>
                        <p>
                        <label for="gender">Gender:</label>
                        <label for="male">M</label>
                        <input type="radio" name="gender12" value="male">
                        <label for="F">F</label>
                        <input type="radio" name="gender12" value="female">
                    </p>
                    </div>
                    <hr>
                </div>
                <div class="title">
                    <h3>Agricultural Economy:</h3>
                </div>
                <div class="form-row">
                    <p>
                        <label for="land">Cultivated land:</label>
                        <input type="text" name="land-use" placeholder="eg. 15 kattha." class="h25">
                    </p>
                    <p>
                        <label for="production">Agricultural income:</label>
                        <input type="text" placeholder="In cash" class="h25" name="ag-income">
                    </p>
                </div>
                <div class="form-row">
                    <p>
                        <label for="land-ownership">land ownership:</label>
                        <label for="rent">Rent</label>
                        <input type="radio" name="land_ownership" id="rent" value="rent">
                        <label for="own">Own</label>
                        <input type="radio" name="land_ownership" id="own" value="own">
                    </p>
                </div>
                <div class="form-row">
                    <p>
                        Crops types you grow:
                        <label for="maize">Maize</label>
                        <input type="checkbox" name="maize" id="maize">
                        <label for="mustard">Mustard</label>
                        <input type="checkbox" name="mustard" id="mustard">
                        <label for="millet">Millet</label>
                        <input type="checkbox" name="millet" id="millet">
                        <label for="paddy">Paddy</label>
                        <input type="checkbox" name="paddy" id="paddy">
                        <label for="potato">Potato</label>
                        <input type="checkbox" name="potato" id="potato">
                        <label for="wheat">Wheat</label>
                        <input type="checkbox" name="wheat" id="wheat">
                        <label for="barley">Barley</label>
                        <input type="checkbox" name="barley" id="barley">
                        <label for="sugarcane">Sugarcane</label>
                        <input type="checkbox" name="sugarcane" id="sugarcane">
                        <label for="orchard">Orchard</label>
                        <input type="checkbox" name="orchard" id="orchard">
                        <label for="none_c">None</label>
                        <input type="checkbox" name="none" id="none_c">
                    </p>
                </div>
                <div class="form-row">
                </div>

                <div class="form-row">
                    <p>
                        Which of these animals have you been keeping since last 12 months?
                        <label for="buffalo">Buffalo</label>
                        <input type="checkbox" id="buffalo" onclick="if(this.checked){func_buffalo(this)}">
                        <label for="goat">Goat</label>
                        <input type="checkbox" id="goat" onclick="if(this.checked){func_goat(this)}">
                        <label for="cow">Cows and Oxen</label>
                        <input type="checkbox" id="cow" onclick="if(this.checked){func_cow(this)}">
                        <label for="Sheep">Sheep</label>
                        <input type="checkbox" id="sheep" onclick="if(this.checked){func_sheep(this)}">
                        <label for="yak">Yak</label>
                        <input type="checkbox" id="yak" onclick="if(this.checked){func_yak(this)}">
                        <label for="pig">Pig</label>
                        <input type="checkbox" id="pig" onclick="if(this.checked){func_pig(this)}">
                        <label for="none_a">None</label>
                        <input type="checkbox" id="none_a" onclick="if(this.checked){func_none(this)}">
                    </p>
                </div>
                <div class="form-row buffalo">
                    <p>
                        Enter no of buffaloes:
                        <input type="number" name="buffalo" id="" class="w60 h25">
                    </p>
                </div>
                <div class="form-row goat">
                    <p>
                        Enter no of goats:
                        <input type="number" name="goat" id="" class="w60 h25">
                    </p>
                </div>
                <div class="form-row cow">
                    <p>
                        Enter no of Cows and Oxen:
                        <input type="number" name="cow" id="" class="w60 h25">
                    </p>
                </div>
                <div class="form-row sheep">
                    <p>
                        Enter no of sheeps:
                        <input type="number" name="sheep" id="" class="w60 h25">
                    </p>
                </div>
                <div class="form-row yak">
                    <p>
                        Enter no of yak:
                        <input type="number" name="yak" id="" class="w60 h25">
                    </p>
                </div>
                <div class="form-row pig">
                    <p>
                        Enter no of pigs:
                        <input type="number" name="pig" id="" class="w60 h25">
                    </p>
                </div>

                <div class="btn-div">
                    <input type="submit" name="submit" class="btn" style="margin-top: 8px; border: 0; margin-right:4px; color:#fff;">
                </div>

        </form>
        <!--form el-->
    </div>
    <!--form-div-->
    <script src="js/script2.js"></script>
    <script src="api_config.js"></script>
</body>

</html>