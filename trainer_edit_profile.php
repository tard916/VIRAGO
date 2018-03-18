<?php
  error_reporting(0);
  session_start();
  include("BackEnd_Script/DBconfig.php");

  if ( $_SESSION['checkLoginTrainer'] != '1') {

          echo '<script language = "javascript">';
          echo 'alert("You have to login first.")';
          echo '</script>';
          echo  "<script> window.location.assign('login_page.php'); </script>";
          exit;
  }
  $firstName = $_SESSION['userfirstName'];
  $userID = $_SESSION['user_ID'];
?>
<!DOCTYPE html>
<html >
<head>
  <title>Client Edit Profile Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">



  <link  rel="stylesheet" href="css/bootstrap.min.css">
  <!--Bootstrap & Footawesome & Bootrap-social styles-->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet"  href="css/bootstrap-social.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!-- Custom styles for this webpage -->
  <link href="css/user_edit_profile.css" rel="stylesheet">
  <!--JS script-->
  <!--Jquery open source link library-->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!--CDJNS Prefixfree open source link library-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <!--Bootstrap Javascript-->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/trainer_history.js" async></script>
</head>

<body>
  <!--Navigation bar on top of the page-->
     <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <!--logo button of the website on the top left corner-->
            <a  href="trainer_homepage.php">
              <image src="symbol/logoimg1.png" alt="img_logo" id="img_logo_trainer">
            </a>
          </div>
          <div id="navbar" class="collapse navbar-collapse ">
            <ul class="nav navbar-nav navbar-right sign_out_sub">

                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="trainer_homepage.php">CLIENT
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
                  <input type='submit' value='Save name' name='but_upload'>
                  
              </form>
            </div>
          </div>
          <?php

              $client = $_SESSION['user_ID'];
              $result = $con->query("SELECT firstName FROM client  where CL_UniqueID = '$client'");
              $rs = $result->fetch_array();
          ?>
          <div class="userinfo-title">
            <div class="userinfo-title-name">
                <?php echo $rs['firstName']?>
            </div>
              <div class="userinfo-title-job">
                ClIENT
              </div>
            </div>
           </div>
           <!--List unstyled class to Remove the default list-style--->
           <!-- The menu tabs of the sidebar -->
           <ul class="list-unstyled components">
             <hr  class="line-sidebar">
               <li class="menu-spacing">
                  <a href="trainer_homepage.php">
                      <i class="glyphicon glyphicon-home"></i>
                      Home
                  </a>
               </li>
               <li class="active menu-spacing">
                <a href="trainer_edit_profile.php">
                  <i class="glyphicon glyphicon-pencil"></i>
                    Edit Profile
                </a>
              </li>
              <li class="menu-spacing">
               <a href="listAJob.php">
                 <i class="	glyphicon glyphicon-plus-sign"></i>
                   Post a Job
               </a>
             </li>
              <!--The id "pageSubmenu" is the sub menu of the View History-->
              <li class="menu-spacing">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                  <i class="glyphicon glyphicon-duplicate"></i>
                    View History
                </a>
                <ul class="collapse list-unstyled hoversub" id="pageSubmenu">
                  <li><a href="trainer_history_personal.php">Personal Training Sessions</a></li>
                  <li><a href="trainer_history_group.php">Group Training Sessions</a></li>
                </ul>
              </li>
            </ul>
        </nav>

        <!-- Page Content of the Page -->
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!--There will be a button to show and hide the sidebar-->
                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="navbar-btn ">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </nav>

            <div class="box col-xs-10 col-xs-offset-1 form-animation">
               	<br/>
               		<h1>Edit Profile</h1>
               	<br/>
               	<hr>
               	<br/>
               	<div class="midBox">

                  <?php
                  
                      $trainer = $_SESSION['user_ID'];
                      $result = $con->query("SELECT * FROM client where CL_UniqueID = '$trainer'");

                      while($rs = $result->fetch_array()){

                  ?>
       				<!--Example 1: Vertical Form-->
       				<form class="form" name="member_signup" action="BackEnd_Script/trainer_profile_update.php" method="POST">


       				  <div class="row ">
       				            <div class="form-group">

       				                <div class="col-xs-10 col-xs-offset-1" >
       				                    <input type="text" name="firstName" class="form-control input-lg"  value="<?php echo $rs['firstName']; ?>">
       				        		    </div>
       				            </div>
       				  </div>
                </br>

       				    <div class="row">
       				        <div class="form-group">

       				            <div class="col-xs-10 col-xs-offset-1">
       				                <input type="text" name="lastName" class="form-control input-lg"  value="<?php echo $rs['lastName']; ?>">
       				            </div>
       				        </div>
       				    </div>

       				        </br>
       				        <div class="row">
       				            <div class="form-group">

       				                <div class="col-xs-10 col-xs-offset-1">
       				                    <input type="email" name="email" class="form-control input-lg"  value="<?php echo $rs['email']; ?>">
       				                </div>
       				            </div>
       				          </div>


       				        </br>
       				        <div class="row">
       				            <div class="form-group">

       				                <div class="col-xs-10 col-xs-offset-1">
       				                    <input type="password" name="password" class="form-control input-lg"  placeholder="Password">
       				                </div>
       				            </div>
       				          </div>
                      </br>
                        <div class="row">
                             <div class="form-group">

                                 <div class="col-xs-10 col-xs-offset-1">
                                     <input type="password" name="cpass" class="form-control input-lg"  placeholder="Confirm Password">
                                 </div>
                             </div>
                           </div>

       				        </br>
       				        <div class="row">
       				            <div class="form-group">

       				                <div class="col-xs-10 col-xs-offset-1">
       				                    <input type="text" name="address" class="form-control input-lg"  value="<?php echo $rs['address']; ?>">
       				                </div>
       				            </div>
       				          </div>

       				        </br>
       				        <div class="row">
       				            <div class="form-group">
       				                <div class="col-xs-10 col-xs-offset-1">
       				                    <input type="text" name="phone" class="form-control input-lg"  value="<?php echo $rs['phone']; ?>">
       				                </div>

       				            </div>
       				          </div>

       				          </br>
       				          <button type="submit"  name="submit" class="btn btn-success col-xs-4 col-xs-offset-1 active">Submit</button>
       				          </br>
       	</br>
       	</br>
       				</form>
              <?php
                      }
                      ?>
               	</div>
       	</div>
          </div>
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
