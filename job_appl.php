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
  $JB_UniqueID = $_GET['JB_UniqueID'];

  $result = $con->query("SELECT * FROM jobs INNER JOIN client on client.CL_UniqueID = jobs.CL_UniqueID where JB_UniqueID = '$JB_UniqueID'");
  $result = $result->fetch_all(MYSQLI_ASSOC);
  $result = $result[0];    
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Job Application</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet"  href="css/bootstrap-social.css">
	<!-- Custom styles for this template -->
  <link rel="stylesheet" href="css/trainer-review.css" x>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/member_sign_up_form_validation.js" async></script>  
 </head>
 <body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
					<!--logo button of the website on the top left corner-->
					<a  href="member_homepage.php" >
						<image src="symbol/logoimg1.png" alt="img_logo" id="img_logo_trainer">
					</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
          </ul>
        </div>
      </div>
    </nav>

		<div class="box col-xs-10 col-xs-offset-1 ">
		  <a href="listedJobs.php" class="arrow"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
			<h1>Apply For <?php echo $result['jobTitel']?>.</h1>
      <hr>
			<div class="midBox">
        <form class="form" name="member_signup" action="BackEnd_Script/applyJB.php"  method="POST">
          <input type="hidden" name="JB_UniqueID" value="<?php echo $JB_UniqueID; ?>"></input>
            <div class="row ">
              <div class="panel-group">
						    <div class="centerBox col-xs-12 col-md-6 ">
                  <div class="panel panel-info">
                    <div class="panel-heading"><h3>Job Information</h3></div>
                    <div class="panel-body">
                     <ul style="list-style-type: none; display:inline-block; float:left; text-align: left;">
                      <?php
                        $arr = [
                          "JB_UniqueID" => "Job ID",
                          "jobTitel" => "Title",
                          "address" => "Location",
                          "category" => "category",
                          "price" => "Price by Date",
                          "stDate" => "Starting Date",
                          "edDate" => "Ending Date",
                          "stTime" => "Time",
                          "status" =>"Status"
                        ];                       
                        foreach ($result as $key => $rs){
                          //if column name is found in $arr then display the label title and the value
                          if(isset($arr[$key])){
                            ?>
                            <li>
                              <div><b><?php echo $arr[$key]; ?>:</b> <span><?php echo $rs; ?></span></div>
                            </li>
                            <?php
                          }
                        }
                        ?>
                      </ul>
                    </div>
                    <div class="panel-footer"><b>Client Name: </b><?php echo $result['firstName'].' '.$result['lastName']?></div>
                  </div>
                </div>

					    <!--Use onsubmit to call the javascript function-->
              <div class="centerBox col-xs-12 col-md-6 ">
                <div class="panel panel-success">
                  <div class="panel-heading"> <h3>Apply</h3></div>
				            <div class="panel-body">
							        <!--<div class="row ">
								        <div class="form-group">
                          <label>(Click on the stars)</label>
                          <div class="rate_input">
                		        <input type="hidden" id="hidden_rating" name="rating" value="0">
                	          <img src="symbol/star1.png" onclick="change(this.id);" id="php1" class="php">
                	          <img src="symbol/star1.png" onclick="change(this.id);" id="php2" class="php">
                	          <img src="symbol/star1.png" onclick="change(this.id);" id="php3" class="php">
                	          <img src="symbol/star1.png" onclick="change(this.id);" id="php4" class="php">
                		        <img src="symbol/star1.png" onclick="change(this.id);" id="php5" class="php">
                          </div>
								        </div>
							        </div>-->
				              <div class="row">
				                <div>
				                  <label>Client Information</label>
				                </div>
				              </div>
                      <div class="row">
                        <div>
                          <label><?php echo $result['firstName'].' '.$result['lastName']?></label>
                        </div>
                      </div>
                      <div class="row">
                        <div>
                          <label><?php echo $result['phone']?></label>
                        </div>
                      </div>
							        <div class="row content-box">
								        <div class="form-group">
									        <div>
										        <textarea name="comment" v-model="content"></textarea>
									        </div>
								        </div>
							         </div>
		             		   <div>
								         <button type="submit" name="submit" class="btn btn-success btn-lg active">Submit</button>
		           			   </div>
                     </div>
						       </div>
                </div>
             </div>
           </div>
           </br>
           </br>
				</form>
		 </div>
  </body>
</html>
