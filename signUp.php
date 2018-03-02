<!DOCTYPE html>
<html lang="en" >

<head>
  <!-- This is the header part with include the link to the CSS -->
  <meta charset="UTF-8">
  <title>Sign-Up</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/styleSignUp.css">
  

  
</head>

<body>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Job Seekers</a></li>
        <li class="tab"><a href="#login">Client</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up As Job Seekers</h1>
          
          <form action="BackEnd_Script/viragoReistration.php" method="post" name="JobSeekers" autocomplete="off">

            <div class="top-row">
              <div class="field-wrap">
                <label>
                  First Name<span class="req">*</span>
                </label>
                <input id="fname" type="text" name="firstName"  autocomplete="off" />
              </div>
          
              <div class="field-wrap">
                <label>
                  Last Name<span class="req">*</span>
                </label>
                <input id="lname" type="text" name="lastName"  autocomplete="off"/>
              </div>
            </div>

            <div class="field-wrap">
              <label>
                Email <span class="req">*</span>
              </label>
              <input id="email" type="email" name="email"  autocomplete="off"/>
            </div>
            
            <div class="field-wrap">
              <label>
                Password<span class="req">*</span>
              </label>
              <input id="pass" type="password" name="password"  autocomplete="off"/>
            </div>

            <div class="field-wrap">
              <label>
                Confirm Password<span class="req">*</span>
              </label>
              <input id="cpass" type="password" name="cPassword"  autocomplete="off"/>
            </div>

            <div class="field-wrap">
              <label>
                Address<span class="req">*</span>
              </label>
              <input id="addr" type="text" name="address"  autocomplete="off"/>
            </div>

            <div class="field-wrap">
              <label>
                Phone Number<span class="req">*</span>
              </label>
              <input id="Phn" type="text" name="phone"  autocomplete="off"/>
            </div>

            <div class="field-wrap">
              <label>
                Specialty<span class="req">*</span>
              </label>
              <input id="speci" type="text" name="specialty"  autocomplete="off"/>
            </div>
            
            <button type="submit" name="jobSeeker_submit" class="button button-block"/>SIGN UP</button>
            <a href="index.php" class="button btn-cancel ">CANCEL</a>

          </form>

        </div>
        
        <div id="login">   
          <h1>Sign Up As CLIENT</h1>
          
          <form action="BackEnd_Script/viragoReistration.php" method="post">
          
            <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="firstName1" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="lastName1" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email <span class="req">*</span>
            </label>
            <input type="email" name="email1" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password1" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input type="password" name="cPassword1" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Address<span class="req">*</span>
            </label>
            <input type="text" name="address1" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Phone Number<span class="req">*</span>
            </label>
            <input type="text" name="phone1" required autocomplete="off"/>
          </div>

          
          <button class="button button-block" name="client_submit" />SIGN UP</button>
          <a href="index.php" class="button btn-cancel ">CANCEL</a>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/indexSignUp.js"></script>
</body>

</html>
