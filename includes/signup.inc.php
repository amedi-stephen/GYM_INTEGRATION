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
        echo "Your signup is successful";
    }

    
} else {
    header("Location: ../signup.php");
    exit();
}