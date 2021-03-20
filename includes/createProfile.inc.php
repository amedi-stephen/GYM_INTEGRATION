<?php

session_start();
include "dbh.inc.php";

if(isset($_POST["submitProfile"])) {
    $gender = $DBconnection->real_escape_string($_POST["gender"]);
    $userInfo = $DBconnection->real_escape_string($_POST["userInfo"]);
    $fitnessGoal = $DBconnection->real_escape_string($_POST["fitnessGoal"]);
    $fitnessActivities = $DBconnection->real_escape_string(serialize($_POST["fitnessActivities"]));
    $gymLikables = $DBconnection->real_escape_string(serialize($_POST["gymLikables"]));


    if(empty($gender) || empty($userInfo) || empty($fitnessGoal) || empty($fitnessActivities) || empty($gymLikables)) {
        header("Location: ../accountSettings.php?error=emptyfields");
        exit();
    } 
    else {
        $QUERY_join = "SELECT * FROM users";
        $result = $DBconnection->query($QUERY_join);
        while($row = $result->fetch_assoc()) {
            if(isset($_SESSION["userID"])) {
                $userid = $row["user_id"];
                if($_SESSION["userID"] == $userid) {
                    $QUERY = "INSERT INTO userprofiles(user_id, userProfiles_goal, userProfiles_text, userProfiles_activities, userProfiles_preferrables, userProfile_gender)
                        VALUES('$userid', '$fitnessGoal', '$userInfo', '$fitnessActivities', '$gymLikables', '$gender')";
                    $result_insert = $DBconnection->query($QUERY);
                    header("Location: ../accountSettings.php?status=success");
                    exit();
                }
            }
        }
    }

} else {
    header("Location: ../accountSettings.php");
    exit(); 
}

