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
                <div class="form-group mb-4">
                    <label for="gender">Choose your gender</label> <br>
                    Male: <input type="radio" id="chooseMale" name="gender" value="male" class="mr-4">
                    Female: <input type="radio" name="gender" id="chooseFemale" value="female" class="mr-4">
                    Prefer not to say: <input type="radio" name="gender" id="chooseFemale" value="female">
                </div>

                <div class="form-group">
                    <label for="town">Town</label>
                    <input type="text" name="town" id="area" class="form-control" placeholder="e.g. Nairobi">
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="uidphone" class="form-control" placeholder="Phone Number">
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