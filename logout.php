<?php
	session_start();
	echo '<script language = "javascript">';
				echo 'alert("Thank you visiting VIRAGO!!")';
				echo '</script>';
				echo  "<script> window.location.assign('index.php'); </script>";
	session_destroy();
?>