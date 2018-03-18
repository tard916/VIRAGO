<?php
  error_reporting(0);
  session_start();
  include("BackEnd_Script/DBconfig.php");
  
  if ( $_SESSION['checkLoginTrainer'] != '1') {

          echo '<script language = "javascript">';
          echo 'alert("You have to login first.")';
          echo '</script>';
          echo  "<script> window.location.assign('login.php'); </script>";
          exit;
  }
  $fullName = $_SESSION['userFullName'];
  $userID = $_SESSION['user_ID'];

  //echo $userID;
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Trainer Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!--Bootstrap & Footawesome & Bootrap-social styles-->
  <link  rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet"  href="css/bootstrap-social.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!-- Custom styles for this webpage -->
  <link href="css/user_homepage.css" rel="stylesheet">
  <!--Bootstrap Javascript-->
  <script src="js/bootstrap.min.js"></script>
  <!--Jquery link-->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <!-- async allows my scripts to be downloaded as quick as possible
  without blocking your browser -->
  <!-- Bootstrap Js CDN -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" async></script>
  <!-- Custom script for this webpage -->
  <script  src="js/trainer_homepage.js" async></script>
</head>

<body>
  <!--Navigation bar on top of the page-->
     <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!--logo button of the website on the top left corner-->
            <a  href="trainer_homepage.php">
              <image src="symbol/logoimg1.png" alt="img_logo" id="img_logo_trainer">
            </a>
          </div>
          <div id="navbar" class="collapse navbar-collapse ">
            <ul class="nav navbar-nav navbar-right">

              <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="trainer_homepage.php">Client
            </a>
            <ul class="dropdown-menu">
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Sign Out</a></li>
            </ul>
          </li>
        </ul>
          </div>
        </div>

      </div>
    </nav>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
          <div class="sidebar-header ">
            <!-- The User Info in the Sidebar-->
            <div class="img-sidebar-header">
              <?php

                $sql = "SELECT name FROM images WHERE userID='$userID'";
                $result = mysqli_query($con,$sql);
                $row = mysqli_fetch_array($result);
                $image = $row['name'];
                
                if (!empty($image)) {

                  $image_src = "symbol/profilePic/".$image;
                }
                else{

                  $image_src = "symbol/profilePic/default.png";
                }
              ?>
              

            <!--Image of the user-->
            <img src="<?php echo $image_src;?>" class="img-responsive img-circle" alt="User Profile image">
            <!--The hidden button for the hover effect on the photo -->
            <div class="hidden-btn-image">
              <form method="post" action="addProfilePic.php" enctype='multipart/form-data'>
                  <input type='file' name='file' />
                  <input type='submit' value='Upload' name='but_upload'>
              </form>
            </div>
          </div>
          <?php

              $client = $_SESSION['user_ID'];
              $result = $con->query("SELECT firstName FROM client  where CL_UniqueID  = '$client'");
              $rs = $result->fetch_array();
          ?>
          <div class="userinfo-title">
            <div class="userinfo-title-name">
                <?php echo $rs['firstName']?>
            </div>
              <div class="userinfo-title-job">
                CLIENT
              </div>
            </div>
           </div>
           <!--List unstyled class to Remove the default list-style--->
           <!-- The menu tabs of the sidebar -->
           <ul class="list-unstyled components ">
             <hr  class="line-sidebar">
               <li class="menu-spacing active">
                  <a href="trainer_homepage.php">
                      <i class="glyphicon glyphicon-home"></i>
                      Home
                  </a>
               </li>
               <li class=" menu-spacing">
                <a href="trainer_edit_profile.php">
                  <i class="glyphicon glyphicon-pencil"></i>
                    Edit Profile
                </a>
              </li>
              <li class="menu-spacing">
               <a href="listAJob.php">
                 <i class="	glyphicon glyphicon-plus-sign"></i>
                   Post A Job
               </a>
             </li>
              <!--The id "pageSubmenu" is the sub menu of the View History-->
              <li class="menu-spacing">
                <a href="#pageSubmenu" >
                  <i class="glyphicon glyphicon-duplicate"></i>
                    View Job History
                </a>                
              </li>
            </ul>
        </nav>
          <!-- Page Content Holder -->
          <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="navbar-btn ">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </nav>
            <!-- Rows and Ccolumns of the Page Contents-->
            <div class="row inner-row-content">
              <?php

                  $client = $_SESSION['user_ID'];
                  $result = $con->query("SELECT * FROM jobs WHERE CL_UniqueID = '$client'");


                 foreach ($result as $key => $rs) {

              ?>
              <div class="col-md-4 col-lg-4 popout content-layout">
                <h2><?php echo $rs["jobTitel"];?> </h2>
                <h4 class="id"> ID: <?php echo $rs["JB_UniqueID"];?></h4>              
                <p>Date: <?php echo $rs["stDate"].' TO';?> <span><?php echo $rs["edDate"];?></span> </P>
                <p>Time: <?php echo $rs["stTime"];?></P>
                <p>Fee: <?php echo 'RM'.$rs["price"];?></p>
                <p>Status: <?php echo $rs["status"];?></p>
                

              </div>
              <?php

            }
              ?>

              
            </div>
            <footer class="footer-hide-show">
              <div class= "row">
                <div class="footer-main">
                  <div class="col-xs-2 col-sm-2  col-sm-offset-1 footerbrand">
                    <a href="trainer_homepage.php">HELPFit</a>
                  </div>
                </div>
                <div class=footerlink>
                  <div class="col-xs-3 col-sm-3">
                    <a href="trainer_about.php" id="footerlink_1">ABOUT</a>
                  </div>
                  <div class="col-xs-3 col-sm-3  col-sm-offset-1">
                    <a href="trainer_contact.php" id="footerlink_2">CONTACT</a>
                  </div>
                  <div class="col-xs-3 col-sm-3  col-sm-offset-2  col-xs-offset-1">
                    <a href="trainer_faqpage.php" id="footerlink_3">FAQ</a>
                  </div>
                </div>
                <div class="socialbtn">
                  <div class="col-xs-2 col-sm-2 a">
                    <a href="https://www.instagram.com/helpfit.id/?hl=en" class="btn btn-social-icon btn-instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                  <div class="col-xs-2 col-sm-2 col-sm-offset-1  col-xs-offset-1">
                    <a href="https://www.facebook.com/HelpFit.ID/" class="btn btn-social-icon btn-facebook">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </div>
                </div>
              </div>
            </footer>
  </body>
</html>
