<?php
	session_start();
	 include("DBconfig.php");

	$fullName = $_POST['firstName'];
	$userName = $_POST['lastname'];
	$password = $_POST['password'];
	$cPassword = $_POST['confirmpass'];
	$email = $_POST['emailadd'];
	$address = $_POST['address'];
	$specialty = $_POST['specialty'];
	$phone = $_POST['phone'];

	$ID = $_SESSION['user_ID'];




	if (isset($_POST['submit'])) {

		if (!empty($fullName)&&!empty($userName)&&!empty($password)&&!empty($cPassword)&&!empty($email)&&!empty($address)&&!empty($specialty)&&!empty($phone)) {

					if ($password == $cPassword) {

						$sql = "UPDATE jobseekers SET firstName='$fullName',lastName='$userName',email='$email',password='$password',`address`='$address',phone='$phone',specialty='$specialty' WHERE JS_UniqueID = '$ID'";

						if ($con->query($sql) == TRUE && mysqli_affected_rows($con) >0){

							echo '<script language = "javascript">';
							echo 'alert("Record edited successfully")';
							echo '</script>';
							echo  "<script> window.location.assign('../member_edit_profile.php'); </script>";
						}else{
								
								echo '<script language = "javascript">';
						        echo 'alert("Data existed!")';
						        echo '</script>';
						        echo  "<script> window.location.assign('../member_edit_profile.php'); </script>";
						}

					}else{
						echo '<script language = "javascript">';
						echo 'alert("The password must be same")';
						echo '</script>';
						echo  "<script> window.location.assign('../member_edit_profile.php'); </script>";
					}
				}else{
					echo '<script language = "javascript">';
					echo 'alert("All the fields most be completed!")';
					echo '</script>';
					echo  "<script> window.location.assign('../member_edit_profile.php'); </script>";
			}
}



	$con->close();
?>
