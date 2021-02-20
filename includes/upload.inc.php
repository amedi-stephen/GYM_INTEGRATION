<?php

session_start();
include "dbh.inc.php";
$userSessionId = $_SESSION["userID"];

if(isset($_POST["submit_upload"])) {
    $file = $_FILES["file"];
    $filename = $_FILES["file"]["name"];
    $fileTmpName = $_FILES["file"]["tmp_name"];
    $fileSize = $_FILES["file"]["size"];
    $fileError = $_FILES["file"]["error"];
    $fileType = $_FILES["file"]["type"];

    $fileToArray = explode(".", $filename);
    $fileExtension = strtolower(end($fileToArray));
    $allowedFilesTypes = array("jpg", "jpeg", "png", "pdf");

    if(in_array($fileExtension, $allowedFilesTypes)) {
        if($fileError === 0) {
            if($fileSize < 2097152) {
                $modifiedFilename = "profile".$userSessionId.".".$fileExtension;
                $fileLocation = '../uploads/'.$modifiedFilename;

                move_uploaded_file($fileTmpName, $fileLocation);
                $QUERY_UpdateImg = "UPDATE profileimg SET img_status = 0 WHERE user_id='$userSessionId'";
                $RESULT_queryUpdateImg = $DBconnection->query($QUERY_UpdateImg);

                header("Location: ../createProfile.php?upload=success");
                exit();

                // echo "Image uploaded successfully";
            } else {
                header("Location: ../createProfile.php?error=checksize");
                exit();
            }
        } else {
            header("Location: ../createProfile.php?error=fileerror");
            exit();
        }
    } else {
        header("Location: ../createProfile.php?error=checkfiletype");
        exit();
    }
}