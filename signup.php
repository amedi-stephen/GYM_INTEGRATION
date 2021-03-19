<?php 
    require "navbar.php";
?>

<div class="container mt-4 d-flex justify-content-center align-items-center">

    <div class="card mb-4" style="width: 30rem">
        <div class="card-header">
            <h2 class="card-title text-uppercase text-center mb-4">
                <i class="fa fa-compass d-block mb-4"></i>
                become a member
            </h2>
            <p class="text-muted">Create your Gym Navigator profile and get first access to the very best of our services, inspiration and community.</p>
        </div>
        <div class="card-body">
            <form action="includes/signup.inc.php" method="post" id="formSignup">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control mb-2" placeholder="Password">
                    <input type="checkbox" id="togglePassword"> <span id="textPwd">Show password</span>
                    <small id="emailHelp" class="form-text text-muted"> Password must be at least 8 characters in length</small>
                    <small id="emailHelp" class="form-text text-muted"> Password must be include at least one upper case letter</small>
                    <small id="emailHelp" class="form-text text-muted"> Password must be include at least one number</small>
                    <small id="emailHelp" class="form-text text-muted"> Password must be include at least one special character</small>
                </div>
                <div class="form-group">
                    <label for="confirm_pwd">Repeat Password</label>
                    <input type="password" name="confirm_pwd" id="confirmPwd" class="form-control" placeholder="Repeat Password">
                </div>
                <small id="terms" class="form-text text-muted mb-4">By creating an account, you agree to Gym Navigator's Privacy Policy and Terms of Use.</small>
                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-4" name="submitSignup" id="btnSignup">join us now</button>
                <small id="terms" class="form-text text-muted mb-4">Already a member? <a href="login.php">Sign in</a></small>
            </form>
        </div>
    </div>
</div>

<script src="js/app.js"></script>