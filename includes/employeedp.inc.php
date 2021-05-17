<?php

session_start();
include "dbh.inc.php";
$employerSessionId = $_SESSION["employerID"];

if (isset($_POST["upload_img"])) {
    $img = $_FILES["img_upload"];
    $imgName = $_FILES["img_upload"]["name"];
    $imgTmpName = $_FILES["img_upload"]["tmp_name"];
    $imgSize = $_FILES["img_upload"]["size"];
    $imgError = $_FILES["img_upload"]["error"];
    $imgType = $_FILES["img_upload"]["type"];

    $imgToArray = explode(".", $imgName);
    $imgExtension = strtolower(end($imgToArray));
    $allowedImgTypes = array("jpg", "jpeg", "png");

    if (in_array($imgExtension, $allowedImgTypes)) {
        if ($imgError === 0) {
            if ($imgSize < 2097152) {
                if (isset($employerSessionId)) {
                    $modifiedImgName = "profile" . $employerSessionId . "." . $imgExtension;
                    $imgLocation = '../uploads/employer/' . $modifiedImgName;

                    move_uploaded_file($imgTmpName, $imgLocation);
                    $query = "UPDATE employerimage SET eimage_status = 0 WHERE employer_id='$employerSessionId'";
                    $result = $DBconnection->query($query);

                    header("Location: ../employee/employeeSettings.php?upload=success");
                    exit();
                }
            } else {
                header("Location:  ../employee/employeeSettings.php?error=checksize");
                exit();
            }
        } else {
            header("Location:  ../employee/employeeSettings.php?error=fileerror");
            exit();
        }
    } else {
        header("Location:  ../employee/employeeSettings.php?error=checkfiletype");
        exit();
    }
}
