<?php
	
	$uniqueID = uniqid("VIRAGO_CLT_", true);
	$firstName = $_POST['firstName1'];
	$lastName = $_POST['lastName1'];
	$email = $_POST['email1'];
	$pass = $_POST['pass1'];
	$cPass = $_POST['cPass1'];	
	$address = $_POST['address1'];
	$phone = $_POST['phone1'];
		



	//Make connection to database
	include 'DBConfig.php';

	

	if (isset($_POST['client_submit'])) {


		if (empty($firstName)&&empty($lastName)&&empty($email)&&empty($pass)&&empty($address)&&empty($phone)) {

			echo '<script language = "javascript">';
			echo 'alert("All the field most be completed")';
			echo '</script>';
			echo  "<script> window.location.assign('../signUp.php'); </script>";

		}else{			

			$checkEmail = mysqli_query($con,"SELECT email FROM client where email ='$email'");

			$row = mysqli_fetch_array($checkEmail);
			$data = $row[0];

			if($data){
				echo '<script language = "javascript">';
				echo 'alert("You have already sign Up!!")';
				echo '</script>';
				echo  "<script> window.location.assign('../signUp.php'); </script>";
			}else{

				if ($pass == $cPass) {

					$sql = "INSERT INTO client ( firstName, lastName, email, password, address, phone, CL_UniqueID) VALUES ('$firstName','$lastName','$email','$pass','$address','$phone','$uniqueID')";

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
