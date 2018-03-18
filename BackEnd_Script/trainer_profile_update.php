<?php
error_reporting(0);
		session_start();
		include("DBconfig.php");
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];

		$password = $_POST['password'];
		$cPassword = $_POST['cpass'];
		
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		

		$ID = $_SESSION['user_ID'];

		if (isset($_POST['submit'])) {

			if (!empty($firstName)&&!empty($lastName)&&!empty($password)&&!empty($cPassword)&&!empty($email)&&!empty($address)&&!empty($phone)) {

						if ($password == $cPassword) {

							$sql = "UPDATE client SET firstName='$firstName', lastName='$lastName', email='$email', password='$password', address='$address', phone='$phone' WHERE CL_UniqueID = '$ID'";

							if ($con->query($sql) == TRUE && mysqli_affected_rows($con) >0){

								echo '<script language = "javascript">';
								echo 'alert("Record edited successfully")';
								echo '</script>';
								echo  "<script> window.location.assign('../trainer_edit_profile.php'); </script>";
							}
							else
							{
								//echo "Error adding data".$conn->error;
							  echo '<script language = "javascript">';
				              echo 'alert("Data existed!")';
				              echo '</script>';
				              echo  "<script> window.location.assign('../trainer_edit_profile.php'); </script>";
							}

						}else{
						echo '<script language = "javascript">';
						echo 'alert("The password must be same")';
						echo '</script>';
						echo  "<script> window.location.assign('../trainer_edit_profile.php'); </script>";
						}
					}else{
					echo '<script language = "javascript">';
					echo 'alert("All the fields most be completed!")';
					echo '</script>';
					echo  "<script> window.location.assign('../trainer_edit_profile.php'); </script>";
				}
	}



		$con->close();
	?>
