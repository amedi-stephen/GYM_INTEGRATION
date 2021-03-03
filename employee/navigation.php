<?php
session_start();
include "../includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Employee</title>
</head>

<body>
    <?php
    $query = "SELECT * FROM employees";
    $result = $DBconnection->query($query);
    if ($result->num_rows > 0) {
        if (isset($_SESSION['employerID'])) {
            while ($row = $result->fetch_assoc()) {
                if ($_SESSION['employerID'] == $row['employer_id']) {
                    // echo "#" . $row['employer_id'];
                    
                }
            }
        } else {
            echo "Not set";
        }
    }
    ?>