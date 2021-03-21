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

<div class="container mt-4 d-flex justify-content-center">

<div class="card mb-4" style="width: 30rem">
    <div class="card-header">
        <h2 class="card-title text-uppercase text-center mb-4">
            <i class="fa fa-compass d-block mb-4"></i>
            where everything is managed
        </h2>
        <p class="card-subtittle text-muted">Login in your details as a verified and authenticated user</p>
    </div>
    <div class="card-body">
        <form action="../includes/employeeLogin.inc.php" method="post">
            <div class="form-group">
                <label for="mail">Username</label>
                <input type="text" name="mail" class="form-control" placeholder="Company Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="pwd" class="form-control" placeholder="Password">
            </div>
            <div class="d-flex justify-content-between">
                <label for="checkSign">
                    <input type="checkbox" name="signedIn">
                    Keep me signed in
                </label>
                <a href="#" class="form-text small">Forgot your password?</a>
            </div>
            <small id="terms" class="form-text text-muted mb-4">By logging in, you agree to Gym Navigator's Privacy Policy and Terms of Use.</small>
            <button type="submit" name="employee_login" class="btn btn-primary btn-block text-uppercase mb-4">sign in</button>
            <small id="terms" class="form-text text-muted mb-4">Not a member? <a href="employeeSignup.php">Register with us</a></small>
        </form>
    </div>
</div>
</div>

</body>

</html>