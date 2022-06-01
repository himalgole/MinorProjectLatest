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
        </div>
        <form action="login.php" method="post">
            <div class="title">
                <h3>General:</h3>
            </div>
            <div class="form-row">
                <div class="p-name">
                    <label for="">Province<span style="color: red;">*</span>:</label>
                    <select name="province" id="">
                        <option value="">All</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                    </select>
                </div>
                <div class="d-name">
                    <label for="">District<span style="color: red;">*</span>:</label>
                    <select name="" id="">
                        <option value="all">All</option>
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                        <option value="d">d</option>
                        <option value="e">e</option>
                        <option value="f">f</option>
                    </select>
                </div>
                <div class="c-name">
                    <label for="">Local Level<span style="color: red;">*</span>:</label>
                    <select name="" id="">
                        <option value="all">All</option>
                        <option value="i">I</option>
                        <option value="ii">II</option>
                        <option value="iii">III</option>
                        <option value="iv">IV</option>
                        <option value="v">V</option>
                        <option value="vi">VI</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <p>
                    <label for="">Province Code</label>
                    <input type="number" name="pro_code" id="" class="w60 h25">
                </p>
                <p>
                    <label for="">District Code</label>
                    <input type="number" name="dis_code" class="w60 h25">
                </p>
                <p>
                    <label for="">Local Level Code</label>
                    <input type="number" name="loc-code" class="w60 h25">

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
                    <input type="text" name="fname" class="h30 w90" placeholder="First Name">
                    <input type="text" name="mname" class="h30 w100" placeholder="Middle Name">
                    <input type="text" name="lname" class="h30 w90" placeholder="Last Name">
                </div>
            </div>
            <div class="form-row">
                <div class="a-code">
                    <label for="">Area Code<span style="color: red;">*</span>:</label>
                    <input type="number" name="acode" class="h30" placeholder="Area Code">
                </div>
                <div class="h-code">
                    <label for="">House Code<span style="color: red;">*</span>:</label>
                    <input type="number" name="hcode" class="h30" placeholder="House Code">
                </div>
                <div class="f-code">
                    <label for="">Family Code<span style="color: red;">*</span>:</label>
                    <input type="number" name="fcode" class="h30" placeholder="Family Code">
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
                    <input type="text" name="religion" id="" class="h25 w100">
                </p>
            </div>
            <div class="form-row">
                <p>
                    How many members are currently abroad?<span style="color: red;">*</span>
                    <input type="number" name="abroad-member" id="meber-num" class="h25 w40">
                </p>
                <p>
                    <label for="">Caste:</label>
                    <input type="text" name="caste" class="h25 w100">
                </p>
            </div>

            <div class="form-row">
                <p>
                    Did anyone die last 12 months?<span style="color: red;">*</span>
                    <label for="yes">yes:</label>
                    <input type="radio" name="death" id="" onclick="if(this.checked){death_yes(this)}">
                    <label for="no">no</label>
                    <input type="radio" name="death" id="" checked onclick="if(this.checked){death_no(this)}">
                </p>
                <p>
                    <label for="">Language:</label>
                    <input type="text" name="language" class="h25 w100">
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
                                <option value="">Natural/Aged</option>
                                <option value="">Disease</option>
                                <option value="">Accident</option>
                                <option value="">Suicide</option>
                                <option value="">Child Delivery</option>
                                <option value="">Natural Disaster</option>
                                <option value="">Murder</option>
                                <option value="">Any Other</option>
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
                            <input type="text" placeholder="Last Name" class="h30 w150" name="lf_name2">
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
                                <option value="">Natural/Aged</option>
                                <option value="">Disease</option>
                                <option value="">Accident</option>
                                <option value="">Suicide</option>
                                <option value="">Child Delivery</option>
                                <option value="">Natural Disaster</option>
                                <option value="">Murder</option>
                                <option value="">Any Other</option>
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
                                <option value="">Natural/Aged</option>
                                <option value="">Disease</option>
                                <option value="">Accident</option>
                                <option value="">Suicide</option>
                                <option value="">Child Delivery</option>
                                <option value="">Natural Disaster</option>
                                <option value="">Murder</option>
                                <option value="">Any Other</option>
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
                    <input type="radio" name="homeownership" value="own">
                    <label for="rent">Rent:</label>
                    <input type="radio" name="homeownership" value="rent">
                </div>
            </div>
            <div class="form-row">
                <p>
                    <label for="vehicle">1. Which of these vehecles and equipments do you have?<span style="color: red;">*</span></label><br>
                    <label for="">Radio:</label>
                    <input type="checkbox" name="radio">
                    <label for="">Television:</label>
                    <input type="checkbox" name="television">
                    <label for="">Telephone:</label>
                    <input type="checkbox" name="telephone">
                    <label for="">Mobile Phone:</label>
                    <input type="checkbox" name="mobile">
                    <label for="">Desktop/laptop:</label>
                    <input type="checkbox" name="pc">
                    <label for="">Internet:</label>
                    <input type="checkbox" name="internet">
                    <label for="">Car/jeep/van:</label>
                    <input type="checkbox" name="car">
                    <label for="">Bike/Scooter:</label>
                    <input type="checkbox" name="bike">
                    <label for="">Cycle:</label>
                    <input type="checkbox" name="cycle">
                    <label for="">Refregerator:</label>
                    <input type="checkbox" name="refrigerator">
                    <label for="">Washing Machine:</label>
                    <input type="checkbox" name="washingMachine">
                    <label for="">None:</label>
                    <input type="checkbox" name="none">
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
                        <input type="text" name="fname1" id="" placeholder="First Name" class="h25 w100">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname1" id="" placeholder="Middle Name" class="h25 w100">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname1" id="" placeholder="Last Name" class="h25 w100">
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
                        <label for="">DOB:</label>
                        <input type="date" name="date1" id="" class="h25">
                    </p>
                </div>
                <hr>
            </div>
            <div class="members">
                <hr>
                <div class="simple-row">
                    <div class="first-name">
                        <label for="">First Name:</label>
                        <input type="text" name="fname2" id="" placeholder="First Name" class="h30 w100">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname2" id="" placeholder="Middle Name" class="h30 w100">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname2" id="" placeholder="Last Name" class="h30 w100">
                    </div>
                </div>
                <!--form row -->
                <div class="form-row">
                    <p>
                        <label for="">Profession:</label>
                        <select name="profession2" class="h25">
                            <option value="">teacher</option>
                            <option value="">doctor</option>
                            <option value="">agriculture</option>
                            <option value="">engineer</option>
                            <option value="">businessman</option>
                            <option value="">unemployed</option>
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
                </div>
                <hr>
            </div>
            <div class="members">
                <hr>
                <div class="simple-row">
                    <div class="first-name">
                        <label for="">First Name:</label>
                        <input type="text" name="fname3" id="" placeholder="First Name" class="h30 w100">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname3" id="" placeholder="Middle Name" class="h30 w100">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname3" id="" placeholder="Last Name" class="h30 w100">
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
                </div>
                <hr>
            </div>
            <div class="members">
                <hr>
                <div class="simple-row">
                    <div class="first-name">
                        <label for="">First Name:</label>
                        <input type="text" name="fname4" id="" placeholder="First Name" class="h30 w100">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname4" id="" placeholder="Middle Name" class="h30 w100">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname4" id="" placeholder="Last Name" class="h30 w100">
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
                        <input type="text" placeholder="In cash" class="h25" name="agname">
                    </p>
                </div>
                <div class="form-row">
                    <p>
                        Crops types you grow:
                        <label for="maize">Maize</label>
                        <input type="checkbox" name="maize" id="">
                        <label for="mustard">Mustard</label>
                        <input type="checkbox" name="masturd" id="">
                        <label for="millet">Millet</label>
                        <input type="checkbox" name="millet">
                        <label for="paddy">Paddy</label>
                        <input type="checkbox" name="paddy" id="">
                        <label for="potato">Potato</label>
                        <input type="checkbox" name="potato" id="">
                        <label for="wheat">Wheat</label>
                        <input type="checkbox" name="wheat">
                        <label for="barley">Barley</label>
                        <input type="checkbox" name="barley" id="">
                        <label for="sugarcane">Sugarcane</label>
                        <input type="checkbox" name="sugarcane" id="">
                        <label for="orchard">Orchard</label>
                        <input type="checkbox" name="orchard" id="">
                        <label for="none">None</label>
                        <input type="checkbox" name="none" id="">
                    </p>
                </div>
                <div class="form-row">
                </div>

                <div class="form-row">
                    <p>
                        Which of these animals have you been keeping since last 12 months?
                        <label for="buffalo">Buffalo</label>
                        <input type="checkbox" name="buffalo" id="buffalo" onclick="if(this.checked){func_buffalo(this)}">
                        <label for="goat">Goat</label>
                        <input type="checkbox" name="goat" id="goat" onclick="if(this.checked){func_goat(this)}">
                        <label for="cows">Cows and Oxen</label>
                        <input type="checkbox" name="cow" id="cow" onclick="if(this.checked){func_cow(this)}">
                        <label for="Sheep">Sheep</label>
                        <input type="checkbox" name="sheep" id="sheep" onclick="if(this.checked){func_sheep(this)}">
                        <label for="Sheep">Yak</label>
                        <input type="checkbox" name="yak" id="pig" onclick="if(this.checked){func_yak(this)}">
                        <label for="Sheep">Pig</label>
                        <input type="checkbox" name="pig" id="pig" onclick="if(this.checked){func_pig(this)}">
                        <label for="none">None</label>
                        <input type="checkbox" name="none" id="none" onclick="if(this.checked){func_none(this)}">
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


                <div class="btn-div">
                    <input type="submit" value="submit" class="btn" style="margin-top: 8px; border: 0; margin-right:4px; color:#fff;">
                </div>

        </form>
        <!--form el-->
    </div>
    <!--form-div-->
    <script src="js/script2.js"></script>
</body>
</html>

<?php
