<?php 
    require "navbar.php";
?>

<div class="container mt-4">

    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Sign Up</h2>
            <h4 class="card-subtittle text-muted">Sign Up</h4>
        </div>
        <div class="card-body">
            <form action="includes/signup.inc.php" method="post" id="formSignup">
                <!-- message validation should occur here -->
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <input type="checkbox" id="togglePassword"> Show Password
                    <small id="emailHelp" class="form-text text-muted"> Password must be at least 8 characters in length</small>
                    <small id="emailHelp" class="form-text text-muted"> Password must be include at least one upper case letter</small>
                    <small id="emailHelp" class="form-text text-muted"> Password must be include at least one number</small>
                    <small id="emailHelp" class="form-text text-muted"> Password must be include at least one special character</small>
                </div>
                <div class="form-group">
                    <label for="confirm_pwd">Repeat Password</label>
                    <input type="password" name="confirm_pwd" id="confirmPwd" class="form-control">
                </div>
                <button class="btn btn-primary" name="submitSignup" id="btnSignup">Sign Up <i class="fa fa-arrow-right"></i></button>
            </form>
        </div>
    </div>
</div>

<?php 
    require "footer.php";
?>