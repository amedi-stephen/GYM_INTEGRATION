<?php

include "dbh.inc.php";

function setResource($DBconnection)
{
    // if only the submit button has been clicked, then the form to be submitted using isset
    // get the posted values using $_POST and store them in variables
    // only do an empty validation
    // otherwise, query the insert statement
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
            // how do we insert the foreign column employer_id here
            $sql = "SELECT * FROM employees";
            $result = $DBconnection->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if (isset($_SESSION['employerID'])) {
                        if (isset($_SESSION['employerID']) == $row['employer_id']) {
                            $employerNo = $row['employer_id'];
                            var_export($employerNo);
                            
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
