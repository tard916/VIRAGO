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
  <title>VIRAGO FAQ Page</title>
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
            <a  href="trainer_homepage.php">
              <image src="rec/virago.png" alt="img_logo" id="img_logo_trainer">
            </a>
          </div>
          <div id="navbar" class="collapse navbar-collapse ">
            <ul class="nav navbar-nav navbar-right sign_out_sub">
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="member_homepage.php">Job Seekers
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
      <div class="panel-heading"><h1>FAQ</h1></div>
  <div class="col-md-4">

    <div class="panel-group">

      <ul class="list-unstyled">
        <li class="panel panel-filled support-question active">
          <a href="#answer1" data-toggle="tab" aria-expanded="true">
            <div class="panel-body">
              <p class="font-bold c-white">Support question 1</p>
              <p>
                Why the name Virago?
              </p>
            </div>
          </a>
        </li>
        <li class="panel panel-filled support-question">
          <a href="#answer2" data-toggle="tab" aria-expanded="false">
            <div class="panel-body">
              <p class="font-bold c-white">Support question 2</p>
              <p>
                How Can I Help?
              </p>
            </div>
          </a>
        </li>
        <li class="panel panel-filled support-question">
          <a href="#answer3" data-toggle="tab" aria-expanded="false">
            <div class="panel-body">
              <p class="font-bold c-white">Support question 3</p>
              <p>
                What Can I do?
              </p>
            </div>
          </a>
        </li>
        <li class="panel panel-filled support-question">
          <a href="#answer4" data-toggle="tab" aria-expanded="false">
            <div class="panel-body">
              <p class="font-bold c-white">Support question 4</p>
              <p>
               Do you accept donations?
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
             Why was the name Virago chosen?
            </h3>
            <p>
              Originating from the Latin word virāgō, Virago is a woman who demonstrates exemplary  and heroic qualities. A popular example of a Virago is Joan of Arc.
              This name was chosen to signify the hardworking and strong women of the Jinjang Utara community. This name is an ode to their persistance and will to
              fight for themselves and their community.
            </p>

            <p class="font-bold c-white">

            </p>
            <p>
              Historically, the concept of a virago reaches back into antiquity where Hellenistic philosophy asserted that elite and exceptionally heroic men had virtus (Greek: ἀνδρεία, translit. andreia).
            </p>
            <p>
              Virtus (once again linked to vir, the brave man abiding by society's highest values and ethics as opposed to homo, human being) defined the traits of excellence for a man in ancient Rome (and Greece), including valor and heroism, but also morality and physical strength. Women and non-elite or unheroic men (slaves, servants, craftsmen, merchants) were considered a lesser category, and believed to be less excellent in Roman morality.
            </p>
            <p>A woman, however, if exceptional enough could earn the title virago. In doing so, she surpassed the expectations for what was believed possible for her gender, and embodied masculine-like aggression[4] and/or excellence. Virago, then, was a title of respect and admiration.
            </p>

          </div>

          <div id="answer2" class="tab-pane">
            <h3>
                                        How Can I Help?
                                    </h3>
            <p>
             Yes you can!
            </p>

            <p class="font-bold c-white">
              You can either make a one off <a href="http://127.0.0.1/GitHub/VIRAGO/index.php#get-involved">Donation</a> or <a href="signUp.php" > sign up </a>to post a job.
            </p>
            <p>
              Nothing is too little as all effort helps the Jinjang Utara Community as a whole.
            </p>


          </div>
          <div id="answer3" class="tab-pane">
            <h3>
                                        I really want to help!
                                    </h3>
            <p>
              As it turns out, you really can!
            </p>
            <br>
            <p class="font-bold c-white">
              You can either make a one off <a href="http://127.0.0.1/GitHub/VIRAGO/index.php#get-involved">Donation</a> or <a href="signUp.php" > sign up </a>to post a job.
            </p>


          </div>
          <div id="answer4" class="tab-pane">
            <h3>
                                        Donations are very welcome!
                                    </h3>
                                    <br>
            <p>
              You can either make a one off <a href="http://127.0.0.1/GitHub/VIRAGO/index.php#get-involved">Donation</a>
            </p>

            <p class="font-bold c-white">

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
        <a href="https://www.instagram.com/explore/locations/518534147/help-university/?hl=en" class="btn btn-social-icon btn-instagram">
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
