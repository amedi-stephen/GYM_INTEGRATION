<?php
include "dbh.inc.php";

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
    echo "<div class='container d-flex justify-content-between flex-wrap p-2 bg-light mt-4 mb-4'>";
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $gymSession = $_SESSION['gymID'];
            if(isset($_SESSION['gymID'])) {
                if($_SESSION['gymID'] == $row['gym_id']) {
                    $query = "SELECT * FROM capacity_schedule WHERE gym_id='$gymSession'";
                    $sequel = $DBconnection->query($query);
                    if($sequel->num_rows > 0) {
                        while($record = $sequel->fetch_assoc()) {
                            echo "<div class='card mb-4' style='width: 30rem;'>
                                <div class='card-body'>
                                    <h5 class='card-title'>".$record['title']."</h5>
                                    <h6>".$record['from_date']." - ".$record['to_date']."</h6>
                                    <small class='text-primary'>".$record['price']."</small>
                                    <hr>
                                    <p>".$record['description']."</p>
                                    <div class='card-footer'>
                                        <p class='text-muted d-inline'>".$record['appointer']."</p>
                                        ";

                                        echo "
                                        <a href='viewSession.php?sessID=".$record['capacity_id']."' class='btn btn-sm btn-primary float-right'>View</a>
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

function reserveCapacity($DBconnection)
{
    if (isset($_POST['submit_capacity'])) {
        if(isset($_GET['sessID'])) {
            $sql = "SELECT * FROM users";
            $result = $DBconnection->query($sql) or die("Error message: ".$DBconnection->error);
            while($row = $result->fetch_assoc()) {
                $userid = $row['user_id'];
                if(isset($_SESSION['userID'])) {
                    if($_SESSION['userID'] == $userid) {
                        $query = "SELECT * FROM capacity_schedule INNER JOIN gyms ON capacity_schedule.gym_id = gyms.gym_id";
                        $sequel = $DBconnection->query($query) or die("Error message: ".$DBconnection->error);
                        if($record = $sequel->fetch_assoc()) {
                                $gymid = $record['gym_id'];
                                $capacityid = $record['capacity_id'];
                                $insert = "INSERT INTO capacity_members(gym_id, capacity_id, user_id) VALUES('$gymid', '$capacityid', '$userid')";
                                $outcome = $DBconnection->query($insert);
                        }
                    }
                }
            }
        } else {
            echo "not got";
        }
    }
}

function reserveResource($DBconnection)
{
    if(isset($_POST['resource_reserve'])) {
        echo "<p class='text-success'>Form submitted</p>";
    }
}

function reserveMembership($DBconnection) {
    if(isset($_POST['submit_registration_now'])) {
        $uid = $DBconnection->real_escape_string($_POST['uid']);
        $uName = $DBconnection->real_escape_string($_POST['uname']);
        $email = $DBconnection->real_escape_string($_POST['email']);
        $payPattern = $DBconnection->real_escape_string($_POST['pay_pattern']);

        if(empty($payPattern)) {
            echo "Fill in pay pattern";
        }
    }
}
