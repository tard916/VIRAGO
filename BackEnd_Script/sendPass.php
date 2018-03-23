<?php
	include("emailPass.php");
	session_start();
	 include("DBconfig.php");

	$email = $_POST['email'];

	

	if (isset($_POST['resetPass'])) {

		if (!empty($email)) {

			$checkEmail = mysqli_query($con,"SELECT email FROM users where email ='$email'");

			$row = mysqli_fetch_array($checkEmail);
			$data = $row[0];

			if($data){

				$sql1 = "SELECT firstName,password FROM users where email = '$email'";
				$result = $con->query($sql1);
				while ($rst = $result->fetch_array()) {
					$hisFullName = $rst['firstName'];
					$hisPasswor = $rst['password'];
				}

				echo '<script language = "javascript">';
				echo 'alert("The reset email is sent to your email, please check on your email!!")';
				echo '</script>';
				echo  "<script> window.location.assign('../login.php'); </script>";
				emailTo($email,$hisFullName,$hisPasswor);
			}else{
				echo '<script language = "javascript">';
				echo 'alert("This email doesn\'t exist in the Database!!")';
				echo '</script>';
				echo  "<script> window.location.assign('../lostpass.php'); </script>";
			}
		}
	}

?>
