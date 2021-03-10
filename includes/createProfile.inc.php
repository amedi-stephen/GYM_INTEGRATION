<?php

session_start();
include "dbh.inc.php";

if(isset($_POST["submitProfile"])) {
    $gender = $_POST["gender"];
    $userInfo = $_POST["userInfo"];
    $fitnessGoal = $_POST["fitnessGoal"];
    $fitnessDuration = $_POST["fitnessDuration"];
    $fitnessActivities = serialize($_POST["fitnessActivities"]);
    $gymLikables = serialize($_POST["gymLikables"]);

    if(empty($gender) || empty($userInfo) || empty($fitnessGoal) || empty($fitnessDuration) || empty($fitnessActivities) || empty($gymLikables)) {
        header("Location: ../createProfile.php");
        exit();
    } else {
        $QUERY_join = "SELECT * FROM users";
        $result = $DBconnection->query($QUERY_join);
        while($row = $result->fetch_assoc()) {
            if(isset($_SESSION["userID"])) {
                $userid = $row["user_id"];
                if($_SESSION["userID"] == $userid) {
                    $QUERY = "INSERT INTO userprofiles(user_id, userProfiles_goal, userProfiles_text, userProfiles_activities, userProfiles_preferrables, userProfile_gender, userProfile_goalduration)
                        VALUES('$userid', '$fitnessGoal', '$userInfo', '$fitnessActivities', '$gymLikables', '$gender', '$fitnessDuration')";
                    $result_insert = $DBconnection->query($QUERY);
                    header("Location: ../createProfile.php?status=success");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: ../createProfile.php");
    exit();
}

