<?php 
    require "navbar.php";
?>

<div class="container mt-4">

    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Log In</h2>
            <h4 class="card-subtittle text-muted">Login in your details as a verified and authenticated user</h4>
        </div>
        <div class="card-body">
            <form action="includes/login.inc.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="uname">Password</label>
                    <input type="password" name="password" id="" class="form-control">
                </div>
                <button type="submit" name="submitLogin" class="btn btn-primary">Log In <i class="fa fa-sign-in-alt"></i></button>
            </form>
        </div>
    </div>
</div>