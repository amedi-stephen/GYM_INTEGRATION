<?php

include "dbh.inc.php";

if(isset($_POST["submitLogin"])) {
    $unameorEmail = $_POST["username"];
    $password = $_POST["password"];

    if(empty($unameorEmail) || empty($password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    } else {
        $query_login = "SELECT * FROM users WHERE user_name=? OR user_email=?";
        $stmt_loginQuery = $DBconnection->stmt_init();
        if(!$stmt_loginQuery->prepare($query_login)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        } else {
            $stmt_loginQuery->bind_param("ss", $unameorEmail, $unameorEmail);
            $stmt_loginQuery->execute();
            $result_loginQuery = $stmt_loginQuery->get_result();
            if($row = $result_loginQuery->fetch_assoc()) {
                $verifyPassword = password_verify($password, $row["user_password"]);
                if($verifyPassword == false) {
                    header("Location: ../login.php?error=wrongPwd");
                    exit();
                } else if($verifyPassword == true) {
                    session_start();
                    $_SESSION["userID"] = $row["user_id"];
                    $_SESSION["username"] = $row["user_name"];

                    header("Location: ../createProfile.php");
                    exit();
                } else {
                    header("Location: ../login.php?error=wrongPwd");
                }
            } else {
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}