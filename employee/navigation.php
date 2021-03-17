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
    <link rel="stylesheet" href="../fontawesome/css/all.css">
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
                    $employerid = $row['employer_id'];
                    $imageQuery = "SELECT * FROM employerimage WHERE employer_id='$employerid'";
                    $imageResult = $DBconnection->query($imageQuery);
                    while ($rowImage = $imageResult->fetch_assoc()) {
                        echo '
                        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                            <div class="container">';
                        if ($rowImage["eimage_status"] == 0) {
                            echo "<img src='../uploads/employer/profile" . $employerid . ".jpg' style='width: 50px; height: 50px; border-radius: 50%;'>";
                        } else {
                            echo "<img src='../uploads/default.webp' style='width: 50px; height: 50px; border-radius: 50%;'>";
                        }
                        echo '
                            <a class="navbar-brand" href="#">' . ucwords($row['gym_name']) . '</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarColor01">
                                <ul class="navbar-nav mr-auto">
                                    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">MENU</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="employeeDashboard.php">Dashboard</a>
                                            <a class="dropdown-item" href="employeeSettings.php">Settings</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Log Out</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="employeeNotifications.php" class="nav-link">Notifications<span class="badge badge-success badge-pill nav-pills">3</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="employeeGallery.php" class="nav-link">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="employeeGallery.php" class="nav-link">Your Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="employeeSchedule.php" class="nav-link">Schedules</a>
                                    </li>
                                    
                                </ul>
                                <form class="form-inline my-2 my-lg-0" action="../includes/employeeLogout.inc.php" method="post">

                                    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Log Out</button>
                                </form>
                            </div>
                        </div>

                    </nav>';
                    }
                }
            }
        }  else {
            echo '
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="container">
                        <a class="navbar-brand" href="index.php"><i class="fa fa-location-arrow"></i> Gym Navigator</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarColor01">
                            <ul class="navbar-nav mr-auto"></ul>
                            <a href="employeeLogin.php" class="nav-link btn btn-secondary my-2 my-lg-0">Log in</a>
                        </div>
                    </div>
                </nav>';
        } 
    }
    ?>