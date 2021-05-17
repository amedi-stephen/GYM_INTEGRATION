<?php
session_start();
include "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>GYM NAVIGATOR</title>
</head>

<body>
    <?php
    $QUERY_selectUser = "SELECT * FROM users";
    $RESULT_selectUser = $DBconnection->query($QUERY_selectUser);
    if ($RESULT_selectUser->num_rows > 0) {
        if (isset($_SESSION["userID"])) {
            while ($row = $RESULT_selectUser->fetch_assoc()) {
                if ($_SESSION['userID'] == $row['user_id']) {
                    $userid = $row["user_id"];
                    $QUERY_image = "SELECT * FROM profileimg WHERE user_id='$userid'";
                    $RESULT_image = $DBconnection->query($QUERY_image);
                    while ($row_image = $RESULT_image->fetch_assoc()) {
                        echo "
                            <nav class='navbar navbar-expand-lg navbar-dark bg-primary'>
                            <div class='container'>";

                        if ($row_image["img_status"] == 0) {
                            echo "<img src='uploads/profile" . $userid . ".jpg' style='width: 50px; height: 50px; border-radius: 50%;'>";
                        } else {
                            echo "<img src='uploads/default.webp' style='width: 50px; height: 50px; border-radius: 50%;'>";
                        }
                        echo "
                            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarColor01'
                                aria-controls='navbarColor01' aria-expanded='false' aria-label='Toggle navigation'>
                                <span class='navbar-toggler-icon'></span>
                            </button>
                
                            <div class='collapse navbar-collapse' id='navbarColor01'>
                                <ul class='navbar-nav mr-auto'>
                                    <li class='nav-item'>
                                        <a class='nav-link'>Hi, " . ucwords($row['user_name']) . "</a>
                                    </li>
                                    <li class='nav-item dropdown'>
                                        <a class='nav-link dropdown-toggle' data-toggle='dropdown' href='javascript:void(0)' role='button' aria-haspopup='true' aria-expanded='false'>MENU</a>
                                        <div class='dropdown-menu'>
                                        <a class='dropdown-item' href='dashboard.php'><i class='fa fa-clipboard'></i> Dashboard</a>
                                        <a class='dropdown-item' href='profile.php'><i class='far fa-user'></i> View Profile</a>
                                        <a class='dropdown-item' href='userSettings.php'><i class='fa fa-cog'></i> Settings</a>
                                        <div class='dropdown-divider'></div>
                                        <form class='dropdown-item' action='includes/logout.inc.php' method='post'>
                                            <i class='fa fa-sign-out-alt'></i> Log Out
                                        </form>
                                        </div>
                                    </li>
                                </ul>
                                <form class='form-inline my-2 my-lg-0' action='includes/logout.inc.php'>
                                    <button class='btn btn-outline-warning' type='submit' name='submit_logout'>Log out</button>
                                </form>
                            </div>
                        </nav>
                        </div>";
                    }
                }
            }
        } else {
            echo "
                <nav class='navbar navbar-expand-lg navbar-dark bg-primary'>
                <div class='container'>
                    <a class='navbar-brand brand' href='index.php'><i class='fa fa-compass'></i> Gym Session Booking System</a>
        
                    <ul class='navbar-nav my-2 my-lg-0'>
                        <li class='nav-item'>
                            <a class='nav-link btn btn-link' href='login.php'>Log In</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link btn btn-link' href='employee/employeeLogin.php'>Gym Center</a>
                        </li>
                    </ul>
                </div>
            </nav>
                ";
        }
    }
    ?>