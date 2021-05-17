<?php
require "navbar.php";
?>
<body class="withBG">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Login</li>
        </ol>
        
    </div>


    <div class="container d-flex justify-content-center">

        <div class="card mb-4" style="width: 30rem">
            <div class="card-header">
                <h2 class="card-title text-uppercase text-center mb-4">
                    <i class="fa fa-compass d-block mb-4"></i>
                    your account for everything
                </h2>
                <p class="card-subtittle text-muted">Login in your details as a verified and authenticated user</p>
            </div>
            <div class="card-body">
                <form action="includes/login.inc.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="uid" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="uname">Password</label>
                        <input type="password" name="password" id="pwd" class="form-control" placeholder="Password">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="checkSign">
                            <input type="checkbox" name="signedIn">
                            Keep me signed in
                        </label>
                        <a href="#" class="form-text small">Forgot your password?</a>
                    </div>
                    <small id="terms" class="form-text text-muted mb-4">By logging in, you agree to Gym Navigator's Privacy Policy and Terms of Use.</small>
                    <button type="submit" name="submitLogin" class="btn btn-primary btn-block text-uppercase mb-4">sign in</button>
                    <small id="terms" class="form-text text-muted mb-4">Not a member? <a href="signup.php">Join us</a></small>
                </form>
            </div>
        </div>
    </div>
</body>