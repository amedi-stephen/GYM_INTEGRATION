<?php

include "dbh.inc.php";

if (isset($_POST["submit_signup"])) {
    $mail = $DBconnection->real_escape_string($_POST["mail"]);
    $company = $DBconnection->real_escape_string($_POST["company"]);
    $pwd = $DBconnection->real_escape_string($_POST["pwd"]);
    $repeatPwd = $DBconnection->real_escape_string($_POST["re-pwd"]);
    $company = $DBconnection->real_escape_string($_POST["company"]);
    $phone = $DBconnection->real_escape_string($_POST["phone"]);
    $address = $DBconnection->real_escape_string($_POST["address"]);
    $town = $DBconnection->real_escape_string($_POST["town"]);
    $classes = $DBconnection->real_escape_string(base64_encode(serialize($_POST["classes"])));
    $equipments = $DBconnection->real_escape_string(base64_encode(serialize($_POST["equipments"])));
    $amenities = $DBconnection->real_escape_string(base64_encode(serialize($_POST["amenities"])));
    $openedAt = $DBconnection->real_escape_string($_POST["open"]);
    $closedAt = $DBconnection->real_escape_string($_POST["close"]);
    $maxCapacity = $DBconnection->real_escape_string($_POST["max_capacity"]);

    if (empty($mail) || empty($company) || empty($pwd) || empty($repeatPwd)) {
        header("Location: ../employee/employeeSignup.php?error=emptyfields");
        exit();
    } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../employee/employeeSignup.php?error=invalidemail&company=" . $company);
        exit();
    } else if ($pwd != $repeatPwd) {
        header("Location:../employee/employeeSignup.php?error=checkpassword&mail=" . $mail . "&company=" . $company);
        exit();
    } else {
        $sql = "SELECT * FROM gyms WHERE gym_name='$company'";
        $result = $DBconnection->query($sql);
        if ($result->num_rows > 0) {
            header("Location: ../employee/employeeSignup.php?error=gymtaken");
            exit();
        } else {
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            $query = "INSERT INTO gyms(gym_email, gym_password, gym_name, phone, address, town, classes, equipments, amenities, opened_at, closed_at, full_capacity) 
                VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
            $result = $DBconnection->query($query);

            $stmt = $DBconnection->stmt_init();
            if (!$stmt->prepare($query)) {
                header("Location: ../signup.php?error=notprepared");
                exit();
            } else {
                $encryptedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                $stmt->bind_param("ssssssssssss", $mail, $encryptedPwd, $company, $phone, $address, $town, $classes, $equipments, $amenities, $openedAt, $closedAt, $maxCapacity);
                $stmt->execute();
                $stmt->close();


                $employer_query = "SELECT * FROM gyms WHERE gym_email='$mail' AND gym_name='$company'";
                $resultEmployers = $DBconnection->query($employer_query);
                if ($resultEmployers->num_rows > 0) {
                    while ($row = $resultEmployers->fetch_assoc()) {
                        $gymid = $row["gym_id"];
                        $insertImg = "INSERT INTO employerimage(gym_id, eimage_status) VALUES('$gymid', 1)";
                        $insertResults = $DBconnection->query($insertImg);
                    }
                } else {
                    echo "an error occured";
                }

                header("Location: ../employee/employeeLogin.php?signup=success");
                exit();
            }
        }
    }
} else {
    header("Location: ../employee/employeeSignup.php");
    exit();
}
