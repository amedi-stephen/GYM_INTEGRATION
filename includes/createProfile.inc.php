<?php

include "dbh.inc.php";

if(isset($_POST["submitProfile"])) {
    // file upload, male or female, userInfo, fitnessGoal, fitnessDuration, fitnessActivities, gymLikables
    
} else {
    header("Location: ../createProfile.php");
    exit();
}