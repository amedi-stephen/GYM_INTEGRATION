<?php 
    require "navbar.php";
?>

<div class="container mt-4">

    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Create Your Profile</h2>
            <h4 class="card-subtittle text-muted">Hello John, you can now edit your profile</h4>
        </div>
        <div class="card-body">
            <div class="form-group mb-4">
                <fieldset>
                    <label class="control-label" for="readOnlyInput">Username</label>
                    <input class="form-control" id="readOnlyInput" type="text" placeholder="John" readonly="">
                </fieldset>
            </div>
            <form action="includes/signup.inc.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <!-- <img src="images/blank-profile-picture-973460_1280.webp" alt="..." class="img-thumbnail"> -->
                <img src="images/blank-profile-picture-973460_1280.webp" alt="..." style="width: 200px; height: 200px;">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
            </div>
            <div class="form-group mb-4 custom-control custom-radio">
                <label for="">Gender</label> <br>
                Male: <input type="radio" id="customRadio2" name="customRadio">
                Female: <input type="radio" name="" id="">
            </div>
            <div class="form-group mb-4">
                <label for="exampleTextarea">Tell us a little about yourself</label>
                <textarea class="form-control" id="exampleTextarea" rows="3" spellcheck="false"></textarea>
            </div>

                <div class="form-group mb-4">
                    <label for="email">What is your main goal in fitness?</label>
                    <input type="email" name="email" id="email" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group mb-4">
                    <label for="exampleSelect2">Select your fitness activities. Press command or control when clicking to select multiple items</label>
                    <select multiple="" class="form-control" id="exampleSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleSelect2">Select your favorable Gym features</label>
                    <select multiple="" class="form-control" id="exampleSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <button class="btn btn-primary" name="submitSignup" id="btnSignup">Create <i class="fa fa-user"></i></button>
            </form>
        </div>
    </div>
</div>

<?php 
    require "footer.php";
?>