<?php

include "dbh.inc.php";

function setResource($DBconnection)
{
    if (isset($_POST['resource_submit'])) {

        $scheduleName = $DBconnection->real_escape_string($_POST['schedule_name']);
        $checkWeek = $DBconnection->real_escape_string(serialize($_POST['checkWeek']));
        $scheduleFrom = $DBconnection->real_escape_string($_POST['schedule_from']);
        $scheduleTo = $DBconnection->real_escape_string($_POST['schedule_to']);
        $date = $DBconnection->real_escape_string($_POST['date']);

        if (empty($scheduleName) || empty($checkWeek) || empty($scheduleFrom) || empty($scheduleTo) || empty($date)) {
            header('Location: ../employee/resource.php?error=emptyfields');
            exit();
        } else {
            $sql = "SELECT * FROM employees";
            $result = $DBconnection->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if (isset($_SESSION['employerID'])) {
                        if (isset($_SESSION['employerID']) == $row['employer_id']) {
                            $employerNo = $row['employer_id'];

                            $query = "INSERT INTO resource_schedule (employer_id, resource_name, resource_workdays, opening_hrs, closing_hrs, start_appointment) 
                                VALUES ('$employerNo', '$scheduleName', '$checkWeek', '$scheduleFrom', '$scheduleTo', '$date')";
                            $insertResult = $DBconnection->query($query);
                            header('Location: ../employee/resource.php?status=success');
                            exit();
                        }
                    } else {
                        echo "Not set";
                    }
                }
            } else {
                echo "no result";
            }
        }
    }
}

function setCapacity($DBconnection)
{
    if (isset($_POST['submit_capacity'])) {
        $title = $_POST['title'];
        $capacitFrom = $_POST['capacity_from'];
        $capacityTo = $_POST['capacity_to'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $repeat = $_POST['repeat'];
        $capacity = $_POST['capacity'];

        if (empty($title) || empty($capacitFrom) || empty($capacityTo) || empty($price) || empty($description) || empty($repeat) || empty($capacity)) {
            header('Location: ../employee/capacity.php');
            exit();
        } else {
            $sql = "SELECT * FROM employees";
            $result = $DBconnection->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if (isset($_SESSION['employerID'])) {
                        if (isset($_SESSION['employerID']) == $row['employer_id']) {
                            $employerNo = $row['employer_id'];
                            $insertQuery = "INSERT INTO capacity_schedule(employer_id, title, from_date, to_date, price, description, repeat_date, max_pple)
                                VALUES('$employerNo', '$title', '$capacitFrom', '$capacityTo', '$price', '$description', '$repeat', '$capacity')";
                            $insertResult = $DBconnection->query($insertQuery);
                            header('Location: ../employee/resource.php?status=success');
                            exit();
                        }
                    }
                }
            }
        }
    }
}

function getCapacityEmployee($DBconnection)
{
    $sql = "SELECT * FROM employees 
        INNER JOIN capacity_schedule ON employees.employer_id = capacity_schedule.employer_id";
    $result = $DBconnection->query($sql);
    echo "<div class='container d-flex justify-content-around flex-wrap p-2 bg-dark mt-4 mb-4'>";
    while ($row = $result->fetch_assoc()) {
        if (isset($_SESSION['employerID'])) {
            if ($_SESSION['employerID'] == $row['employer_id']) {
                echo "
                    <div class='card mb-4' style='width: 18rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>" . $row['title'] . "</h5>
                            <h6 class='card-subtitle mb-2 text-muted'>ksh." . $row['price'] . "</h6>
                            <p class='card-text'>" . $row['description'] . "</p>
                            <a href='#' class='card-link'>View More</a>
                            <span class=' badge badge-pill badge-primary float-right'>1/" . $row['max_pple'] . "</span>
                        </div>
                    </div>";
            }
        }
    }
    echo "</div>";
}

function getResourceEmployee($DBconnection)
{
    $sql = "SELECT * FROM employees 
        JOIN resource_schedule ON employees.employer_id = resource_schedule.employer_id
        JOIN users ON users.user_id = resource_schedule.user_id";
    $result = $DBconnection->query($sql);
    echo "<div class='container d-flex justify-content-around flex-wrap p-2 bg-light mt-4 mb-4'>";
    while ($row = $result->fetch_assoc()) {
        var_export($row);
        if (isset($_SESSION['employerID'])) {
            if ($_SESSION['employerID'] == $row['employer_id']) {
                echo "
                    <div class='card mb-4' style='width: 18rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>" . $row['resource_name'] . "</h5>
                            <h6 class='card-subtitle mb-2 text-muted'>" . $row['start_appointment'] . "</h6>
                            <p class='card-text'>" . $row['opening_hrs'] . " - " . $row['closing_hrs'] . "</p>";
                $daysArr = unserialize($row['resource_workdays']);
                foreach ($daysArr as $key => $day) {
                    echo " <ul class='list-group'>
                                <li class='list-group-item'>" . $day . "</li> 
                            </ul>";
                }
                echo "
                        </div>
                    </div>";
            }
        }
    }
}

function getResourceUser($DBconnection)
{
    if (isset($_GET['id'])) {
        $sql = "SELECT * FROM users";
        $result = $DBconnection->query($sql);
        if ($result) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    var_dump($row);
                }
            } else {
                echo "No record found";
            }
            $result->free_result();
            $DBconnection->close();
        }
    }
}
