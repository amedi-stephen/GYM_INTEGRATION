<?php

include "dbh.inc.php";

if (isset($_POST["submit_signup"])) {
    $mail = $DBconnection->real_escape_string($_POST["mail"]);
    $company = $DBconnection->real_escape_string($_POST["company"]);
    $pwd = $DBconnection->real_escape_string($_POST["pwd"]);
    $repeatPwd = $DBconnection->real_escape_string($_POST["re-pwd"]);

    $uppercase = preg_match("@[A-Z]@", $pwd);
    $lowercase = preg_match("@[a-z]@", $pwd);
    $number = preg_match("@[0-9]@", $pwd);
    $specialCharacters = preg_match("@[^\w]@", $pwd);

    if (empty($mail) || empty($company) || empty($pwd) || empty($repeatPwd)) {
        header("Location: ../employee/employeeSignup.php?error=emptyfields");
        exit();
    } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../employee/employeeSignup.php?error=invalidemail&company=" . $company);
        exit();
    } 
    // else if (!$uppercase || !$lowercase || !$number || !$specialCharacters || strlen($password) < 8) {
    //     header("Location: ../employee/employeeSignup.php?error=invalidpassword&mail=" . $mail . "&company=" . $company);
    //     exit();
    // } 
    else if ($pwd != $repeatPwd) {
        header("Location:../employee/employeeSignup.php?error=checkpassword&mail=" . $mail . "&company=" . $company);
        exit();
    } else {
        $sql = "SELECT * FROM employees WHERE gym_name='$company'";
        $result = $DBconnection->query($sql);
        if ($result->num_rows > 0) {
            header("Location: ../employee/employeeSignup.php?error=gymtaken");
            exit();
        } else {
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            $query = "INSERT INTO employees(employer_email, gym_name, password) VALUES('$mail', '$company', '$hashedPwd')";
            $result = $DBconnection->query($query);
            var_export($result);
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";

            $employer_query = "SELECT * FROM employees WHERE employer_email='$mail' AND gym_name='$company'";
                $resultEmployers = $DBconnection->query($employer_query);
                if($resultEmployers->num_rows > 0) {
                    while($row = $resultEmployers->fetch_assoc()) {
                        $employerid = $row["employer_id"];
                        $insertImg = "INSERT INTO employerimage(employer_id, eimage_status) VALUES('$employerid', 1)";
                        $insertResults = $DBconnection->query($insertImg);
                    }
                } else {
                    echo "an error occured";
                }

            header("Location: ../employee/employeeSignup.php?signup=success");
            exit();

        }
    }
} else {
    header("Location: ../employee/employeeSignup.php");
    exit();
}
