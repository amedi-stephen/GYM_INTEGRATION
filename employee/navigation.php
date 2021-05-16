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
    $query = "SELECT * FROM gyms";
    $result = $DBconnection->query($query);
    if ($result->num_rows > 0) {
        if (isset($_SESSION['gymID'])) {
            while ($row = $result->fetch_assoc()) {
                if ($_SESSION['gymID'] == $row['gym_id']) {
                    $gymid = $row['gym_id'];
                    $imageQuery = "SELECT * FROM employerimage WHERE gym_id='$gymid'";
                    $imageResult = $DBconnection->query($imageQuery);
                    while ($rowImage = $imageResult->fetch_assoc()) {
                        echo '
                        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                            <div class="container">';
                        if ($rowImage["eimage_status"] == 0) {
                            echo "<img src='../uploads/employer/profile" . $gymid . ".jpg' style='width: 50px; height: 50px; border-radius: 50%;' class='mr-2'>";
                        } else {
                            echo "<img src='../uploads/default.webp' style='width: 50px; height: 50px; border-radius: 50%;' class='mr-2'>";
                        }
                        echo '
                            <a class="navbar-brand">' . ucwords($row['gym_name']) . '</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarColor01">
                                <ul class="navbar-nav mr-auto">

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MENU</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="employeeProfile.php"><i class="fa fa-user mr-1"></i> Profile</a>
                                            <a class="dropdown-item" href="employeeSettings.php"><i class="fa fa-cog mr-1"></i>Settings</a>

                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="viewSchedule.php" class="nav-link">Schedules</a>
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
                    <a class="navbar-brand brand" href="../index.php"><i class="fa fa-compass"></i> Gym Session Booking System</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarColor01">
                            <ul class="navbar-nav mr-auto"></ul>
                            <a href="employeeLogin.php" class="nav-link btn btn-outline-secondary my-2 my-lg-0">Sign Up</a>
                        </div>
                    </div>
                </nav>';
        }
    }
    ?>
