<?php
include "dbh.inc.php";


function setResource($DBconnection) {
    if(isset($_POST['resource_submit'])) {
        // echo "<p class='alert-success'>Button clicked</p>";

        $schedule_name = $DBconnection->real_escape_string($_POST['schedule_name']);
        $checkWeek = $DBconnection->real_escape_string(base64_encode(serialize($_POST['checkWeek'])));
        $schedule_from = $DBconnection->real_escape_string($_POST['schedule_from']);
        $schedule_to = $DBconnection->real_escape_string($_POST['schedule_to']);
        $date = $DBconnection->real_escape_string($_POST['date']);
        $appointer = $DBconnection->real_escape_string($_POST['appointer']);

       $sql = "SELECT * FROM gyms";
       $result = $DBconnection->query($sql);
       while($row = $result->fetch_assoc()) {
           $gymSession = $_SESSION['gymID'];
           if(isset($gymSession)) {
               if($gymSession == $row['gym_id']) {
                   $gymid = $row['gym_id'];
                    $query = "SELECT DISTINCT gym_id FROM resource_schedule WHERE gym_id='$gymSession'";
                    $sequel = $DBconnection->query($query);
                    if($record = $sequel->fetch_assoc()) {
                        
                        $insert = "INSERT INTO resource_schedule(gym_id, resource_name, resource_workdays, opening_hrs, closing_hrs, start_appointment, appointer) 
                            VALUES('$gymSession', '$schedule_name', '$checkWeek', '$schedule_from', '$schedule_to', '$date', '$appointer')";
                        $insertResult = $DBconnection->query($insert);

                        echo "<p class='alert-success'>Reserved Created!</p>";

                        exit();
                    }
               }
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

function reserveCapacity($DBconnection)
{
    if (isset($_POST['submit_capacity'])) {
        if (isset($_GET['id'])) {
            $name = $DBconnection->real_escape_string($_POST['uid']);
            $date = $DBconnection->real_escape_string($_POST['date']);

            // TODO: 
            // A query that selects all employers then grab the employer id and store in a variable
            // a query that inserts the values to capacity members including the employerid
            // the same logic should be done in resource_schedule
            // what about capacity_id, how will we get it

            $sql = "SELECT * FROM employees INNER JOIN capacity_schedule ON employees.employer_id = capacity_schedule.capacity_id";
            $result = $DBconnection->query($sql) or die($DBconnection->error);
            if ($result->num_rows > 0) {
                while ($record = $result->fetch_assoc()) {
                    $usersql = "SELECT * FROM users";
                    $sequel = $DBconnection->query($usersql);
                    while ($row = $sequel->fetch_assoc()) {
                        if (isset($_SESSION['userID'])) {
                            if ($_SESSION['userID'] == $row['user_id']) {
                                $employerid = $record['employer_id'];
                                $capacityid = $record['capacity_id'];
                                $query = "INSERT INTO capacity_members(employer_id, capacity_id, member_name, date) 
                                    VALUES('$employerid', '$capacityid', '$name', '$date')";
                                $DBconnection->query($query);

                                echo "successfully reserved";
                            } else {
                                // echo "not logged in as user #" . $_SESSION['userID'];
                            }
                        } else {
                            echo "not logged in at all";
                        }
                    }
                }
            }
        }
    }
}

function reserveResource($DBconnection)
{
    if (isset($_POST['resource_reserve'])) {

        if (isset($_GET['id'])) {
            $name = $DBconnection->real_escape_string($_POST['name']);
            $phone = $DBconnection->real_escape_string($_POST['number']);

            if (empty($name) || empty($phone)) {
                header("Location: ../viewGym.php?error=emptyfields");
                exit();
            } else {
                // $query = "SELECT * FROM gyms";
                // FIXME: the form is not being submitted to the database
                // FIXME: need to come up with a working query
                $query = "SELECT * FROM gyms 
                    INNER JOIN resource_schedule ON gyms.resource_id = resource_schedule.resource_id";
                $sequel = $DBconnection->query($query);
                if ($sequel->num_rows > 0) {
                    while ($row = $sequel->fetch_assoc()) {
                        var_dump($row['gym_id']);
                        if ($_GET['id'] == $row['gym_id']) {
                            $gotID = $_GET['id'];
                            $resourceid = $row['resource_id'];
                            echo $resourceid;
                            $sql = "INSERT INTO resource_members(gym_id, resource_id, booked_members, phone) VALUES('$gotID', '$resourceid', '$name', '$phone')";
                            $result = $DBconnection->query($sql);
                            var_export($result);

                            echo "success";
                        } else {
                            echo "can't figure it out";
                        }
                    }
                } else {
                    echo "no sessions found!";
                }
            }
        }
    }
}
