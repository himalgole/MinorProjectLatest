<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>success</title>
</head>

<body>
    <a href="login.php">Go Back</a>
</body>

</html>
<?php


ob_start();

if (isset($_POST['submit'])) {
    $head_fname = $_POST['fname'];
    $head_mname = $_POST['mname'];
    $head_lname = $_POST['lname'];
    $member_number = $_POST['member-number'];
    $abroad = $_POST['abroad-member'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $lanuage = $_POST['language'];
    $income = $_POST['income'];
    $home_ownership = $_POST['homeownership'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $village = $_POST['village'];
    $hcode = $_POST['hcode'];
    session_start();
    $acode = $_SESSION['acode'];
    if ($district < 10) {
        $dcode = "0" . $district;
    } else {
        $dcode = $district;
    }
    if ($city < 10) {
        $ccode = "00" . $city;
    } elseif ($city >= 10 || $city < 100) {
        $ccode = "0" . $city;
    } else {
        $ccode = $city;
    }
    $fid = $province . $dcode . $ccode . $acode . $hcode;
    include("congfig.inc.php");
    $sql_p = "SELECT * FROM province WHERE pid = '" . $province . "'";
    $res_p = mysqli_query($conn, $sql_p);
    $data_p = mysqli_fetch_assoc($res_p);
    $province_name = $data_p['province'];
    $sql_d = "SELECT * FROM district WHERE did = '" . $district . "'";
    $res_d = mysqli_query($conn, $sql_d);
    $data_d = mysqli_fetch_assoc($res_d);
    $district_name = $data_d['district'];
    $sql_c = "SELECT * FROM city WHERE cid = '" . $city . "'";
    $res_c = mysqli_query($conn, $sql_c);
    $data_c = mysqli_fetch_assoc($res_c);
    $city_name = $data_c['city'];
    $sql_family = "INSERT INTO family (fid,head_fname,head_mname,head_lname,Member_nbr,abroad,religion,caste,language_spoken,income,home_ownership,province,district,local_level,village) VALUES('" . $fid . "','" . $head_fname . "','" . $head_mname . "','" . $head_lname . "','" . $member_number . "','" . $abroad . "','" . $religion . "','" . $caste . "','" . $lanuage . "','" . $income . "','" . $home_ownership . "','" . $province_name . "','" . $district_name . "','" . $city_name . "','" . $village . "')";
    if (mysqli_query($conn, $sql_family)) {
        $counter = 0;
        if ($_POST['fname1'] !== "" && $_POST['lname1'] != "") {
            $pid = $fid . $counter;
            $fname = $_POST['fname1'];
            $mname = $_POST['mname1'];
            $lname = $_POST['lname1'];
            $education = $_POST['education1'];
            $profession = $_POST['profession1'];
            $relation = $_POST['relation1'];
            $gender = $_POST['gender1'];
            $dob = $_POST['date1'];
            $sql = "INSERT INTO member (fid,pid,f_name,m_name,l_name,gender,profession,education,relation,dob) VALUES('" . $fid . "','" . $pid . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $gender . "','" . $profession . "','" . $education . "','" . $relation . "','" . $dob . "')";
            mysqli_query($conn, $sql);
            $counter++;
        } 
        if ($_POST['fname2'] != "" && $_POST['lname2'] != "") {
            $pid = $fid . $counter;
            $fname = $_POST['fname2'];
            $mname = $_POST['mname2'];
            $lname = $_POST['lname2'];
            $education = $_POST['education2'];
            $profession = $_POST['profession2'];
            $relation = $_POST['relation2'];
            $gender = $_POST['gender2'];
            $dob = $_POST['date2'];
            $sql = "INSERT INTO member (fid,pid,f_name,m_name,l_name,gender,profession,education,relation,dob) VALUES('" . $fid . "','" . $pid . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $gender . "','" . $profession . "','" . $education . "','" . $relation . "','" . $dob . "')";
            mysqli_query($conn, $sql);
            $counter++;
        } 
        
        if ($_POST['fname3'] != "" && $_POST['lname3'] != "") {
            $pid = $fid . $counter;
            $fname = $_POST['fname3'];
            $mname = $_POST['mname3'];
            $lname = $_POST['lname3'];
            $education = $_POST['education3'];
            $profession = $_POST['profession3'];
            $relation = $_POST['relation3'];
            $gender = $_POST['gender3'];
            $dob = $_POST['date3'];
            $sql = "INSERT INTO member (fid,pid,f_name,m_name,l_name,gender,profession,education,relation,dob) VALUES('" . $fid . "','" . $pid . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $gender . "','" . $profession . "','" . $education . "','" . $relation . "','" . $dob . "')";
            mysqli_query($conn, $sql);
            $counter++;
        } 
        
        if ($_POST['fname4'] != "" && $_POST['lname4'] != "") {
            $pid = $fid . $counter;
            $fname = $_POST['fname4'];
            $mname = $_POST['mname4'];
            $lname = $_POST['lname4'];
            $education = $_POST['education4'];
            $profession = $_POST['profession4'];
            $relation = $_POST['relation4'];
            $gender = $_POST['gender4'];
            $dob = $_POST['date4'];
            $sql = "INSERT INTO member (fid,pid,f_name,m_name,l_name,gender,profession,education,relation,dob) VALUES('" . $fid . "','" . $pid . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $gender . "','" . $profession . "','" . $education . "','" . $relation . "','" . $dob . "')";
            mysqli_query($conn, $sql);
            $counter++;
        } 
        
        if ($_POST['fname5'] != "" && $_POST['lname5'] != "") {
            $pid = $fid . $counter;
            $fname = $_POST['fname5'];
            $mname = $_POST['mname5'];
            $lname = $_POST['lname5'];
            $education = $_POST['education5'];
            $profession = $_POST['profession5'];
            $relation = $_POST['relation5'];
            $gender = $_POST['gender5'];
            $dob = $_POST['date5'];
            $sql = "INSERT INTO member (fid,pid,f_name,m_name,l_name,gender,profession,education,relation,dob) VALUES('" . $fid . "','" . $pid . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $gender . "','" . $profession . "','" . $education . "','" . $relation . "','" . $dob . "')";
            mysqli_query($conn, $sql);
            $counter++;
        } 
        
        if ($_POST['fname6'] != "" && $_POST['lname6'] != "") {
            $pid = $fid . $counter;
            $fname = $_POST['fname6'];
            $mname = $_POST['mname6'];
            $lname = $_POST['lname6'];
            $education = $_POST['education6'];
            $profession = $_POST['profession6'];
            $relation = $_POST['relation6'];
            $gender = $_POST['gender6'];
            $dob = $_POST['date6'];
            $sql = "INSERT INTO member (fid,pid,f_name,m_name,l_name,gender,profession,education,relation,dob) VALUES('" . $fid . "','" . $pid . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $gender . "','" . $profession . "','" . $education . "','" . $relation . "','" . $dob . "')";
            mysqli_query($conn, $sql);
            $counter++;
        } 
        if ($_POST['fname7'] != "" && $_POST['lname7'] != "") {
            $pid = $fid . $counter;
            $fname = $_POST['fname7'];
            $mname = $_POST['mname7'];
            $lname = $_POST['lname7'];
            $education = $_POST['education7'];
            $profession = $_POST['profession7'];
            $relation = $_POST['relation7'];
            $gender = $_POST['gender7'];
            $dob = $_POST['date7'];
            $sql = "INSERT INTO member (fid,pid,f_name,m_name,l_name,gender,profession,education,relation,dob) VALUES('" . $fid . "','" . $pid . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $gender . "','" . $profession . "','" . $education . "','" . $relation . "','" . $dob . "')";
            mysqli_query($conn, $sql);
            $counter++;
        } 
        if ($_POST['fname8'] != "" && $_POST['lname8'] != "") {
            $pid = $fid . $counter;
            $fname = $_POST['fname8'];
            $mname = $_POST['mname8'];
            $lname = $_POST['lname8'];
            $education = $_POST['education8'];
            $profession = $_POST['profession8'];
            $relation = $_POST['relation8'];
            $gender = $_POST['gender8'];
            $dob = $_POST['date8'];
            $sql = "INSERT INTO member (fid,pid,f_name,m_name,l_name,gender,profession,education,relation,dob) VALUES('" . $fid . "','" . $pid . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $gender . "','" . $profession . "','" . $education . "','" . $relation . "','" . $dob . "')";
            mysqli_query($conn, $sql);
            $counter++;
        } 
        if ($_POST['fname9'] != "" && $_POST['lname9'] != "") {
            $pid = $fid . $counter;
            $fname = $_POST['fname9'];
            $mname = $_POST['mname9'];
            $lname = $_POST['lname9'];
            $education = $_POST['education9'];
            $profession = $_POST['profession9'];
            $relation = $_POST['relation9'];
            $gender = $_POST['gender9'];
            $dob = $_POST['date9'];
            $sql = "INSERT INTO member (fid,pid,f_name,m_name,l_name,gender,profession,education,relation,dob) VALUES('" . $fid . "','" . $pid . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $gender . "','" . $profession . "','" . $education . "','" . $relation . "','" . $dob . "')";
            mysqli_query($conn, $sql);
            $counter++;
        } 
        
        if ($_POST['fname10'] != "" && $_POST['lname10'] != "") {
            $pid = $fid . $counter;
            $fname = $_POST['fname10'];
            $mname = $_POST['mname10'];
            $lname = $_POST['lname10'];
            $education = $_POST['education10'];
            $profession = $_POST['profession10'];
            $relation = $_POST['relation10'];
            $gender = $_POST['gender10'];
            $dob = $_POST['date10'];
            $sql = "INSERT INTO member (fid,pid,f_name,m_name,l_name,gender,profession,education,relation,dob) VALUES('" . $fid . "','" . $pid . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $gender . "','" . $profession . "','" . $education . "','" . $relation . "','" . $dob . "')";
            mysqli_query($conn, $sql);
            $counter++;
        } 
        if ($_POST['fname11'] != "" && $_POST['lname11'] != "") {
            $pid = $fid . $counter;
            $fname = $_POST['fname11'];
            $mname = $_POST['mname11'];
            $lname = $_POST['lname11'];
            $education = $_POST['education11'];
            $profession = $_POST['profession11'];
            $relation = $_POST['relation11'];
            $gender = $_POST['gender11'];
            $dob = $_POST['date11'];
            $sql = "INSERT INTO member (fid,pid,f_name,m_name,l_name,gender,profession,education,relation,dob) VALUES('" . $fid . "','" . $pid . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $gender . "','" . $profession . "','" . $education . "','" . $relation . "','" . $dob . "')";
            mysqli_query($conn, $sql);
            $counter++;
        } 
        if ($_POST['fname12'] != "" && $_POST['lname12'] != "") {
            $pid = $fid . $counter;
            $fname = $_POST['fname12'];
            $mname = $_POST['mname12'];
            $lname = $_POST['lname12'];
            $education = $_POST['education12'];
            $profession = $_POST['profession12'];
            $relation = $_POST['relation12'];
            $gender = $_POST['gender12'];
            $dob = $_POST['date12'];
            $sql = "INSERT INTO member (fid,pid,f_name,m_name,l_name,gender,profession,education,relation,dob) VALUES('" . $fid . "','" . $pid . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $gender . "','" . $profession . "','" . $education . "','" . $relation . "','" . $dob . "')";
            mysqli_query($conn, $sql);
            $counter++;
        } 
        if ($_POST['df_name1'] != "" && $_POST['dl_name1'] !="") {
            $dfName = $_POST['df_name1'];
            $dmName = $_POST['dm_name1'];
            $dlName = $_POST['dl_name1'];
            $gender = $_POST['sex1'];
            $age = $_POST['death-age1'];
            $cause = $_POST['death-cause1'];
            $sql = "INSERT INTO death (fid,gender,f_name,m_name,l_name,cause_of_death,age) VALUES('" . $fid . "','" . $gender . "','" . $dfName . "','" . $dmName . "','" . $dlName . "','" . $cause . "','" . $age . "')";
            mysqli_query($conn, $sql);
        } 
        if ($_POST['df_name2'] != "" && $_POST['dl_name2'] != "") {
            $dfName = $_POST['df_name2'];
            $dmName = $_POST['dm_name2'];
            $dlName = $_POST['dl_name2'];
            $gender = $_POST['sex2'];
            $age = $_POST['death-age2'];
            $cause = $_POST['death-cause2'];
            $sql = "INSERT INTO death (fid,gender,f_name,m_name,l_name,cause_of_death,age) VALUES('" . $fid . "','" . $gender . "','" . $dfName . "','" . $dmName . "','" . $dlName . "','" . $cause . "','" . $age . "')";
            mysqli_query($conn, $sql);
        } 
        
        if ($_POST['df_name3'] != "" && $_POST['dl_name3'] != "") {
            $dfName = $_POST['df_name3'];
            $dmName = $_POST['dm_name3'];
            $dlName = $_POST['dl_name3'];
            $gender = $_POST['sex3'];
            $age = $_POST['death-age3'];
            $cause = $_POST['death-cause3'];
            $sql = "INSERT INTO death (fid,gender,f_name,m_name,l_name,cause_of_death,age) VALUES('" . $fid . "','" . $gender . "','" . $dfName . "','" . $dmName . "','" . $dlName . "','" . $cause . "','" . $age . "')";
            mysqli_query($conn, $sql);
        }
        
        $land = $_POST['land-use'];
        $ownership = $_POST['land_ownership'];
        $ag_income = $_POST['ag-income'];
        $maize = 0;
        $paddy = 0;
        $millet = 0;
        $mustard = 0;
        $barley = 0;
        $wheat = 0;
        $sugarcane = 0;
        $potato = 0;
        $orchard = 0;
        if(isset($_POST['maize']))
        {
            $maize = 1;
        }
        if(isset($_POST['paddy']))
        {
            $paddy = 1;
        }
        if(isset($_POST['millet']))
        {
            $millet = 1;
        }
        if(isset($_POST['mustard']))
        {
            $mustard= 1;
        }
        if(isset($_POST['barley']))
        {
            $barley = 1;
        }
        if(isset($_POST['wheat']))
        {
            $wheat = 1;
        }
        if(isset($_POST['sugarcane']))
        {
            $sugarcane = 1;
        }
        if(isset($_POST['potato']))
        {
            $potato= 1;
        }
        if(isset($_POST['orchard']))
        {
            $orchard = 1;
        }
        $buffalo = $_POST['buffalo'];
        $goat = $_POST['goat'];
        $pig = $_POST['pig'];
        $cow = $_POST['cow'];
        $sheep = $_POST['sheep'];
        $yak  = $_POST['yak'];
        $sql = "INSERT INTO agriculture (fid,land_use,land_ownership,ag_income,buffalo,sheep,goat,yak,cow,pig,maize,paddy,mustard,millet,barley,potato,sugarcane,wheat,orchard) VALUES('".$fid."','".$land."','".$ownership."','".$ag_income."','".$buffalo."','".$sheep."','".$goat."','".$yak."','".$cow."','".$pig."','".$maize."','".$paddy."','".$mustard."','".$millet."','".$barley."','".$potato."','".$sugarcane."','".$wheat."','".$orchard."')";
        mysqli_query($conn,$sql);
        $telephone = 0;
        $television = 0;
        $radio = 0;
        $mobile = 0;
        $pc = 0;
        $internet = 0;
        $car = 0;
        $bike = 0;
        $bicycle = 0;
        $refrigerator = 0;
        $washing_machine = 0;
        if(isset($_POST['telephone']))
        {
           $telephone = 1;
        }
        if(isset($_POST['television']))
        {
            $television = 1;
        }
        if(isset($_POST['radio']))
        {
            $radio = 1;
        }
        if(isset($_POST['mobile']))
        {
            $mobile = 1;
        }
        if(isset($_POST['pc']))
        {
            $pc = 1;
        }
        if(isset($_POST['internet']))
        {
            $internet = 1;
        }
        if(isset($_POST['car']))
        {
            $car = 1;
        }
        if(isset($_POST['bike']))
        {
            $bike = 1;
        }
        if(isset($_POST['bicycle']))
        {
            $bicycle = 1;
        }
        if(isset($_POST['refrigerator']))
        {
            $refrigerator = 1;
        }
        if(isset($_POST['washingMachine']))
        {
            $washing_machine = 1;
        }
        $sql = "INSERT INTO equipment_vehicle (fid,telephone,television,radio,mobile ,pc,internet,car_jeep,bike,bicycle,refrigerator,washing_machine) VALUES('".$fid."','".$telephone."','".$television."','".$radio."','".$mobile."','".$pc."','".$internet."','".$car."','".$bike."','".$bicycle."','".$refrigerator."','".$washing_machine."')";
        mysqli_query($conn,$sql);
    } else {
        echo "error";
        exit;
    }
    mysqli_close($conn);
}

?>