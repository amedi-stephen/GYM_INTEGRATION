<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css" />
    <title>Employee</title>
</head>

<body>

    <?php
        require "navigation.php";
    ?>

    <div class="container d-flex align-items-center justify-content-center" style="height: 95vh;">
        <form action="../includes/employeeLogin.inc.php" method="post" style="width: 60%;">
            <h4 class="display-4">Login with us</h4>
            <div class="form-group">
                <input type="text" name="mail" class="form-control form-control-lg" placeholder="Email">
            </div>

            <div class="form-group">
                <input type="password" name="pwd" class="form-control form-control-lg" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary btn-block" name="employee_login">Log In</button>
            <p class="text-muted">Don't have an account? <a href="employeeSignup.php">Sign Up</a></p>
        </form>
    </div>

</body>

</html>