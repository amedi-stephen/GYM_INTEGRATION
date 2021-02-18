<?php

include "dbh.inc.php";

if(isset($_POST["submitSignup"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_pwd"];

    $uppercase = preg_match("@[A-Z]@", $password);
    $lowercase = preg_match("@[a-z]@", $password);
    $number = preg_match("@[0-9]@", $password);
    $specialCharacters = preg_match("@[^\w]@", $password);

    if(empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        header("Location: ../signup.php?error=emptyfields");
        exit();
    } else if(!preg_match('/^[a-zA-Z0-9]*$/', $username)) {
        header("Location: ../signup.php?error=invalidusername&email=".$email);
        exit();
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail&username=".$username);
        exit();
    } else if(!$uppercase || !$lowercase || !$number || !$specialCharacters || strlen($password) < 8) {
        header("Location: ../signup.php?error=invalidpassword&username=".$username."&email=".$email);
        exit();
    } else if($password != $confirmPassword) {
        header("Location: ../signup.php?error=checkpassword&username=".$username."&email=".$email);
        exit();
    } else {
        $checkUserQuery = "SELECT user_name FROM users WHERE user_name='$username'";
        $result_UserQuery = $DBconnection->query($checkUserQuery);
        $result_checkUserRows = $result_UserQuery->num_rows;
        var_dump($result_checkUserRows);
        if($result_checkUserRows > 0) {
            header("Location: ../signup.php?error=userexists");
            exit();
        } else {
            $insertUserQuery = "INSERT INTO users(user_name, user_email, user_password) VALUES(?, ?, ?)";
            // $result_insertUserQuery = $DBconnection->query($insertUserQuery);

            $stmt_insertUserQuery = $DBconnection->stmt_init();
            // var_dump($stmt_insertUserQuery);
            if(!$stmt_insertUserQuery->prepare($insertUserQuery)) {
                var_dump($stmt_insertUserQuery);
                header("Location: ../signup.php?error=notprepared");
                exit();
            } else {
                $encryptedPwd = password_hash($password, PASSWORD_DEFAULT);
                $stmt_insertUserQuery->bind_param("sss", $username, $email, $encryptedPwd);
                $stmt_insertUserQuery->execute();

                header("Location: ../signup.php?signup=success");
                exit();

                // i need to close the prepared statement and db connection
            }
        }
    }

} else {
    header("Location: ../signup.php");
    exit();
}