<?php
	
	$uniqueID = uniqid("VIRAGO", true);
	$fullName = $_POST['fullname'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cPassword = $_POST['cPassword'];	
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$specialty = $_POST['specialty'];	



	$con = mysqli_conect("localhost","root","","helpfit");

	if ($con->conect_error){
		die("conection failed: ".$con->conect_error);
	}

	if (isset($_POST['jobSeeker_submit'])) {

		if (!empty($fullName)&&!empty($userName)&&!empty($password)&&!empty($email)&&!empty($address)&&!empty($level)) {

			$checkEmail = mysqli_query($con,"SELECT email FROM user where email ='$email'");

			$row = mysqli_fetch_array($checkEmail);
			$data = $row[0];

			if($data){
				echo '<script language = "javascript">';
				echo 'alert("You have already sign Up!!")';
				echo '</script>';
				echo  "<script> window.location.assign('login_page.php'); </script>";
			}else{

				$checkUserName = mysqli_query($con,"SELECT email FROM member where userName ='$userName'");

				$row = mysqli_fetch_array($checkUserName);
				$data1 = $row[0];

				if($data1){
					echo '<script language = "javascript">';
					echo 'alert("This userName already exist!!")';
					echo '</script>';
					echo  "<script> window.location.assign('member_signUpForm.php'); </script>";
				}else{

					if ($password == $cPassword) {

						$sql = "INSERT INTO member (fullName, userName, password, email, level, address)	VALUES ('$fullName','$userName','$password','$email', '$level','$address')";

						if ($con->query($sql) == TRUE && mysqli_affected_rows($con) >0){

							echo '<script language = "javascript">';
							echo 'alert("Record Added successfully")';
							echo '</script>';
							echo  "<script> window.location.assign('homepage.php'); </script>";
						}
						else
						{
							echo " Error Adding record: ".$con->error;
						}

					}else{
					echo '<script language = "javascript">';
					echo 'alert("The password must be same")';
					echo '</script>';
					echo  "<script> window.location.assign('member_signUpForm.php'); </script>";
					}
				}
			}

		}else{
				echo '<script language = "javascript">';
				echo 'alert("All the field most be completed")';
				echo '</script>';
				echo  "<script> window.location.assign('member_signUpForm.php'); </script>";
			}
	}



	$con->close();
?>
