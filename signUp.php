<?php
    include 'BackEnd_Script/DBConfig.php';
    $result = $con->query("SELECT * FROM category");
?>  
<!DOCTYPE html>
<html lang="en" >

<head>
  <!-- This is the header part with include the link to the CSS -->
  <meta charset="UTF-8">
  <title>Sign-Up</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/styleSignUp.css">
  <script type="text/javascript" src="js/trainer_sign_up_form_validation.js" async></script>
  

  
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

                   
          <form action="BackEnd_Script/viragoReistration.php" method="POST" name="JobSeekers" >

            <div class="top-row">
              <div class="field-wrap">                
                <input id="fname" type="text" name="firstName"  autocomplete="off" placeholder="First Name*" required />
              </div>
          
              <div class="field-wrap">                
                <input id="lname" type="text" name="lastName"  autocomplete="off" placeholder="Last Name*" required />
              </div>
            </div>

            <div class="field-wrap">             
              <input id="email" type="email" name="email"  autocomplete="off" placeholder="Email*" required/>
            </div>
            
            <div class="field-wrap">              
              <input id="pass" type="password" name="password"  autocomplete="false" placeholder="Password*" required/>
            </div>

            <div class="field-wrap">              
              <input id="Phn" type="password" name="password1"  autocomplete="off" placeholder="Phone Number*" required/>
            </div>     

            <div class="field-wrap">              
              <input id="addr" type="text" name="address"  autocomplete="off" placeholder="Address*" required/>
            </div>

            <div class="field-wrap">              
              <input id="Phnumber" type="text" name="phone"  autocomplete="off" placeholder="Phone Number*" required/>
            </div>
            

            <div class="field-wrap">
              <select name="specialty">
                <option>Specialty</option>
                <?php while($rsc = $result->fetch_array()){?>
                <option value="<?php echo $rsc['categoryName']; ?>"><?php echo $rsc['categoryName']; ?></option>
                <?php } ?>              
              </select>              
             
            </div>
            
            <button type="submit" name="jobSeeker_submit" class="button button-block"/>SIGN UP</button>
            <a href="index.php" class="button btn-cancel ">CANCEL</a>

          </form>
        </div>
        
        <div id="login">   
          <h1>Sign Up As CLIENT</h1>
          
          <form action="BackEnd_Script/viragoClientRegistration.php" method="post">
          
            <div class="top-row">
              <div class="field-wrap">              
                <input type="text" name="firstName1" required autocomplete="off" placeholder="First Name*" />
              </div>
          
              <div class="field-wrap">              
                <input type="text" name="lastName1" required autocomplete="off" placeholder="Last Name*" />
              </div>
            </div>

            <div class="field-wrap">
              <input type="email" name="email1" required autocomplete="off" placeholder="Email*" />
            </div>
            
            <div class="field-wrap">            
              <input type="password" name="pass1" required autocomplete="off" placeholder="Password*" />
            </div>

            <div class="field-wrap">           
              <input type="password" name="cPass1" required autocomplete="off" placeholder="Confirm Password*" />
            </div>

            <div class="field-wrap">            
              <input type="text" name="address1" required autocomplete="off" placeholder="Address*" />
            </div>

            <div class="field-wrap">
              <input type="text" name="phone1" required autocomplete="off" placeholder="Phone Number*" />
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
