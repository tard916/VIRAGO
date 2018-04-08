<?php

	//Make connection to database
	include 'DBConfig.php';

	error_reporting(0);
	session_start();
	$uniqueID = uniqid("AJ_", true);
	$memberID = $_SESSION['user_ID'];
	$sess_id =$_POST['JB_UniqueID'];
	$comment =$_POST['comment'];

	
	//echo $memberID;
	//echo $sess_id;
	

	//submit the group session update form
	if (isset($_POST['submit'])) {

			$sql="INSERT INTO acceptedjobs (AJ_uniqueID, JB_UniqueID, JS_UniqueID, comment) VALUES ('$uniqueID','$sess_id','$memberID','$comment')";

			if ($con->query($sql) == TRUE && mysqli_affected_rows($con) >0){

				echo '<script language = "javascript">';
				echo 'alert("Your rating is submitted successfully!")';
				echo '</script>';
				echo  "<script> window.location.assign('../member_homepage.php'); </script>";
			}else
			{
				echo " Error Adding record: ".$con->error;
				echo '<script language = "javascript">';
				echo 'alert("Your rating has not submitted successfully! ")';
				echo '</script>';
				echo  "<script> window.location.assign('../member_homepage.php'); </script>";
			}
	}

	$con->close();
?>
