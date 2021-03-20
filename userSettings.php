<?php
require "includes/dbh.inc.php";
require "navbar.php";
?>

<div class="container mt-4">
    <h2 style="margin-bottom: 50px;">Settings</h2>
    <div class="d-flex justify-content-between">
        <ul class='list-group' style='width: 18rem;'>
            <li class='list-group-item'><a href="userSettings.php"><i class="fa fa-share-alt"></i> Profile Visiblility</a></li>
            <li class='list-group-item'><a href="accountSettings.php"><i class="fa fa-user"></i> Account Details</a></li>
        </ul>
        <div class="container border-left ml-4">
            <h2 class="mb-4">Profile Visibility</h2>
            <p>Your Gym Navigator profile represents you on reviews and comments as well as across the Gym Navigator family of services.</p>
            <form action="includes/upload.inc.php" method="post" enctype="multipart/form-data">
                <div class="d-flex align-items-center align-content-center">
                    <div class="user-profile">
                        <?php
                        $QUERY_allUsers = "SELECT * FROM users";
                        $RESULT_allUsers = $DBconnection->query($QUERY_allUsers);
                        if ($RESULT_allUsers->num_rows > 0) {
                            while ($row = $RESULT_allUsers->fetch_assoc()) {
                                if (isset($_SESSION["userID"])) {
                                    if ($_SESSION["userID"] == $row["user_id"]) {
                                        $userid = $row["user_id"];
                                        $QUERY_image = "SELECT * FROM profileimg WHERE user_id='$userid'";
                                        $RESULT_image = $DBconnection->query($QUERY_image);
                                        while ($row_image = $RESULT_image->fetch_assoc()) {
                                            if ($row_image["img_status"] == 0) {
                                                echo "<img src='uploads/profile" . $userid . ".jpg' class='p-4' style='width: 200px; height: 200px;'>";
                                            } else {
                                                echo "<img src='uploads/default.webp' class='p-4' style='width: 200px; height: 200px;'>";
                                            }
                                        }
                                        echo "</div>
                                            <div class='form-group'>
                                                <p>Profile Display</p>
                                                <p class='text-muted'>" . ucwords($row['user_name']) . "</p>
                                                <input type='file' class='form-control-file mb-4' id='exampleInputFile' aria-describedby='fileHelp' name='file'>
                                                <button type='submit' class='btn btn-outline-primary' name='submit_upload'>Edit</button>
                                            </div>";
                                    }
                                }
                            }
                        } else {
                            echo "error occured";
                        }
                        ?>

                    </div>

            </form>
            <hr>
            <p>Product Review Visibility</p>
            <p>Choose how you will appear on any Nike product reviews you complete.</p>
            <form>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="private" id="privateid" value="profilestatus">
                        Private: Profile visible to only you
                    </label> <br><br>
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="social" id="privateid" value="profilestatus" checked="">
                        Social: Profile visible to friends
                    </label> <br><br>
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="public" id="privateid" value="profilestatus">
                        Public: Everyone can view profile
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>











<!-- <div class="container mt-4">
    <h2 class='mb-4'>Settings</h2>
    <div class="card">
        <div class="container">


            
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
                    <input type="text" name="fitnessGoal" id="fitnessGoal" class="form-control">
                   
                </div>

                <div class="form-group mb-4">
                    <label for="fitnessActivities">Select your fitness activities. Press command or control when clicking to select multiple items</label>
                    <select multiple="multiple_activities" class="form-control" id="fitnessActivities" name="fitnessActivities[]">
                        <option>Cardio</option>
                        <option>Jogging</option>
                        <option>Riding bike</option>
                        <option>Dancing</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="gymLikables">Select your favorable Gym features</label>
                    <select multiple="multiple_likables" class="form-control" id="gymLikables" name="gymLikables[]">
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
</div> -->

<script src="js/app.js"></script>

<?php
require "footer.php";
?>