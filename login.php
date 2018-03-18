<!DOCTYPE html>
<html lang="en" >

<head>
  <!-- This is the header part with include the link to the CSS -->
  <meta charset="UTF-8">
  <title>Sign-IN</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/styleSignUp.css">

  
</head>

<body>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active login"><a href="#signup">SIGN IN</a></li>
        
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
         
          <form action="BackEnd_Script/loginAcc.php" method="post">         

            <div class="field-wrap">              
              <input type="email" name="userEmail" required autocomplete="off" placeholder="Email*" />
            </div>
            
            <div class="field-wrap">              
              <input type="password" name="password" required autocomplete="off" placeholder="Password*" />
            </div>         
            
            <button type="submit" name="submit" class="button button-block"/>SIGN IN</button>
            <a href="index.php" class="button btn-cancel ">CANCEL</a>

          </form>

          <hr>
          <span class="Fpass">Forgot password?<a href="lostpass.php">Click Here</a></span>
          <span class="Nuser">New User?<a href="signUp.php">Click Here</a></span>
          

        </div>
        
        <div id="login">          

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/indexSignUp.js"></script>
</body>

</html>
