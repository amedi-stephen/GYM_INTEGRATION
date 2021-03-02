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
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto"></ul>
                <a href="employeeLogin.php" class="nav-link btn btn-secondary my-2 my-lg-0">Log in</a>
            </div>
        </nav>
    </div>
    <div class="container d-flex align-items-center justify-content-center" style="height: 95vh;">
        <form action="" method="post" style="width: 60%;">
            <h4 class="display-4">Login with us</h4>
            <div class="form-group">
                <input type="text" name="" id="" class="form-control form-control-lg" placeholder="Email">
            </div>

            <div class="form-group">
                <input type="password" name="" id="" class="form-control form-control-lg" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary btn-block">Log In</button>
            <p class="text-muted">Don't have an account? <a href="#">Sign Up</a></p>
        </form>
    </div>

</body>

</html>