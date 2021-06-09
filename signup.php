<?php
require "navbar.php";
?>
<body class="withBG">
<div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="login.php">Login</a></li>

            <li class="breadcrumb-item active">Sign up</li>
        </ol>
        
    </div>
<div class="container d-flex justify-content-center align-items-center">

    <div class="card mb-4" style="width: 30rem">
        <div class="card-header">
            <h2 class="card-title text-uppercase text-center mb-4">
                <i class="fa fa-compass d-block mb-4"></i>
                become a member
            </h2>
            <p class="text-muted">Create your Gym Navigator profile and get first access to the very best of our services, inspiration and community.</p>
        </div>
        <div class="card-body">
            <?php
                if(isset($_GET['error'])) {
                    if($_GET['error'] == 'emptyfields'){
                        echo '<div class="alert alert-dismissible alert-danger">
                        <strong>Please fill all the fields</strong>
                      </div>';
                    } else if($_GET['error'] == 'invalidusername') {
                        echo '<div class="alert alert-dismissible alert-danger">
                        <strong>Invalid Username. Choose another name</strong>
                      </div>';
                    } else if($_GET['error'] == 'invalidemail') {
                        echo '<div class="alert alert-dismissible alert-danger">
                        <strong>Invalid Email. Choose another email</strong>
                      </div>';
                    } else if($_GET['error'] == 'invalidpassword'){
                        echo '<div class="alert alert-dismissible alert-danger">
                        <strong>Invalid Password. Use the rules written below the password field</strong>
                      </div>';
                    } else if($_GET['error'] == 'checkpassword') {
                        echo '<div class="alert alert-dismissible alert-danger">
                        <strong>Passwords do not match!</strong>
                      </div>';
                    } else if($_GET['error'] == 'userexists') {
                        echo '<div class="alert alert-dismissible alert-danger">
                        <strong>User already exists!</strong>
                      </div>';
                    }
                }
            ?>
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


                <fieldset class="form-group">
                    <label class="mt-4 ">Fitness Classes you prefer</label>
                    <div class="d-flex justify-content-between align-items-center">
                        <div id="column1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fitnessActivities[]" value="cardio classes" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Cardio Classes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fitnessActivities[]" value="ab/core classes" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Ab/Core classes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fitnessActivities[]" value="yoga" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Yoga
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fitnessActivities[]" value="pilates" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Pilates
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fitnessActivities[]" value="kickboxing classes" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Kickboxing Classes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fitnessActivities[]" value="boxing" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Boxing
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fitnessActivities[]" value="spin classes" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Spin Classes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fitnessActivities[]" value="martial arts" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Martial Arts
                                </label>
                            </div>
                        </div>
                        <div id="column2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fitnessActivities[]" value="strength training" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Strength Training
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fitnessActivities[]" value="stretching/flexibility classes" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Stretching/Flexibility Classes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fitnessActivities[]" value="boot camp" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Boot Camp
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fitnessActivities[]" value="dance classes" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Dance Classes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fitnessActivities[]" value="zumba" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Zumba
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fitnessActivities[]" value="sports performance" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Sports Performance
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fitnessActivities[]" value="crossfit" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Crossfit
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="fitnessActivities[]" value="karate" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Karate
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <label class="mt-4 ">Amenities you prefer while in the gym</label>
                    <div class="d-flex justify-content-between align-items-center">
                        <div id="column1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gymLikables[]" value="parking space" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                Parking Space
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gymLikables[]" value="sauna and masseuse" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                Sauna and Masseuse
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gymLikables[]" value="gym canteen" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Gym Canteen
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gymLikables[]" value="showers and locker rooms" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Showers and Locker Rooms
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gymLikables[]" value="treadmills" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Treadmills
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gymLikables[]" value="rowing machines" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Rowing Machines
                                </label>
                            </div>
                        </div>
                        <div id="column2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gymLikables[]" value="air conditioning" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Air Conditioning
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gymLikables[]" value="ellipticals" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Ellipticals
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gymLikables[]" value="stationary bikes" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Stationary Bikes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gymLikables[]" value="stair masters" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Stair Masters
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gymLikables[]" value="weights" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Weights
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gymLikables[]" value="cardio equipments" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Cardio Equipments
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
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
                <small id="terms" class="form-text text-muted mb-4">Already registered? <a href="login.php">Sign in</a></small>
            </form>
        </div>
    </div>
</div>


<script src="js/app.js"></script>
</body>