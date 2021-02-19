<?php

include "dbh.inc.php";

if(isset($_POST["submitProfile"])) {
    
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
                $modifiedFilename = uniqid("", true).".".$fileExtension;
                $fileLocation = '../uploads/'.$modifiedFilename;

                move_uploaded_file($fileTmpName, $fileLocation);

                echo "Image uploaded successfully";
            }
        }
    }

    $gender = $_POST["gender"];
    $userInfo = $_POST["userInfo"];
    $fitnessGoal = $_POST["fitnessGoal"];
    $fitnessDuration = $_POST["fitnessDuration"];
    $fitnessActivities = $_POST["fitnessActivities"];
    $gymLikables = $_POST["gymLikables"];

    


    echo "$gender";
    echo "<br>";
    echo "$userInfo";
    echo "<br>";
    echo "$fitnessGoal";
    echo "<br>";
    echo "$fitnessDuration";
    echo "<br>";
    echo "$fitnessActivities";
    echo "<br>";
    echo "$gymLikables";
    echo "<br>";
    echo $filename;
    
} else {
    header("Location: ../createProfile.php");
    exit();
}