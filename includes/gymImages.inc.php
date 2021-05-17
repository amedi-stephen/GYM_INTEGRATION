<?php
session_start();
include "dbh.inc.php";

if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "../uploads/employer/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
        // Insert record
        $sql = "SELECT * FROM gyms";
        $result = $DBconnection->query($sql);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if(isset($_SESSION['gymID'])) {
                    if($_SESSION['gymID'] == $row['gym_id']) {
                        $gymSession = $_SESSION['gymID'];
                        $query = "insert into gym_images(gym_id, image) values('".$gymSession."', '".$name."')";
                        mysqli_query($DBconnection,$query);
                    }
                }
            }
        }
        
     }

  }
 
}
