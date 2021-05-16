<?php

include "dbh.inc.php";

if (isset($_POST["employee_login"])) {

    $mail = $DBconnection->real_escape_string($_POST["mail"]);
    $pwd = $DBconnection->real_escape_string($_POST["pwd"]);

    if (empty($mail) || empty($pwd)) {
        header("Location: ../employee/employeeLogin.php?error=emptyfields");
        exit();
    } else {
        $query = "SELECT * FROM gyms WHERE gym_email=?";
        $stmt = $DBconnection->stmt_init();
        if (!$stmt->prepare($query)) {
            header("Location: ../employee/employeeLogin.php?error=sqlerror");
            exit();
        } else {
            $stmt->bind_param('s', $mail);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($row = $result->fetch_assoc()) {
                $verifyPwd = password_verify($pwd, $row['gym_password']);
                if ($verifyPwd == false) {
                    header("Location: ../employee/employeeLogin.php?error=wrongpwd");
                    exit();
                } else if ($verifyPwd == true) {
                    session_start();
                    $_SESSION["gymID"] = $row["gym_id"];
                    $_SESSION["gymMail"] = $row["gym_email"];

                    header("Location: ../employee/employeeAccount.php");
                    exit();
                } else {
                    header("Location: ../employee/employeeLogin.php?error=wrongpwd");
                    exit();
                }
            } else {
                header("Location: ../employee/employeeLogin.php?error=nocompany");
                exit();
            }
        }
    }
} else {
    header("Location: ../employee/employeeLogin.php");
    exit();
}
