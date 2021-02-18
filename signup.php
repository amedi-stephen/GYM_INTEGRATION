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
            <form action="includes/signup.inc.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
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