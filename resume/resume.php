<?php
session_start();
include 'includes/connect.php';

if(!isset($_SESSION['email']))
{
  echo "<script>alert('You must enter an email address');</script>";
  header('location:index.php');
}

?>

<!DOCTYPE html>
<html>
<title>Resume</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include 'includes/link.php'; ?>
<link rel="stylesheet" href="css/styles.css">
<body class="w3-light-grey">


<?php
$user = $_SESSION['email'];
$sql = "SELECT * FROM `personal_info` WHERE `gmail` = '$user'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

?>

<!-- Page Container -->
<div class="w3-content w3-margin-top bg" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
            <div class="container">
                <img src="<?php echo $row['photo'];?>" style="width:100%" class = "w3-circle image" alt="Avatar">
                <div class="overlay">
                    <div class="text" style="Allerta Stencil", Sans-serif><?php echo $row['name'];?></div>
                </div>
            </div>
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2 class="w3-light-grey" style="text-shadow:1px 1px 0 #444"><?php echo $row['name'];?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row['profession'];?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row['address'];?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row['gmail'];?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row['phone'];?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <p><?php echo $row['skill_01'];?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $row['skill_value_01'];?>%"><?php echo $row['skill_value_01'];?>%</div>
          </div>
          <p><?php echo $row['skill_02'];?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $row['skill_value_02'];?>%">
              <div class="w3-center w3-text-white"><?php echo $row['skill_value_02'];?>%</div>
            </div>
          </div>
          <p><?php echo $row['skill_03'];?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $row['skill_value_03'];?>%"><?php echo $row['skill_value_03'];?>%</div>
          </div>
          <p><?php echo $row['skill_04'];?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $row['skill_value_04'];?>%"><?php echo $row['skill_value_04'];?>%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p><?php echo $row['lang_1'];?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p><?php echo $row['lang_2'];?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:80%"></div>
          </div>
          <p>Hindi</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:50%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['project_name_01'];?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['project_start_date_01'];?> - <span class="w3-tag w3-teal w3-round"><?php echo $row['project_end_date_01'];?></span></h6>
          <p>* * <?php echo $row['project_des_01'];?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['project_name_02'];?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['project_start_date_02'];?> - <?php echo $row['project_end_date_02'];?></h6>
          <p>* <?php echo $row['project_des_02'];?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['project_name_03'];?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['project_start_date_03'];?> - <?php echo $row['project_end_date_03'];?></h6>
          <p>
          * <?php echo $row['project_des_03'];?>
          </p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['college_name_01'];?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['college_start_end_01'];?></h6>
          <p><?php echo $row['college_course_01'];?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['college_name_02'];?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['college_name_02'];?></h6>
          <p><?php echo $row['college_course_02'];?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Jawaharnal Nehru National Youth Computer Center</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2020 - 2022</h6>
          <p> Degree : Diploma In Computer Application</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
<?php include 'includes/footer.php'; ?>

</body>
</html>
