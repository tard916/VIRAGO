<?php

	//Make connection to database
	include 'DBConfig.php';

	error_reporting(0);
	session_start();
	$uniqueID = uniqid("AJ_", true);
	$memberID = $_SESSION['user_ID'];
	$sess_id =$_POST['JB_UniqueID'];
	$comment =$_POST['comment'];
	$updateSta='completed';

	
	//echo $memberID;
	//echo $sess_id;
	

	//submit the group session update form
	if (isset($_POST['submit'])) {
		$chekJob = mysqli_query($con,"SELECT * FROM acceptedjobs WHERE JB_UniqueID='$sess_id' AND JS_UniqueID='$memberID'");

		$row = mysqli_fetch_array($chekJob);
		$data = $row[0];

		if($data){
				echo '<script language = "javascript">';
				echo 'alert("You have already applied to this Job!!")';
				echo '</script>';
				echo  "<script> window.location.assign('../listedJobs.php'); </script>";
			}else{

				$sql="INSERT INTO acceptedjobs (AJ_uniqueID, JB_UniqueID, JS_UniqueID, comment) VALUES ('$uniqueID','$sess_id','$memberID','$comment')";

				if ($con->query($sql) == TRUE && mysqli_affected_rows($con) >0){

					$chekDate = $con->query("SELECT placeT, neededPlace FROM jobs WHERE JB_UniqueID= '$sess_id'");
				    foreach ($chekDate as $key => $rs) {

				         $count = $rs['placeT'] + 1;
				         $np=$rs['neededPlace'];

				      if ($np > $count) {
				       $closeJob=$con->query("UPDATE jobs SET placeT='$count' WHERE JB_UniqueID='$sess_id'");
				      }elseif ($np <= $count) {
				      	$closeJob=$con->query("UPDATE jobs SET status='$updateSta' WHERE JB_UniqueID='$sess_id'");
				      }
				    }

					echo '<script language = "javascript">';
					echo 'alert("Job applied successfully!")';
					echo '</script>';
					echo  "<script> window.location.assign('../member_homepage.php'); </script>";

				}else
				{
					echo " Error Adding record: ".$con->error;
					echo '<script language = "javascript">';
					echo 'alert("Job application Failed. ")';
					echo '</script>';
					echo  "<script> window.location.assign('../member_homepage.php'); </script>";
				}
			}
	}

	$con->close();
?>
