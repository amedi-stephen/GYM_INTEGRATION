<?php

include "dbh.inc.php";

if (isset($_POST['submit_gym'])) {
    $company = $DBconnection->real_escape_string($_POST["gym_name"]);
    $phone = $DBconnection->real_escape_string($_POST["phone"]);
    $address = $DBconnection->real_escape_string($_POST["address"]);
    $town = $DBconnection->real_escape_string($_POST["town_name"]);
    $classes = $DBconnection->real_escape_string(serialize($_POST["classes"]));
    $equipments = $DBconnection->real_escape_string(serialize($_POST["equipments"]));
    $amenities = $DBconnection->real_escape_string(serialize($_POST["amenities"]));
    $openedAt = $DBconnection->real_escape_string($_POST["open"]);
    $closedAt = $DBconnection->real_escape_string($_POST["close"]);
    $maxCapacity = $DBconnection->real_escape_string($_POST["max_capacity"]);

    if (empty($company) || empty($phone) || empty($address) || empty($town) || empty($classes) || empty($equipments) || empty($amenities) || empty($openedAt) || empty($closedAt) || empty($maxCapacity)) {
        header('Location: ../employee/employeeSettings.php?error=emptyfields');
        exit();
    } else {
        $query = "SELECT * FROM gyms WHERE gym_name='$company'";
        $result = $DBconnection->query($query);
        $resultRows = $result->num_rows;
        if ($resultRows > 0) {
            header('Location: ../employee/employeeSettings.php?error=gymnametaken');
            exit();
        } else {
            $insertsql = "INSERT INTO gyms(gym_name, phone, address, town, classes, equipments, amenities, opened_at, closed_at, full_capacity) 
                VALUES('$company', '$phone', '$address', '$town', '$classes', '$equipments', '$amenities', '$openedAt', '$closedAt', '$maxCapacity')";
            $resultInsert = $DBconnection->query($insertsql);

            header('Location: ../employee/employeeSettings.php?status=success');
            exit();
        }
    }
} else {
    header('Location: ../employee/employeeSettings.php');
    exit();
}
