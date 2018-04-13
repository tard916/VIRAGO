<?php
  error_reporting(0);
  session_start();
   include("BackEnd_Script/DBconfig.php");

  if ( $_SESSION['checkLoginMember'] != '1') {

          echo '<script language = "javascript">';
          echo 'alert("You have to login first.")';
          echo '</script>';
          echo  "<script> window.location.assign('login.php'); </script>";
          exit;
  }
  $fullName = $_SESSION['userFullName'];
  $userID = $_SESSION['user_ID'];

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>VIRAGO About Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!--Bootstrap & Footawesome & Bootrap-social styles-->
  <link  rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet"  href="css/bootstrap-social.css">
  <link rel="stylesheet" href="css/footerlink-page.css">

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <!--Bootstrap Javascript-->
  <script src="js/bootstrap.min.js"></script>

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
            <a href="trainer_homepage.php">
              <image src="rec/virago.png" alt="img_logo" id="img_logo_trainer">
            </a>
          </div>
          <div id="navbar" class="collapse navbar-collapse ">
            <ul class="nav navbar-nav navbar-right sign_out_sub">
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="trainer_homepage.php">Job Seekers
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

  <div class="row">
      <div class="panel-heading"><h1>About</h1></div>
  <div class="col-md-4">

    <div class="panel-group">

      <ul class="list-unstyled">
        <li class="panel panel-filled support-question active">
          <a href="#answer1" data-toggle="tab" aria-expanded="true">
            <div class="panel-body">
              <p class="font-bold c-white">Support question 1</p>
              <p>
                OUR STORY.
              </p>
            </div>
          </a>
        </li>
        <li class="panel panel-filled support-question">
          <a href="#answer2" data-toggle="tab" aria-expanded="false">
            <div class="panel-body">
              <p class="font-bold c-white">Support question 2</p>
              <p>
                OUR PHILOSOPHY.
              </p>
            </div>
          </a>
        </li>
        <li class="panel panel-filled support-question">
          <a href="#answer3" data-toggle="tab" aria-expanded="false">
            <div class="panel-body">
              <p class="font-bold c-white">Support question 3</p>
              <p>
                OUR PHILOSOPHY
              </p>
            </div>
          </a>
        </li>
        <li class="panel panel-filled support-question">
          <a href="#answer4" data-toggle="tab" aria-expanded="false">
            <div class="panel-body">
              <p class="font-bold c-white">Support question 4</p>
              <p>
                OUR PHILOSOPHY
              </p>
            </div>
          </a>
        </li>
      </ul>

    </div>

  </div>
  <div class="col-md-8">

    <div class="panel">
      <div class="panel-body">
        <div class="tab-content">
          <div id="answer1" class="tab-pane active">
            <h3>
                                       OUR STORY
            </h3>
            <p>
              VIRAGO came to be as part of the corporate social responsibilty (CSR) of HELP University.
            </p>

            <p class="font-bold c-white">
              What is VIRAGO?
            </p>
            <p>
              VIRAGO started in 2018 to facilitate a common marketplace for the women in Jinjang Utara and willing job providers. The focus of the website is for Jinjang Utara women to make use of their softskills to perform tasks that is required of them.
            </p>
            <p>
              There are currently job options that include major job offerings that make full use of the soft sklls that are possessed by women in the Jinjang Utara community.
              Examples of those jobs include Babysitting, Marketing, Care Giver, Personal Driver and more.
            </p>
            <p>Since it's inception in 2018, there have been an estimated 200,000 bookings with multiple satisfied parties.
            </p>

          </div>

          <div id="answer2" class="tab-pane">
            <h2>
                OUR PHILOSOPHY
            </h2>


            <p class="font-bold c-white">
              Corporate PHILOSOPHY
            </p>
            <p>
              Our corporate philosophy at HELP is that of inclusivity and empowerment. This is why the VIRAGO project was commisioned to empower, enrich and enlarge the livelihood of the women in the Jinjang Utara Community.
            </p>
            <p>
              This is what has motivated the creation of the VIRAGO project.
            </p>

          </div>
          <div id="answer3" class="tab-pane">
             <h2>
                OUR PHILOSOPHY
            </h2>


            <p class="font-bold c-white">
              Corporate PHILOSOPHY
            </p>
            <p>
              Our corporate philosophy at HELP is that of inclusivity and empowerment. This is why the VIRAGO project was commisioned to empower, enrich and enlarge the livelihood of the women in the Jinjang Utara Community.
            </p>
            <p>
              This is what has motivated the creation of the VIRAGO project.
            </p>

          </div>
          <div id="answer4" class="tab-pane">
            <h2>
                OUR PHILOSOPHY
            </h2>


            <p class="font-bold c-white">
              Corporate PHILOSOPHY
            </p>
            <p>
              Our corporate philosophy at HELP is that of inclusivity and empowerment. This is why the VIRAGO project was commisioned to empower, enrich and enlarge the livelihood of the women in the Jinjang Utara Community.
            </p>
            <p>
              This is what has motivated the creation of the VIRAGO project.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer fixed-bottom">
  <div class= "row">
    <div class="footer-main">
      <div class="col-xs-2 col-sm-2  col-sm-offset-1 footerbrand">
        <a href="trainer_homepage.php">Virago</a>
      </div>
    </div>
    <div class=footerlink>
      <div class="col-xs-3 col-sm-3">
        <a href="about.php" id="footerlink_1">ABOUT</a>
      </div>
      <div class="col-xs-3 col-sm-3  col-sm-offset-1">
        <a href="contact.php" id="footerlink_2">CONTACT</a>
      </div>
      <div class="col-xs-3 col-sm-3  col-sm-offset-2  col-xs-offset-1">
        <a href="faqpage.php" id="footerlink_3">FAQ</a>
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
