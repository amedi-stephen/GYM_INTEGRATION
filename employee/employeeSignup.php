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

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <a class='navbar-brand' href='index.php'><i class='fa fa-location-arrow'></i> Gym Navigator</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto"></ul>
                <a href="employeeLogin.php" class="nav-link btn btn-secondary my-2 my-lg-0">Log in</a>
            </div>
            
    </nav>


    <div class="container">
        <h1 class="display-4 text-uppercase text-center">Welcome to employer side</h1>
        <h4 class="text-capitalize text-center">Lorem ipsum dolor sit ame.</h4>
        <div class="d-flex justify-content-center mt-4">
            <form action="../includes/employeeSignup.inc.php" method="post" style="width: 60%;">
                <div class="form-group">
                    <input type="text" name="mail" id="" class="form-control form-control-lg" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" name="company" id="" class="form-control form-control-lg" placeholder="Name of your gym">
                </div>
                <div class="form-group">
                    <input type="password" name="pwd" id="" class="form-control form-control-lg" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" name="re-pwd" id="" class="form-control form-control-lg" placeholder="Repeat password">
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="submit_signup">Sign Up</button>
                <p class="text-muted">Already signed up? <a href="employeeLogin.php">Log in</a></p>
            </form>
        </div>

    </div>
</body>

</html>