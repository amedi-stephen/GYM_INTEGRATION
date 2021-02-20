<?php

include "dbh.inc.php";

if(isset($_POST["submitProfile"])) {

    $gender = $_POST["gender"];
    $userInfo = $_POST["userInfo"];
    $fitnessGoal = $_POST["fitnessGoal"];
    $fitnessDuration = $_POST["fitnessDuration"];
    $fitnessActivities = $_POST["fitnessActivities"];
    $gymLikables = $_POST["gymLikables"];

    if(empty($gender) || empty($userInfo) || empty($fitnessGoal) || empty($fitnessActivities) || empty($gymLikables)) {
        header("Location: ../createProfile.php?error=emptyfields");
        exit();
    } else {
        $QUERY_insertProfile = "INSERT INTO userprofiles() VALUES()";
    }
    
} else {
    header("Location: ../createProfile.php");
    exit();
}