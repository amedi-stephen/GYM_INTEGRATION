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
            <form action="" method="post">
                <div class="form-group">
                    <label for="uname">Username</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="uname">Email</label>
                    <input type="email" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="uname">Password</label>
                    <input type="password" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="uname">Repeat Password</label>
                    <input type="password" name="" id="" class="form-control">
                </div>
                <button class="btn btn-primary">Sign Up <i class="fa fa-arrow-right"></i></button>
            </form>
        </div>
    </div>
</div>

<script>
    console.log("Hello World");
</script>

<?php 
    require "footer.php";
?>