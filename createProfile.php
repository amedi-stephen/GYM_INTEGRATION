<?php 
    require "includes/dbh.inc.php";
    require "navbar.php";
?>

<div class="container mt-4">

    <div class="card">
        <form action="includes/upload.inc.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <?php
                    $QUERY_allUsers = "SELECT * FROM users";
                    $RESULT_allUsers = $DBconnection->query($QUERY_allUsers);
                    if($RESULT_allUsers->num_rows > 0) {
                        while($row = $RESULT_allUsers->fetch_assoc()) {
                            if(isset($_SESSION["userID"])) {
                                if($_SESSION["userID"] == $row["user_id"]) {
                                    $userid = $row["user_id"];
                                    $QUERY_image = "SELECT * FROM profileimg WHERE user_id='$userid'";
                                    $RESULT_image = $DBconnection->query($QUERY_image);
                                    while($row_image = $RESULT_image->fetch_assoc()) {
                                        if($row_image["img_status"] == 0) {
                                            // echo "<img src='uploads/profile'".$userid."'jpg' style='width: 200px; height: 200px;'>";
                                            echo "<img src='uploads/profile".$userid.".jpg' style='width: 200px; height: 200px;'>";
                                        } else {
                                            echo "<img src='uploads/default.webp'  style='width: 200px; height: 200px;'>";
                                        }
                                    }
                                }
                            }
                        } 
                    } else {
                        echo "error occured";
                    }
                ?>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="file">
                <button type="submit" class="btn btn-primary" name="submit_upload">Upload</button>
            </div>
        </form>
            <form action="includes/createProfile.inc.php" method="post">
            <h4 class="text-primary badge-light p-2">Fill in the following details</h4>
            <div class="form-group mb-4 custom-control custom-radio">
                <label for="gender">Choose your gender</label> <br>
                Male: <input type="radio" id="chooseMale" name="gender" value="male">
                Female: <input type="radio" name="gender" id="chooseFemale" value="female">
            </div>
            <div class="form-group mb-4">
                <label for="userInfo">Tell us a little about yourself</label>
                <textarea class="form-control" id="userInfo" rows="3" spellcheck="false" name="userInfo"></textarea>
            </div>

                <div class="form-group mb-4">
                    <label for="fitnessGoal">What is your main goal in fitness?</label>
                    <input type="fitnessGoal" name="fitnessGoal" id="fitnessGoal" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group mb-4">
                    <label for="fitnessDuration">You want to achieve this goal in how many months</label>
                    <input type="number" name="fitnessDuration" id="fitnessDuration" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group mb-4">
                    <label for="fitnessActivities">Select your fitness activities. Press command or control when clicking to select multiple items</label>
                    <select multiple="" class="form-control" id="fitnessActivities" name="fitnessActivities">
                        <option>Cardio</option>
                        <option>Jogging</option>
                        <option>Riding bike</option>
                        <option>Dancing</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="gymLikables">Select your favorable Gym features</label>
                    <select multiple="" class="form-control" id="gymLikables" name="gymLikables">
                        <option>Boxing</option>
                        <option>Karate</option>
                        <option>Muai Tai</option>
                        <option>kick boxing</option>
                        <option>air conditioning</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="submitProfile" id="btnProfile">Create <i class="fa fa-user"></i></button>
            </form>
        </div>
    </div>
</div>

<script src="js/app.js"></script>