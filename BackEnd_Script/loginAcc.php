<?php
	//error_reporting(0);
	session_start();
	include("DBconfig.php");	

	$username = $_POST['userEmail'];
	$password = $_POST['password'];
	
	//echo $username;
	//echo $password;

	//submit the login form to check validation and login as a member or trainer
	//based on username and password
	if (isset($_POST['submit'])) {
		//echo "testing 2";
		if (!empty($username)&&!empty($password)) {

			$sql1 = $con ->query("DROP TABLE IF EXISTS users");

			$sql2 = $con ->query("create table  users   as (SELECT JS_UniqueID as userID,firstName, email, password,userType FROM   jobseekers  )UNION ALL (SELECT CL_UniqueID as userID,firstName,email, password, userType FROM   client )");

			$result = $con->query("SELECT * FROM users WHERE email='$username' and password='$password'");


			 while($rs = $result->fetch_array())
			{
			  $_SESSION['user_ID'] = $rs["userID"];
			  $_SESSION['userFullName'] = $rs["firstName"];
			  $_SESSION['user_Email'] = $rs['email'];
			  $_SESSION['user_Password'] = $rs['password'];
			  $_SESSION['user_Type'] = $rs['userType'];						
			}
			//to check member or trainer login to the system
			if (isset($_SESSION['user_Type']) && $_SESSION['user_Type'] == 0) {
				$_SESSION['checkLoginMember'] = 1;
			}else{
				$_SESSION['checkLoginTrainer'] = 1;
			}

			 if (isset($_SESSION['user_Email']) && $_SESSION['user_Email'] == $username && $_SESSION['user_Password'] == $password) {

			 	if ($_SESSION['user_Type'] == 1) {
					//print message with user's fullname
					echo sprintf('<script type="text/javascript"> alert("Welcome at VIRAGO: %s");</script>', $_SESSION['userFullName']);
			 	 	echo  "<script> window.location.assign('../trainer_homepage.php'); </script>";

			 	 } else{
					echo sprintf('<script type="text/javascript"> alert("Welcome at VIRAGO: %s");</script>', $_SESSION['userFullName']);
			 	 	echo  "<script> window.location.assign('../member_homepage.php'); </script>";
			 	 }

			 }else{
			 	echo '<script language = "javascript">';
             	echo 'alert("Username and Password  are not found.")';
             	echo '</script>';
							echo  "<script> window.location.assign('../login.php'); </script>";
			 }


		}else{
			echo '<script language = "javascript">';
          	echo 'alert("Please fill all the field.")';
          	echo '</script>';
          	echo  "<script> window.location.assign('../login.php'); </script>";
		}
	}



	$con->close();

?>
