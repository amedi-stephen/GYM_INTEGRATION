<?php

session_start();
include "dbh.inc.php";

if(isset($_POST["submitProfile"])) {
    $gender = $_POST["gender"];
    $userInfo = $_POST["userInfo"];
    $fitnessGoal = $_POST["fitnessGoal"];
    $fitnessDuration = $_POST["fitnessDuration"];
    $fitnessActivities = $_POST["fitnessActivities"];
    $gymLikables = $_POST["gymLikables"];

    if(empty($gender) || empty($userInfo) || empty($fitnessGoal) || empty($fitnessDuration) || empty($fitnessActivities) || empty($gymLikables)) {
        header("Location: ../createProfile.php");
        exit();
    } else {
        $QUERY_join = "SELECT * FROM users";
        $result = $DBconnection->query($QUERY_join);
        while($row = $result->fetch_assoc()) {
            // var_dump($row);
            if(isset($_SESSION["userID"])) {
                $userid = $row["user_id"];
                // var_export($_SESSION["userID"]);
                if($_SESSION["userID"] == $userid) {
                    var_dump($row["user_id"]);
                    $QUERY = "INSERT INTO userprofiles(user_id, userProfiles_goal, userProfiles_text, userProfiles_activities, userProfiles_preferrables, userProfile_gender, userProfile_goalduration)
                        VALUES('$userid', '$fitnessGoal', '$userInfo', '$fitnessActivities', '$gymLikables', '$gender', '$fitnessDuration')";
                    $result_insert = $DBconnection->query($QUERY);
                    var_dump($result_insert);
                }
            }
        }
        // var_dump($result);

    }
} else {
    header("Location: ../createProfile.php");
    exit();
}

