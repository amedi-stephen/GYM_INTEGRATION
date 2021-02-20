<?php
    session_start();
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
    <title>GYM NAVIGATOR</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    <?php
        
        if(isset($_SESSION["userID"])) {
            echo "
                <img src='images/blank-profile-picture-973460_1280.webp' style='width: 50px; height: 50px; border-radius: 50%;'>
                <span class='text-info'>Steve</span>
                <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarColor01' aria-controls='navbarColor01' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse' id='navbrColor01'>
                    <ul class='navbar-nav mr-auto'>
                        <li class='nav-item active'></li>
                    </ul>
                    <div class='float-right'>
                        <ul class='navbar-nav mr-auto'>
                        <li class='nav-item'>
                        <form action='includes/logout.inc.php' action='post'>
                            <button class='btn btn-outline-warning' type='submit' name='submit_logout'>Log out</button>
                        </form>
                    </li>
            ";
        } else {
            echo "
                <a class='navbar-brand' href='index.php'><i class='fa fa-location-arrow'></i> Gym Navigator</a>
                <li class='nav-item'>
                        <a class='nav-link btn btn-link' href='login.php'>Log In</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link btn btn-link' href='signup.php'>Sign Up</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link btn btn-link' href='employeeSignup.php'>Employee Benefit</a>
                    </li>
            ";
        }
?>
                </ul>
            </div>
        </div>       
    </div>
</nav>