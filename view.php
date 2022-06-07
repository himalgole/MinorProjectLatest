<?php

if (isset($_POST['search'])) {
  $str = $_POST['str'];
  $str_search = strtolower($str);
  include("congfig.inc.php");
  $total = 0;
  $lang_tamang = 0;
  $lang_nepali = 0;
  $lang_magar = 0;
  $lang_newar = 0;
  $lang_maithili = 0;
  $lang_bhojpuri = 0;
  $lang_other = 0;
  $sex_male = 0;
  $sex_female = 0;
  $edu_elem = 0;
  $edu_primary = 0;
  $edu_secondary = 0;
  $edu_highsecondary = 0;
  $edu_bachelor = 0;
  $edu_master = 0;
  $edu_phd = 0;
  $edu_none = 0;
  $prof_engineer = 0;
  $prof_doctor = 0;
  $prof_bussinessman = 0;
  $prof_teacher = 0;
  $prof_military = 0;
  $prof_other = 0;
  $prof_unemp = 0;
  $prof_ag = 0;
  $caste_tamang = 0;
  $caste_gurung = 0;
  $caste_magar = 0;
  $caste_rai = 0;
  $caste_newar = 0;
  $caste_yadav = 0;
  $caste_brahmin = 0;
  $caste_xetri = 0;
  $caste_tharu = 0;
  $caste_serpa = 0;
  $caste_other = 0;
  $rel_hindu = 0;
  $rel_buddhist = 0;
  $rel_christian = 0;
  $rel_muslim = 0;
  $rel_other = 0;
  $sql = "SELECT * FROM family WHERE district = '" . $str . "'";
  $res = mysqli_query($conn, $sql);
  if (mysqli_num_rows($res) < 1) {
    mysqli_close($conn);
    header('location:index.php');
  }
  while ($row = mysqli_fetch_assoc($res)) {
    if ($row['caste'] == 'tamang') {
      $caste_tamang = $caste_tamang + $row['Member_nbr'];
    } elseif ($row['caste'] == 'brahman') {
      $caste_brahmin = $caste_brahmin + $row['Member_nbr'];
    } elseif ($row['caste'] == 'chhetri') {
      $caste_xetri = $caste_xetri + $row['Member_nbr'];;
    } elseif ($row['caste'] == 'magar') {
      $caste_magar = $caste_magar + $row['Member_nbr'];
    } elseif ($row['caste'] == 'rai') {
      $caste_rai = $caste_rai + $row['Member_nbr'];
    } elseif ($row['caste'] == 'serpa') {
      $caste_serpa = $caste_serpa + $row['Member_nbr'];
    } elseif ($row['caste'] == 'yadav') {
      $caste_yadav = $caste_yadav + $row['Member_nbr'];
    } elseif ($row['caste'] == 'tharu') {
      $caste_tharu = $caste_tharu + $row['Member_nbr'];
    } else {
      $caste_other = $caste_other + $row['Member_nbr'];
    }
    if ($row['religion'] == 'buddhist') {
      $rel_buddhist = $rel_buddhist + $row['Member_nbr'];
    } elseif ($row['religion'] == 'hindu') {
      $rel_hindu = $rel_hindu + $row['Member_nbr'];
    } elseif ($row['religion'] == 'christian') {
      $rel_christian = $rel_christian + $row['Member_nbr'];;
    } elseif ($row['religion'] == 'muslim') {
      $rel_muslim = $rel_muslim + $row['Member_nbr'];
    } else {
      $rel_other = $rel_other + $row['Member_nbr'];
    }
    if ($row['language_spoken'] == 'tamang') {
      $lang_tamang = $lang_tamang + $row['Member_nbr'];
    } elseif ($row['language_spoken'] == 'nepali') {
      $lang_nepali = $lang_nepali + $row['Member_nbr'];
    } elseif ($row['language_spoken'] == 'bhojpuri') {
      $lang_bhojpuri = $lang_bhojpuri + $row['Member_nbr'];;
    } elseif ($row['language_spoken'] == 'maithili') {
      $lang_maithili = $lang_maithili + $row['Member_nbr'];
    } elseif ($row['language_spoken'] == 'newari') {
      $lang_newar = $lang_newar + $row['Member_nbr'];
    } elseif ($row['language_spoken'] == 'magar') {
      $lang_other = $lang_other + $row['Member_nbr'];
    } else {
      $lang_other = $lang_other + $row['Member_nbr'];
    }

    $sql_member = "SELECT * FROM member WHERE fid = '" . $row['fid'] . "'";
    $res_member = mysqli_query($conn, $sql_member);
    while ($row_member = mysqli_fetch_assoc($res_member)) {
      if ($row_member['gender'] == 'male') {
        $sex_male++;
      } else {
        $sex_female++;
      }
      if ($row_member['profession'] == 'doctor') {
        $prof_doctor++;
      } elseif ($row_member['profession'] == 'teacher') {
        $prof_teacher++;
      } elseif ($row_member['profession'] == 'businessman') {
        $prof_bussinessman++;
      } elseif ($row_member['profession'] == 'engineer') {
        $prof_engineer++;
      } elseif ($row_member['profession'] == 'military') {
        $prof_military++;
      } elseif ($row_member['profession'] == 'agriculture') {
        $prof_other++;
      } elseif ($row_member['profession'] == 'other') {
        $prof_other++;
      } else {
        $prof_unemp++;
      }
      if ($row_member['education'] == 'elementary') {
        $edu_elem++;
      } elseif ($row_member['education'] == 'primary') {
        $edu_primary++;
      } elseif ($row_member['education'] == 'secondary') {
        $edu_secondary++;
      } elseif ($row_member['education'] == 'h_secodary') {
        $edu_highsecondary++;
      } elseif ($row_member['education'] == 'bachelor') {
        $edu_bachelor++;
      } elseif ($row_member['education'] == 'masters') {
        $edu_master++;
      } elseif ($row_member['education'] == 'phd') {
        $edu_phd++;
      } else {
        $edu_none++;
      }
      $total++;
    } // internal while loop

  } // external while loop
  session_start();
  $_SESSION['lang_tamang'] = $lang_tamang;
  $_SESSION['lang_nepali'] = $lang_nepali;
  $_SESSION['lang_newari'] = $lang_newar;
  $_SESSION['lang_maithili'] = $lang_maithili;
  $_SESSION['lang_bhojpuri'] = $lang_bhojpuri;
  $_SESSION['lang_other'] = $lang_other;
  $_SESSION['rel_buddhist'] = $rel_buddhist;
  $_SESSION['rel_hindu'] = $rel_hindu;
  $_SESSION['rel_christian'] = $rel_christian;
  $_SESSION['rel_muslim'] = $rel_muslim;
  $_SESSION['rel_other'] = $rel_other;
  $_SESSION['edu_elem'] = $edu_elem;
  $_SESSION['edu_primary'] = $edu_primary;
  $_SESSION['edu_secondary'] = $edu_secondary;
  $_SESSION['edu_hsecondary'] = $edu_highsecondary;
  $_SESSION['edu_bachelor'] = $edu_bachelor;
  $_SESSION['edu_masters'] = $edu_master;
  $_SESSION['edu_phd'] = $edu_phd;
  $_SESSION['edu_none'] = $edu_none;
  $_SESSION['male'] = $sex_male;
  $_SESSION['female'] = $sex_female;
  $_SESSION['total'] = $total;
  $_SESSION['prof_teacher'] = $prof_teacher;
  $_SESSION['prof_doctor'] = $prof_doctor;
  $_SESSION['prof_engineer'] = $prof_engineer;
  $_SESSION['prof_military'] = $prof_military;
  $_SESSION['prof_business'] = $prof_bussinessman;
  $_SESSION['prof_other'] = $prof_other;
  $_SESSION['umemp'] = $prof_unemp;
  $_SESSION['caste_tamang'] = $caste_tamang;
  $_SESSION['caste_brahman'] = $caste_brahmin;
  $_SESSION['caste_xetri'] = $caste_xetri;
  $_SESSION['caste_magar'] = $caste_magar;
  $_SESSION['caste_rai'] = $caste_rai;
  $_SESSION['caste_tharu'] = $caste_tharu;
  $_SESSION['caste_newar'] = $caste_newar;
  $_SESSION['caste_yadav'] = $caste_yadav;
  $_SESSION['caste_serpa'] = $caste_serpa;
  $_SESSION['caste_other'] = $caste_other;
}
else
{
  header('location:index.php');
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="css/view.css">
  <script src="js/jquery-3.6.0.min.js"></script>
</head>

<body>
  <header>
    <nav>
      <div class="results-topbar">
        <a href="index.php"><img src="photo/back.png" style="float: left;" alt="" height="30px" width="30px"></a>
        <h3 style="float: left; margin-left: 10px;" id="demographics">Demographics Results</h3>
        <i style="float: right; margin-right: 10px;"><?php echo $str;?></i>
      </div>
    </nav>
  </header>
  <div class="view-section">
    <div class="tables">
      <table class="viewtable gender">
        <tr>
          <th>Gender</th>
          <th>Population</th>
          <th>Percentage</th>
        </tr>
        <tr>
          <td>Male</td>
          <td><?php echo $_SESSION['male']; ?></td>
          <td><?php echo  round($_SESSION['male'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Female</td>
          <td><?php echo $_SESSION['female']; ?></td>
          <td><?php echo round($_SESSION['female'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>

      </table>
    </div>
    <div class="show-bar">
      <canvas id="myChart1" height="350px" width="400px"></canvas>
    </div>
  </div>
  <hr>
  <div class="view-section">
    <div class="tables">
      <table class="viewtable">
        <tr>
          <th>Religion</th>
          <th>Population</th>
          <th>Percentage</th>
        </tr>
        <tr>
          <td>Hindu</td>
          <td><?php echo $_SESSION['rel_hindu']; ?></td>
          <td><?php echo round($_SESSION['rel_hindu'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Buddhist</td>
          <td><?php echo $_SESSION['rel_buddhist']; ?></td>
          <td><?php echo round($_SESSION['rel_buddhist'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Christian</td>
          <td><?php echo $_SESSION['rel_christian']; ?></td>
          <td><?php echo round($_SESSION['rel_christian'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Muslim</td>
          <td><?php echo $_SESSION['rel_muslim']; ?></td>
          <td><?php echo round($_SESSION['rel_muslim'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Other</td>
          <td><?php echo $_SESSION['rel_other']; ?></td>
          <td><?php echo round($_SESSION['rel_other'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
      </table>
    </div>
    <div class="show-bar">
      <canvas id="myChart2" height="350px" width="400px"></canvas>
    </div>
  </div>
  <hr>
  <div class="view-section">
    <div class="tables">
      <table class="viewtable">
        <tr>
          <th>Literacy</th>
          <th>Population</th>
          <th>Percentage</th>
        </tr>
        <tr>
          <td>Elementary</td>
          <td><?php echo $_SESSION['edu_elem']; ?></td>
          <td><?php echo round($_SESSION['edu_elem'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Primary</td>
          <td><?php echo $_SESSION['edu_primary']; ?></td>
          <td><?php echo round($_SESSION['edu_primary'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Secondary</td>
          <td><?php echo $_SESSION['edu_secondary']; ?></td>
          <td><?php echo round($_SESSION['edu_secondary'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>High Secondary</td>
          <td><?php echo $_SESSION['edu_hsecondary']; ?></td>
          <td><?php echo round($_SESSION['edu_hsecondary'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Bachelor</td>
          <td><?php echo $_SESSION['edu_bachelor']; ?></td>
          <td><?php echo round($_SESSION['edu_bachelor'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Masters</td>
          <td><?php echo $_SESSION['edu_masters']; ?></td>
          <td><?php echo round($_SESSION['edu_masters'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>PHD</td>
          <td><?php echo $_SESSION['edu_phd']; ?></td>
          <td><?php echo round($_SESSION['edu_phd'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>None</td>
          <td><?php echo $_SESSION['edu_none']; ?></td>
          <td><?php echo round($_SESSION['edu_none'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
      </table>
    </div>
    <div class="show-bar">
      <canvas id="myChart3" height="350px" width="400px"></canvas>
    </div>
  </div>
  <hr>
  <div class="view-section">
    <div class="tables">
      <table class="viewtable">
        <tr>
          <th>Profession</th>
          <th>Population</th>
          <th>Percentage</th>
        </tr>
        <tr>
          <td>Doctors</td>
          <td><?php echo $_SESSION['prof_doctor']; ?></td>
          <td><?php echo round($_SESSION['prof_doctor'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Engineers</td>
          <td><?php echo $_SESSION['prof_engineer']; ?></td>
          <td><?php echo round($_SESSION['prof_engineer']/ $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Businessman</td>
          <td><?php echo $_SESSION['prof_business']; ?></td>
          <td><?php echo round($_SESSION['prof_business']/ $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Military</td>
          <td><?php echo $_SESSION['prof_military']; ?></td>
          <td><?php echo round($_SESSION['prof_military']/ $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Teacher</td>
          <td><?php echo $_SESSION['prof_teacher']; ?></td>
          <td><?php echo round($_SESSION['prof_teacher'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Other</td>
          <td><?php echo $_SESSION['prof_other']; ?></td>
          <td><?php echo round($_SESSION['prof_other'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Unemployed</td>
          <td><?php echo $_SESSION['umemp']; ?></td>
          <td><?php echo round($_SESSION['umemp']/ $_SESSION['total'] * 100,3); ?></td>
        </tr>
      </table>
    </div>
    <div class="show-bar">
      <canvas id="myChart4" height="350px" width="400px"></canvas>
    </div>
  </div>
  <hr>
  <div class="view-section section2">
    <div class="tables">
      <table class="viewtable">
        <tr>
          <th>Language</th>
          <th>Population</th>
          <th>Percentage</th>
        </tr>
        <tr>
          <td>Nepali</td>
          <td><?php echo $_SESSION['lang_nepali']; ?></td>
          <td><?php echo round($_SESSION['lang_nepali'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Bhojpuri</td>
          <td><?php echo $_SESSION['lang_bhojpuri']; ?></td>
          <td><?php echo round($_SESSION['lang_bhojpuri'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Maithili</td>
          <td><?php echo $_SESSION['lang_maithili']; ?></td>
          <td><?php echo round($_SESSION['lang_maithili'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Tamang</td>
          <td><?php echo $_SESSION['lang_tamang']; ?></td>
          <td><?php echo round($_SESSION['lang_tamang'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Newari</td>
          <td><?php echo $_SESSION['lang_newari']; ?></td>
          <td><?php echo round($_SESSION['lang_newari'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Other</td>
          <td><?php echo $_SESSION['lang_other']; ?></td>
          <td><?php echo round($_SESSION['lang_other'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
      </table>
    </div>
    <div class="show-bar">
      <canvas id="myChart5" height="350px" width="400px"></canvas>
    </div>
  </div>
  <hr>
  <div class="view-section section2">
    <div class="tables">
      <table class="viewtable">
        <tr>
          <th>Caste</th>
          <th>Population</th>
          <th>Percentage</th>
        </tr>
        <tr>
          <td>Brahmin</td>
          <td><?php echo $_SESSION['caste_brahman']; ?></td>
          <td><?php echo round($_SESSION['caste_brahman']/ $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Chhetri</td>
          <td><?php echo $_SESSION['caste_xetri']; ?></td>
          <td><?php echo round($_SESSION['caste_xetri'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Magar</td>
          <td><?php echo $_SESSION['caste_magar']; ?></td>
          <td><?php echo round($_SESSION['caste_magar'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Tamang</td>
          <td><?php echo $_SESSION['caste_tamang']; ?></td>
          <td><?php echo round($_SESSION['caste_tamang'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Yadav</td>
          <td><?php echo $_SESSION['caste_yadav']; ?></td>
          <td><?php echo round($_SESSION['caste_yadav'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
        <tr>
          <td>Other</td>
          <td><?php echo $_SESSION['caste_other'] ; ?></td>
          <td><?php echo round($_SESSION['caste_other'] / $_SESSION['total'] * 100,3); ?></td>
        </tr>
      </table>
    </div>
    <div class="show-bar">
      <canvas id="myChart6" height="350px" width="400px"></canvas>
    </div>
  </div>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    $('document').ready(function() {
      $.ajax({
        url: "gender_api.php",
        type: "GET",
        success: function(res) {
          var gender_set = [];
          var obj = JSON.parse(res);
          gender_set[0] = obj.male;
          gender_set[1] = obj.female;
          gender_set[2] = 100;
          console.log(gender_set);
          const gender = {
            labels: ['Male', 'Female'],
            datasets: [{
              label: 'Results by Gender',
              data: gender_set,
              backgroundColor: [
                'rgba(255, 26, 104, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgb(73, 214, 94)'
              ],
              borderColor: [
                'rgba(255, 26, 104, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(0, 0, 0, 1)'
              ],
              borderWidth: 1
            }]
          };
          const config = {
            type: 'bar',
            data: gender,
            options: {
              scales: {
                y: {
                  beginAtZero: true,
                  barPercentage: 0.2,
                },
              },
              responsive: false,
            }
          };
          var myChart = new Chart(
            document.getElementById('myChart1'),
            config
          );

        } //success function
      }) // ajax1
      $.ajax({
        url: "religion_api.php",
        type: "GET",
        success: function(res) {
          var religion_set = [];
          var obj = JSON.parse(res);
          religion_set[0] = obj.hindu;
          religion_set[1] = obj.buddhist;
          religion_set[2] = obj.christian;
          religion_set[3] = obj.muslim;
          religion_set[4] = obj.other;
          religion_set[5] =100
          const religion = {
            labels: ['Hindu', 'Buddhist','Christian', 'Muslim','Other'],
            datasets: [{
              label: 'Results by Religion',
              data: religion_set,
              backgroundColor: [
                'rgba(255, 26, 104, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgb(73, 214, 94)'
              ],
              borderColor: [
                'rgba(255, 26, 104, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(0, 0, 0, 1)'
              ],
              borderWidth: 1
            }]
          };
          const config = {
            type: 'bar',
            data: religion,
            options: {
              scales: {
                y: {
                  beginAtZero: true,
                  barPercentage: 0.2,
                },
              },
              responsive: false
            }
          };
          const myChart = new Chart(
            document.getElementById('myChart2'),
            config
          );
        } //success function
      })  //ajax2
      $.ajax({
        url: "edu_api.php",
        type: "GET",
        success: function(res) {
          var edu_set = [];
          var obj = JSON.parse(res);
          edu_set[0] = obj.elementary;
          edu_set[1] = obj.primary;
          edu_set[2] = obj.secondary;
          edu_set[3] = obj.hsecondary;
          edu_set[4] = obj.bachelor;
          edu_set[5] = obj.masters;
          edu_set[6] = obj.phd;
          edu_set[7] = obj.none;
          edu_set[8] = 100;
          const edu = {
            labels: ['Elemenary', 'Primary', 'Secondary', 'High Secondary','Bachelor','Masters','PHD','None'],
            datasets: [{
              label: 'Results by Education',
              data: edu_set,
              backgroundColor: [
                'rgba(255, 26, 104, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgb(73, 214, 94)'
              ],
              borderColor: [
                'rgba(255, 26, 104, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(0, 0, 0, 1)'
              ],
              borderWidth: 1
            }]
          };
          const config = {
            type: 'bar',
            data: edu,
            options: {
              scales: {
                y: {
                  beginAtZero: true,
                  barPercentage: 0.2,
                },
              },
              responsive: false
            }
          };
          const myChart = new Chart(
            document.getElementById('myChart3'),
            config
          );
        } //success function
      }) //ajax3
      $.ajax({
        url: "prof_api.php",
        type: "GET",
        success: function(res) {
          var prof_set = [];
          var obj = JSON.parse(res);
          prof_set[0] = obj.doctor;
          prof_set[1] = obj.engineer;
          prof_set[2] = obj.businessman;
          prof_set[3] = obj.military
          prof_set[4] = obj.teacher;
          prof_set[5] = obj.other;
          prof_set[6] = obj.unemp;
          prof_set[7] = 100;
          const prof = {
            labels: ['Doctors', 'Engineers', 'Businessman', 'Military','Teacher','Other','Unemployed'],
            datasets: [{
              label: 'Results by Profession',
              data: prof_set,
              backgroundColor: [
                'rgba(255, 26, 104, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgb(73, 214, 94)'
              ],
              borderColor: [
                'rgba(255, 26, 104, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(0, 0, 0, 1)'
              ],
              borderWidth: 1
            }]
          };
          const config = {
            type: 'bar',
            data: prof,
            options: {
              scales: {
                y: {
                  beginAtZero: true,
                  barPercentage: 0.2,
                },
              },
              responsive: false
            }
          };
          const myChart = new Chart(
            document.getElementById('myChart4'),
            config
          );
        } //success function
      })  //ajax 4
      $.ajax({
        url: "language_api.php",
        type: "GET",
        success: function(res) {
          var lang_set = [];
          var obj = JSON.parse(res);
          lang_set[0] = obj.nepali;
          lang_set[1] = obj.bhojpuri;
          lang_set[2] = obj.maithili;
          lang_set[3] = obj.tamang;
          lang_set[4] = obj.newari;
          lang_set[5] = obj.other;
          lang_set[6] = 100;
          const lang = {
            labels: ['Nepali', 'Bhojpuri', 'Maithili', 'Tamang','Newari','Other'],
            datasets: [{
              label: 'Results by Language',
              data: lang_set,
              backgroundColor: [
                'rgba(255, 26, 104, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgb(73, 214, 94)'
              ],
              borderColor: [
                'rgba(255, 26, 104, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(0, 0, 0, 1)'
              ],
              borderWidth: 1
            }]
          };
          const config = {
            type: 'bar',
            data: lang,
            options: {
              scales: {
                y: {
                  beginAtZero: true,
                  barPercentage: 0.2,
                },
              },
              responsive: false
            }
          };
          const myChart = new Chart(
            document.getElementById('myChart5'),
            config
          );
        } //success function
      }) //ajax 5
      $.ajax({
        url: "caste_api.php",
        type: "GET",
        success: function(res) {
          var caste_set = [];
          var obj = JSON.parse(res);
          caste_set[0] = obj.brahmin;
          caste_set[1] = obj.chhetri;
          caste_set[2] = obj.magar;
          caste_set[3] = obj.tamang;
          caste_set[4] = obj.yadav;
          caste_set[5] = obj.other;
          caste_set[6] = 100;
          const caste = {
            labels: ['Brahmin', 'Chhetri', 'Magar', 'Tamang','Yadav','Other'],
            datasets: [{
              label: 'Results by Caste',
              data: caste_set,
              backgroundColor: [
                'rgba(255, 26, 104, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgb(73, 214, 94)'
              ],
              borderColor: [
                'rgba(255, 26, 104, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(0, 0, 0, 1)'
              ],
              borderWidth: 1
            }]
          };
          const config = {
            type: 'bar',
            data: caste,
            options: {
              scales: {
                y: {
                  beginAtZero: true,
                  barPercentage: 0.2,
                },
              },
              responsive: false
            }
          };
          const myChart = new Chart(
            document.getElementById('myChart6'),
            config
          );
        } //success function
      }) //ajax 6
    })

    function category(evt) {
      if (evt.id == "religion") {
        console.log('test');

      }
    }
    // config 


    // render init block
  </script>
</body>

</html>