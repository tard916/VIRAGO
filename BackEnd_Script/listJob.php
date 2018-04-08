<?php
	include 'DBConfig.php';
	session_start();
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$today_date=date("Y-m-d");
	$uniqueID = uniqid("JB_", true);
	$jobtitel = $_POST['jobTitel'];
	$category = $_POST['category'];
	$address = $_POST['address'];
	$stDate = $_POST['stDate'];		
	$edDate = $_POST['edDate'];
	$stTime = $_POST['stTime'];
	$price = $_POST['price'];
	$ID = $_SESSION['user_ID'];
	
	//echo $stDate;
	//echo $today_date;
	$dateTimestamp1 = date_create($today_date);
	$dateTimestamp2 = date_create($stDate);
	$dateTimestamp3 = date_create($edDate);

	
	$diff1= date_diff($dateTimestamp1,$dateTimestamp2);	
	$diff3= date_diff($dateTimestamp2,$dateTimestamp3);

	//echo $diff;
	//echo $diff1->format('%r%d d1');	
	//echo $diff3->format('%r%d d3');
	//Make connection to database
	

	

	if (isset($_POST['submit'])) {


		if (!empty($jobtitel)&&!empty($category)&&!empty($address)&&!empty($stDate)&&!empty($edDate)&&!empty($stTime)&&!empty($price)) {

			if($diff1->format('%r%d') < 0){
				setcookie("jobtitel", $jobtitel, time()+(60*3), '/');
				setcookie("address", $address, time()+(60*3), '/');
				setcookie("price", $price, time()+(60*3), '/');
				echo '<script language = "javascript">';
				echo 'alert("Invalid date you cannot post a jost with the past Date!!!")';
				echo '</script>';
				echo  "<script> window.location.assign('../listAJob.php'); </script>";
			}else{

				if ($diff3->format('%r%d ') >= 0 ) {

					$sql = "INSERT INTO jobs (jobTitel, address, category, price,
					 stDate, edDate, stTime, JB_UniqueID,CL_UniqueID) VALUES ('$jobtitel','$address',
					 '$category','$price','$stDate','$edDate','$stTime','$uniqueID','$ID')";

					if ($con->query($sql) == TRUE && mysqli_affected_rows($con) >0){

						echo '<script language = "javascript">';
						echo 'alert("Record Added successfully")';
						echo '</script>';
						echo  "<script> window.location.assign('../trainer_homepage.php'); </script>";
					}
					else
					{
						echo " Error Adding record: ".$con->error;
					}

				}else{
					setcookie("jobtitel", $jobtitel, time()+(60*3), '/');
					setcookie("address", $address, time()+(60*3), '/');
					setcookie("price", $price, time()+(60*3), '/');
					echo '<script language = "javascript">';
					echo 'alert("Endding Date must not be a past date!")';
					echo '</script>';
					echo  "<script> window.location.assign('../listAJob.php'); </script>";
				}
			
			}		

		}else{
			setcookie("jobtitel", $jobtitel, time()+(60*3), '/');
			setcookie("address", $address, time()+(60*3), '/');
			setcookie("price", $price, time()+(60*3), '/');
			echo '<script language = "javascript">';
			echo 'alert("All the field most be completed")';
			echo '</script>';
			echo  "<script> window.location.assign('../listAJob.php'); </script>";		
		}
	} 
	$con->close();
?>
