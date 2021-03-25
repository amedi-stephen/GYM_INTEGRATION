<?php
include "dbh.inc.php";

function setResource($DBconnection)
{
    if (isset($_POST['resource_submit'])) {

        $schedule_name = $DBconnection->real_escape_string($_POST['schedule_name']);
        $checkWeek = $DBconnection->real_escape_string(base64_encode(serialize($_POST['checkWeek'])));
        $schedule_from = $DBconnection->real_escape_string($_POST['schedule_from']);
        $schedule_to = $DBconnection->real_escape_string($_POST['schedule_to']);
        $date = $DBconnection->real_escape_string($_POST['date']);
        $appointer = $DBconnection->real_escape_string($_POST['appointer']);

        $sql = "SELECT * FROM gyms";
        $result = $DBconnection->query($sql);
        while ($row = $result->fetch_assoc()) {
            $gymSession = $_SESSION['gymID'];
            if (isset($gymSession)) {
                if ($gymSession == $row['gym_id']) {
                    $gymid = $row['gym_id'];
                    $query = "SELECT DISTINCT gym_id FROM resource_schedule WHERE gym_id='$gymSession'";
                    $sequel = $DBconnection->query($query);
                    if ($record = $sequel->fetch_assoc()) {

                        $insert = "INSERT INTO resource_schedule(gym_id, resource_name, resource_workdays, opening_hrs, closing_hrs, start_appointment, appointer) 
                            VALUES('$gymSession', '$schedule_name', '$checkWeek', '$schedule_from', '$schedule_to', '$date', '$appointer')";
                        $DBconnection->query($insert);

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
        $title = $DBconnection->real_escape_string($_POST['title']);
        $capacityFrom = $DBconnection->real_escape_string($_POST['capacity_from']);
        $capacityTo = $DBconnection->real_escape_string($_POST['capacity_to']);
        $price = $DBconnection->real_escape_string($_POST['price']);
        $description = $DBconnection->real_escape_string($_POST['description']);
        $repeat = $DBconnection->real_escape_string($_POST['repeat']);
        $capacity = $DBconnection->real_escape_string($_POST['capacity']);
        $instructor = $DBconnection->real_escape_string($_POST['instructor']);

        $sql = "SELECT * FROM gyms";
        $result = $DBconnection->query($sql);
        while ($row = $result->fetch_assoc()) {
            $gymSession = $_SESSION['gymID'];
            if (isset($gymSession)) {
                if ($gymSession == $row['gym_id']) {
                    $insert = "INSERT INTO capacity_schedule(gym_id, title, from_date, to_date, price, description, repeat_date, max_pple, appointer) 
                        VALUES('$gymSession', '$title', '$capacityFrom', '$capacityTo', '$price', '$description', '$repeat', '$capacity', '$instructor')";
                    $DBconnection->query($insert);
                    
                    header("Location: ../employee/viewSchedule.php");
                    exit();
                }
            }
        }
    }
}

function getCapacityEmployee($DBconnection)
{
    $sql = "SELECT * FROM gyms";
    $result = $DBconnection->query($sql) or die("Error occured");
    echo "<div class='container d-flex justify-content-around flex-wrap p-2 bg-light mt-4 mb-4'>";
    if($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
            $gymSession = $_SESSION['gymID'];
            if(isset($_SESSION['gymID'])) {
                if($_SESSION['gymID'] == $row['gym_id']) {
                    $query = "SELECT * FROM capacity_schedule WHERE gym_id = '$gymSession'";
                    $sequel = $DBconnection->query($query);
                    if($sequel->num_rows > 0) {
                        while($record = $sequel->fetch_assoc()) {
                            var_dump($record);
                            echo "<div class='card'>
                                <div class='card-body'>
                                    <h5 class='card-title'>".$record['title']."</h5>
                                    <h6>".$record['from_date']." - ".$record['to_date']."</h6>
                                    <small class='text-primary'>".$record['price']."</small>
                                    <hr>
                                    <p>".$record['description']."</p>
                                    <div class='card-footer'>
                                        <p class='text-muted d-inline'>".$record['appointer']."</p>
                                        <p class='badge-primary float-right'>1/200</p>
                                    </div>
                                </div>
                            </div>";
                        }
                    } else {
                        echo "No records from capacity_schedule";
                    }
                }
            }
        }
    } else {
        echo "No records";
    }
    echo "</div>";
}

function getResourceEmployee($DBconnection)
{
    $sql = "SELECT * FROM gyms";
    $result = $DBconnection->query($sql);
    echo "<div class='container d-flex justify-content-around flex-wrap p-2 bg-light mt-4 mb-4'>";
    while ($row = $result->fetch_assoc()) {
        if (isset($_SESSION['gymID'])) {
            if ($_SESSION['gymID'] == $row['gym_id']) {
                $gymSession = $_SESSION['gymID'];
                $query = "SELECT * FROM resource_schedule WHERE gym_id='$gymSession'";
                $sequel = $DBconnection->query($query);
                while ($record = $sequel->fetch_assoc()) {
                    echo "
                    <div class='card mb-4' style='width: 18rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>" . $record['resource_name'] . "</h5>
                            <h6 class='card-subtitle mb-2 text-muted'>" . $record['start_appointment'] . "</h6>
                            <p class='card-text'>" . $record['opening_hrs'] . " - " . $record['closing_hrs'] . "</p>";
                    $daysArr = unserialize(base64_decode($record['resource_workdays']));
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
