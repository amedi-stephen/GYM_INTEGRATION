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
            <h2 class="mb-4">Account Details</h2>
            
            <form action="includes/createProfile.inc.php" method="post">
                <div class="form-group mb-4">
                    <label for="gender">Choose your gender</label> <br>
                    Male: <input type="radio" id="chooseMale" name="gender" value="male" class="mr-4">
                    Female: <input type="radio" name="gender" id="chooseFemale" value="female" class="mr-4">
                    Prefer not to say: <input type="radio" name="gender" id="chooseFemale" value="female">
                </div>
                <div class="form-group mb-4">
                    <label for="userInfo">Tell us a little about yourself</label>
                    <textarea class="form-control" id="userInfo" rows="3" spellcheck="false" name="userInfo" style="resize: none;"></textarea>
                </div>

                <div class="form-group mb-4">
                    <label for="fitnessGoal">What is your main goal in fitness?</label>
                    <select name="fitnessGoal" id="fitness-goal" class="form-control">
                        <option>Build Strength</option>
                        <option>Lose Weight</option>
                        <option>Increase Stamina</option>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label for="fitnessActivities">Select the fitness classes you like.</label>
                    <select multiple="multiple_activities" class="form-control" id="fitness-activities" name="fitnessActivities[]">
                        <option>CARDIO CLASSES</option>
                        <option>AB/CORE CLASSES</option>
                        <option>YOGA</option>
                        <option>PILATES</option>
                        <option>KICKBOXING CLASSES</option>
                        <option>BOXING</option>
                        <option>SPIN CLASSES</option>
                        <option>MARTIAL ARTS</option>
                        <option>STRENGTH TRAINING</option>
                        <option>STRETCHING / FLEXIBILITY CLASSES</option>
                        <option>BOOT CAMP</option>
                        <option>DANCE CLASSES</option>
                        <option>ZUMBA</option>
                        <option>WATER FITNESS</option>
                        <option>SPORTS PERFORMANCE</option>
                        <option>CROSSFIT</option>
                        <option>KARATE</option>
                        <option>TAI CHI</option>
                    </select>
                    <small class="text-muted form-text mt-2">Press command or control when clicking to select multiple items</small>
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
                    <small class="text-muted form-text mt-2">Press command or control when clicking to select multiple items</small>
                </div>
                <button type="submit" class="btn btn-primary float-right mr-4" name="submitProfile" id="btnProfile">Save</button>
            </form>
        </div>
    </div>
</div>

<?php
    include "footer.php";
?>