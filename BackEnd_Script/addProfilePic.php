<?php
    include("DBconfig.php");
 	session_start();
    $userID = $_SESSION['user_ID'];
    

  if(isset($_POST['but_upload'])){
        $name = $_FILES['file']['name'];
        $target_dir = "symbol/profilePic/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

            $checkIfUserHaveImg = mysqli_query($con,"SELECT name FROM images WHERE userID='$userID'");

            $row = mysqli_fetch_array($checkIfUserHaveImg);
            $data = $row[0];

          if($data){
            //Use Update to replace the user Image
            $sql = "UPDATE images SET name ='$name', image ='$image' WHERE userID='$userID'";
            mysqli_query($con,$sql) or die(mysqli_error($con));
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'../symbol/profilePic/'.$name);
            
            	header("Location: ../trainer_homepage.php");
           

          }else{
            // Insert record
            $query = "insert into images(name,image,userID) values('".$name."','".$image."','".$userID."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
            
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'../symbol/profilePic/'.$name);

            
            	header("Location: ../trainer_homepage.php");
            
          }
            

        }
    
    }
    ?>