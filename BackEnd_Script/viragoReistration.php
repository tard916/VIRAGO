<?php
	
	$uniqueID = uniqid("VIRAGO_JS_", true);
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$cPass = $_POST['password1'];	
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$specialty = $_POST['specialty'];	



	//Make connection to database
	include 'DBConfig.php';

	
	if (isset($_POST['jobSeeker_submit'])) {


		if (empty($firstName)&&empty($lastName)&&empty($email)&&empty($pass)&&empty($address)&&empty($phone)&&empty($specialty)) {

			echo '<script language = "javascript">';
			echo 'alert("All the field most be completed")';
			echo '</script>';
			echo  "<script> window.location.assign('../signUp.php'); </script>";

		}else{			

			$checkEmail = mysqli_query($con,"SELECT email FROM jobseekers where email ='$email'");

			$row = mysqli_fetch_array($checkEmail);
			$data = $row[0];

			if($data){
				echo '<script language = "javascript">';
				echo 'alert("You have already sign Up!!")';
				echo '</script>';
				echo  "<script> window.location.assign('../signUp.php'); </script>";
			}else{

				if ($pass == $cPass) {

					$sql = "INSERT INTO jobseekers ( firstName, lastName, email, password, address, phone, specialty, JS_UniqueID) VALUES ('$firstName','$lastName','$email','$pass','$address','$phone','$specialty','$uniqueID')";

					if ($con->query($sql) == TRUE && mysqli_affected_rows($con) >0){

						echo '<script language = "javascript">';
						echo 'alert("Record Added successfully")';
						echo '</script>';
						echo  "<script> window.location.assign('../login.php'); </script>";
					}
					else
					{
						echo " Error Adding record: ".$con->error;
					}

				}else{
					echo '<script language = "javascript">';
					echo 'alert("The password must be same")';
					echo '</script>';
					echo  "<script> window.location.assign('../signUp.phpss'); </script>";
				}
			
			}	
		}
	} 
	$con->close();
?>
