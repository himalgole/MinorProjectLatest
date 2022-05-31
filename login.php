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
        <form action="#">
            <div class="title">
                <h3>General:</h3>
            </div>
            <div class="form-row">
                <div class="s-name">
                    <label for="">State<span style="color: red;">*</span>:</label>
                    <select name="" id="">
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
                            <input type="text" placeholder="First Name" class="h30 w150">
                        </div>
                        <div class="middle-name">
                            <label for="middle name">Middle Name:</label>
                            <input type="text" placeholder="Middle Name" class="h30 w150">
                        </div>
                        <div class="last-name">
                            <label for="last name">Last Name:</label>
                            <input type="text" placeholder="Last Name" class="h30 w150">
                        </div>
                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">Age:</label>
                            <input type="number" name="death-age" class="w40 h25" class="death-input">
                        </p>
                        <p>
                            <label for="death-cause">Cause of Death</label>
                            <select name="death-cause" class="h25">
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
                            <input type="radio" name="sex" id="" class="death-input">
                            <label for="female">F</label>
                            <input type="radio" name="sex" id="" class="death-input">
                        </p>
                    </div>
                    <hr>
                </div> <!-- death div-->
                <div class="death-div">
                    <hr>
                    <div class="simple-row">
                        <div class="first-name">
                            <label for="first name">First Name:</label>
                            <input type="text" placeholder="First Name" class="h30 w150">
                        </div>
                        <div class="middle-name">
                            <label for="middle name">Middle Name:</label>
                            <input type="text" placeholder="Middle Name" class="h30 w150">
                        </div>
                        <div class="last-name">
                            <label for="last name">Last Name:</label>
                            <input type="text" placeholder="Last Name" class="h30 w150">
                        </div>
                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">Age:</label>
                            <input type="number" name="death-age" class="w40 h25">
                        </p>
                        <p>
                            <label for="death-cause">Cause of Death</label>
                            <select name="death-cause" class="h25">
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
                            <input type="radio" name="sex" id="">
                            <label for="female">F</label>
                            <input type="radio" name="sex" id="">
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
                            <input type="text" placeholder="First Name" class="h30 w150">
                        </div>
                        <div class="middle-name">
                            <label for="middle name">Middle Name:</label>
                            <input type="text" placeholder="Middle Name" class="h30 w150">
                        </div>
                        <div class="last-name">
                            <label for="last name">Last Name:</label>
                            <input type="text" placeholder="Last Name" class="h30 w150">
                        </div>
                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">Age:</label>
                            <input type="number" name="death-age" class="w40 h25">
                        </p>
                        <p>
                            <label for="death-cause">Cause of Death</label>
                            <select name="death-cause" class="h25">
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
                            <input type="radio" name="sex" id="">
                            <label for="female">F</label>
                            <input type="radio" name="sex" id="">
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
                    <input type="radio" name="ownership">
                    <label for="rent">Rent:</label>
                    <input type="radio" name="ownership">
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
                    <input type="text" placeholder="in cash" class="h25">
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
                        <input type="text" name="fname" id="" placeholder="First Name" class="h25 w100">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname" id="" placeholder="Middle Name" class="h25 w100">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname" id="" placeholder="Last Name" class="h25 w100">
                    </div>
                </div>
                <!--form row -->
                <div class="form-row">
                    <p>
                        <label for="">Profession:</label>
                        <select name="profession" class="h25">
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
                        <select name="education" id="" class="h25">
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
                        <select name="relation" class="h25">
                            <option value="">Head of family</option>
                            <option value="">Mother</option>
                            <option value="">Father</option>
                            <option value="">Wife</option>
                            <option value="">Husband</option>
                            <option value="">Son</option>
                            <option value="">Daughter</option>
                            <option value="">Daughter-in-law</option>
                            <option value="">Son-in-law</option>
                            <option value="">Grand son</option>
                            <option value="">Grand daughter</option>
                            <option value="">siblings</option>
                            <option value="">other</option>
                        </select>
                    </p>

                </div>
                <div class="form-row">
                    <p>
                        <label for="">DOB:</label>
                        <input type="date" name="" id="" class="h25">
                    </p>
                </div>
                <hr>
            </div>
            <div class="members">
                <hr>
                <div class="simple-row">
                    <div class="first-name">
                        <label for="">First Name:</label>
                        <input type="text" name="fname" id="" placeholder="First Name" class="h30 w100">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname" id="" placeholder="Middle Name" class="h30 w100">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname" id="" placeholder="Last Name" class="h30 w100">
                    </div>
                </div>
                <!--form row -->
                <div class="form-row">
                    <p>
                        <label for="">Profession:</label>
                        <select name="profession" class="h25">
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
                        <select name="education" id="" class="h25">
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
                        <select name="relation" class="h25">
                            <option value="">Head of family</option>
                            <option value="">Mother</option>
                            <option value="">Father</option>
                            <option value="">Wife</option>
                            <option value="">Husband</option>
                            <option value="">Son</option>
                            <option value="">Daughter</option>
                            <option value="">Daughter-in-law</option>
                            <option value="">Son-in-law</option>
                            <option value="">Grand son</option>
                            <option value="">Grand daughter</option>
                            <option value="">siblings</option>
                            <option value="">other</option>
                        </select>
                    </p>

                </div>
                <div class="form-row">
                    <p>
                        <label for="">DOB:</label>
                        <input type="date" name="" id="" class="h25">
                    </p>
                </div>
                <hr>
            </div>
            <div class="members">
                <hr>
                <div class="simple-row">
                    <div class="first-name">
                        <label for="">First Name:</label>
                        <input type="text" name="fname" id="" placeholder="First Name" class="h30 w100">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname" id="" placeholder="Middle Name" class="h30 w100">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname" id="" placeholder="Last Name" class="h30 w100">
                    </div>
                </div>
                <!--form row -->
                <div class="form-row">
                    <p>
                        <label for="">Profession:</label>
                        <select name="profession" class="h25">
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
                        <select name="education" id="" class="h25">
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
                        <select name="relation" class="h25">
                            <option value="">Head of family</option>
                            <option value="">Mother</option>
                            <option value="">Father</option>
                            <option value="">Wife</option>
                            <option value="">Husband</option>
                            <option value="">Son</option>
                            <option value="">Daughter</option>
                            <option value="">Daughter-in-law</option>
                            <option value="">Son-in-law</option>
                            <option value="">Grand son</option>
                            <option value="">Grand daughter</option>
                            <option value="">siblings</option>
                            <option value="">other</option>
                        </select>
                    </p>

                </div>
                <div class="form-row">
                    <p>
                        <label for="">DOB:</label>
                        <input type="date" name="" id="" class="h25">
                    </p>
                </div>
                <hr>
            </div>
            <div class="members">
                <hr>
                <div class="simple-row">
                    <div class="first-name">
                        <label for="">First Name:</label>
                        <input type="text" name="fname" id="" placeholder="First Name" class="h30 w100">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname" id="" placeholder="Middle Name" class="h30 w100">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname" id="" placeholder="Last Name" class="h30 w100">
                    </div>
                </div>
                <!--form row -->
                <div class="form-row">
                    <p>
                        <label for="">Profession:</label>
                        <select name="profession" class="h25">
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
                        <select name="education" id="" class="h25">
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
                        <select name="relation" class="h25">
                            <option value="">Head of family</option>
                            <option value="">Mother</option>
                            <option value="">Father</option>
                            <option value="">Wife</option>
                            <option value="">Husband</option>
                            <option value="">Son</option>
                            <option value="">Daughter</option>
                            <option value="">Daughter-in-law</option>
                            <option value="">Son-in-law</option>
                            <option value="">Grand son</option>
                            <option value="">Grand daughter</option>
                            <option value="">siblings</option>
                            <option value="">other</option>
                        </select>
                    </p>

                </div>
                <div class="form-row">
                    <p>
                        <label for="">DOB:</label>
                        <input type="date" name="" id="" class="h25">
                    </p>
                </div>
                <hr>
            </div>
            <div class="members">
                <hr>
                <div class="simple-row">
                    <div class="first-name">
                        <label for="">First Name:</label>
                        <input type="text" name="fname" id="" placeholder="First Name" class="h30 w100">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname" id="" placeholder="Middle Name" class="h30 w100">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname" id="" placeholder="Last Name" class="h30 w100">
                    </div>
                </div>
                <!--form row -->
                <div class="form-row">
                    <p>
                        <label for="">Profession:</label>
                        <select name="profession" class="h25">
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
                        <select name="education" id="" class="h25">
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
                        <select name="relation" class="h25">
                            <option value="">Head of family</option>
                            <option value="">Mother</option>
                            <option value="">Father</option>
                            <option value="">Wife</option>
                            <option value="">Husband</option>
                            <option value="">Son</option>
                            <option value="">Daughter</option>
                            <option value="">Daughter-in-law</option>
                            <option value="">Son-in-law</option>
                            <option value="">Grand son</option>
                            <option value="">Grand daughter</option>
                            <option value="">siblings</option>
                            <option value="">other</option>
                        </select>
                    </p>

                </div>
                <div class="form-row">
                    <p>
                        <label for="">DOB:</label>
                        <input type="date" name="" id="" class="h25">
                    </p>
                </div>
                <hr>
            </div>
            <div class="members">
                <hr>
                <div class="simple-row">
                    <div class="first-name">
                        <label for="">First Name:</label>
                        <input type="text" name="fname" id="" placeholder="First Name" class="h30 w100">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname" id="" placeholder="Middle Name" class="h30 w100">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname" id="" placeholder="Last Name" class="h30 w100">
                    </div>
                </div>
                <!--form row -->
                <div class="form-row">
                    <p>
                        <label for="">Profession:</label>
                        <select name="profession" class="h25">
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
                        <select name="education" id="" class="h25">
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
                        <select name="relation" class="h25">
                            <option value="">Head of family</option>
                            <option value="">Mother</option>
                            <option value="">Father</option>
                            <option value="">Wife</option>
                            <option value="">Husband</option>
                            <option value="">Son</option>
                            <option value="">Daughter</option>
                            <option value="">Daughter-in-law</option>
                            <option value="">Son-in-law</option>
                            <option value="">Grand son</option>
                            <option value="">Grand daughter</option>
                            <option value="">siblings</option>
                            <option value="">other</option>
                        </select>
                    </p>

                </div>
                <div class="form-row">
                    <p>
                        <label for="">DOB:</label>
                        <input type="date" name="" id="" class="h25">
                    </p>
                </div>
                <hr>
            </div>
            <div class="members">
                <hr>
                <div class="simple-row">
                    <div class="first-name">
                        <label for="">First Name:</label>
                        <input type="text" name="fname" id="" placeholder="First Name" class="h30 w100">
                    </div>
                    <div class="middle-name">
                        <label for="">Middle Name:</label>
                        <input type="text" name="mname" id="" placeholder="Middle Name" class="h30 w100">
                    </div>
                    <div class="last-name">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname" id="" placeholder="Last Name" class="h30 w100">
                    </div>
                    <!--form row -->
                    <div class="form-row">
                        <p>
                            <label for="">Profession:</label>
                            <select name="profession" class="h25">
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
                            <select name="education" id="" class="h25">
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
                            <select name="relation" class="h25">
                                <option value="">Head of family</option>
                                <option value="">Mother</option>
                                <option value="">Father</option>
                                <option value="">Wife</option>
                                <option value="">Husband</option>
                                <option value="">Son</option>
                                <option value="">Daughter</option>
                                <option value="">Daughter-in-law</option>
                                <option value="">Son-in-law</option>
                                <option value="">Grand son</option>
                                <option value="">Grand daughter</option>
                                <option value="">siblings</option>
                                <option value="">other</option>
                            </select>
                        </p>

                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">DOB:</label>
                            <input type="date" name="" id="" class="h25">
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="members">
                    <hr>
                    <div class="simple-row">
                        <div class="first-name">
                            <label for="">First Name:</label>
                            <input type="text" name="fname" id="" placeholder="First Name" class="h30 w100">
                        </div>
                        <div class="middle-name">
                            <label for="">Middle Name:</label>
                            <input type="text" name="mname" id="" placeholder="Middle Name" class="h30 w100">
                        </div>
                        <div class="last-name">
                            <label for="">Last Name:</label>
                            <input type="text" name="lname" id="" placeholder="Last Name" class="h30 w100">
                        </div>
                    </div>
                    <!--form row -->
                    <div class="form-row">
                        <p>
                            <label for="">Profession:</label>
                            <select name="profession" class="h25">
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
                            <select name="education" id="" class="h25">
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
                            <select name="relation" class="h25">
                                <option value="">Head of family</option>
                                <option value="">Mother</option>
                                <option value="">Father</option>
                                <option value="">Wife</option>
                                <option value="">Husband</option>
                                <option value="">Son</option>
                                <option value="">Daughter</option>
                                <option value="">Daughter-in-law</option>
                                <option value="">Son-in-law</option>
                                <option value="">Grand son</option>
                                <option value="">Grand daughter</option>
                                <option value="">siblings</option>
                                <option value="">other</option>
                            </select>
                        </p>

                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">DOB:</label>
                            <input type="date" name="" class="h25">
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="members">
                    <hr>
                    <div class="simple-row">
                        <div class="first-name">
                            <label for="">First Name:</label>
                            <input type="text" name="fname" id="" placeholder="First Name" class="h30 w100">
                        </div>
                        <div class="middle-name">
                            <label for="">Middle Name:</label>
                            <input type="text" name="mname" id="" placeholder="Middle Name" class="h30 w100">
                        </div>
                        <div class="last-name">
                            <label for="">Last Name:</label>
                            <input type="text" name="lname" id="" placeholder="Last Name" class="h30 w100">
                        </div>
                    </div>
                    <!--form row -->
                    <div class="form-row">
                        <p>
                            <label for="">Profession:</label>
                            <select name="profession" class="h25">
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
                            <select name="education" id="" class="h25">
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
                            <select name="relation" class="h25">
                                <option value="">Head of family</option>
                                <option value="">Mother</option>
                                <option value="">Father</option>
                                <option value="">Wife</option>
                                <option value="">Husband</option>
                                <option value="">Son</option>
                                <option value="">Daughter</option>
                                <option value="">Daughter-in-law</option>
                                <option value="">Son-in-law</option>
                                <option value="">Grand son</option>
                                <option value="">Grand daughter</option>
                                <option value="">siblings</option>
                                <option value="">other</option>
                            </select>
                        </p>

                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">DOB:</label>
                            <input type="date" name="" id="" class="h25">
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="members">
                    <hr>
                    <div class="simple-row">
                        <div class="first-name">
                            <label for="">First Name:</label>
                            <input type="text" name="fname" id="" placeholder="First Name" class="h30 w100">
                        </div>
                        <div class="middle-name">
                            <label for="">Middle Name:</label>
                            <input type="text" name="mname" id="" placeholder="Middle Name" class="h30 w100">
                        </div>
                        <div class="last-name">
                            <label for="">Last Name:</label>
                            <input type="text" name="lname" id="" placeholder="Last Name" class="h30 w100">
                        </div>
                    </div>
                    <!--form row -->
                    <div class="form-row">
                        <p>
                            <label for="">Profession:</label>
                            <select name="profession" class="h25">
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
                            <select name="education" class="h25">
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
                            <select name="relation" class="h25">
                                <option value="">Head of family</option>
                                <option value="">Mother</option>
                                <option value="">Father</option>
                                <option value="">Wife</option>
                                <option value="">Husband</option>
                                <option value="">Son</option>
                                <option value="">Daughter</option>
                                <option value="">Daughter-in-law</option>
                                <option value="">Son-in-law</option>
                                <option value="">Grand son</option>
                                <option value="">Grand daughter</option>
                                <option value="">siblings</option>
                                <option value="">other</option>
                            </select>
                        </p>

                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">DOB:</label>
                            <input type="date" name="" id="" class="h25">
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="members">
                    <hr>
                    <div class="simple-row">
                        <div class="first-name">
                            <label for="">First Name:</label>
                            <input type="text" name="fname" id="" placeholder="First Name" class="h30 w100">
                        </div>
                        <div class="middle-name">
                            <label for="">Middle Name:</label>
                            <input type="text" name="mname" id="" placeholder="Middle Name" class="h30 w100">
                        </div>
                        <div class="last-name">
                            <label for="">Last Name:</label>
                            <input type="text" name="lname" id="" placeholder="Last Name" class="h30 w100">
                        </div>
                    </div>
                    <!--form row -->
                    <div class="form-row">
                        <p>
                            <label for="">Profession:</label>
                            <select name="profession" class="h25">
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
                            <select name="education" class="h25">
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
                            <select name="relation" class="h25">
                                <option value="">Head of family</option>
                                <option value="">Mother</option>
                                <option value="">Father</option>
                                <option value="">Wife</option>
                                <option value="">Husband</option>
                                <option value="">Son</option>
                                <option value="">Daughter</option>
                                <option value="">Daughter-in-law</option>
                                <option value="">Son-in-law</option>
                                <option value="">Grand son</option>
                                <option value="">Grand daughter</option>
                                <option value="">siblings</option>
                                <option value="">other</option>
                            </select>
                        </p>

                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">DOB:</label>
                            <input type="date" name="" id="" class="h25">
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="members">
                    <hr>
                    <div class="simple-row">
                        <div class="first-name">
                            <label for="">First Name:</label>
                            <input type="text" name="fname" id="" placeholder="First Name" class="h30 w100">
                        </div>
                        <div class="middle-name">
                            <label for="">Middle Name:</label>
                            <input type="text" name="mname" id="" placeholder="Middle Name" class="h30 w100">
                        </div>
                        <div class="last-name">
                            <label for="">Last Name:</label>
                            <input type="text" name="lname" id="" placeholder="Last Name" class="h30 w100">
                        </div>
                    </div>
                    <!--form row -->
                    <div class="form-row">
                        <p>
                            <label for="">Profession:</label>
                            <select name="profession" class="h25">
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
                            <select name="education" id="" class="h25">
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
                            <select name="relation" class="h25" class="h25">
                                <option value="">Head of family</option>
                                <option value="">Mother</option>
                                <option value="">Father</option>
                                <option value="">Wife</option>
                                <option value="">Husband</option>
                                <option value="">Son</option>
                                <option value="">Daughter</option>
                                <option value="">Daughter-in-law</option>
                                <option value="">Son-in-law</option>
                                <option value="">Grand son</option>
                                <option value="">Grand daughter</option>
                                <option value="">siblings</option>
                                <option value="">other</option>
                            </select>
                        </p>

                    </div>
                    <div class="form-row">
                        <p>
                            <label for="">DOB:</label>
                            <input type="date" name="" id="" class="h25">
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
                        <input type="text" placeholder="In cash" class="h25">
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