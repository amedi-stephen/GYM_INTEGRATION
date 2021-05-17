<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css" />
    <title>Employee</title>
</head>

<body class="withBG">


    <?php
    require "navigation.php";
    ?>


    <div class="container mt-4 d-flex justify-content-center align-items-center">
        <div class="card mb-4" style="width: 30rem">
            <div class="card-header">
                <h2 class="card-title text-uppercase text-center mb-4">
                    <i class="fa fa-compass d-block mb-4"></i>
                    register your gym
                </h2>
                <p class="text-muted">As an owner or part of management, create a gym navigator company profile that provides you access to our vast uers.</p>
            </div>

            <div class="card-body">
                <form action="../includes/employeeSignup.inc.php" method="post">
                    <div class="form-group mb-4">
                        <label for="name">Gym Email</label>
                        <input type="text" name="mail" class="form-control" placeholder="e.g. beastfitness@domain.com">
                    </div>

                    <div class="form-group mb-4">
                        <label for="phone">Gym Phone Number</label>
                        <input type="text" name="phone" class="form-control" placeholder="e.g.Phone number">
                    </div>

                    <div class="form-group mb-4">
                        <label for="address">Gym Address</label>
                        <input type="text" name="address" class="form-control" placeholder="e.g. Ngong road">
                    </div>

                    <div class="form-group mb-4">
                        <label for="company">Gym Name</label>
                        <input type="text" name="company" class="form-control" placeholder="e.g. beast fitness">
                    </div>

                    <div class="form-group mb-4">
                        <label for="town">Gym Town</label>
                        <input type="text" name="town" class="form-control" placeholder="Town">
                    </div>

                    <fieldset class="form-group">
                    <label class="mt-4 ">Fitness Classes you offer</label>
                    <div class="d-flex justify-content-between align-items-center">
                        <div id="column1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="classes[]" value="cardio classes" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Cardio Classes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="classes[]" value="ab/core classes" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Ab/Core classes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="classes[]" value="yoga" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Yoga
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="classes[]" value="pilates" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Pilates
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="classes[]" value="kickboxing classes" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Kickboxing Classes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="classes[]" value="boxing" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Boxing
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="classes[]" value="spin classes" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Spin Classes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="classes[]" value="martial arts" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Martial Arts
                                </label>
                            </div>
                        </div>
                        <div id="column2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="classes[]" value="strength training" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Strength Training
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="classes[]" value="stretching/flexibility classes" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Stretching/Flexibility Classes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="classes[]" value="boot camp" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Boot Camp
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="classes[]" value="dance classes" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Dance Classes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="classes[]" value="zumba" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Zumba
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="classes[]" value="sports performance" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Sports Performance
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="classes[]" value="crossfit" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Crossfit
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="classes[]" value="karate" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Karate
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                    <fieldset class="form-group">
                    <label class="mt-4 ">Amenities in the gym</label>
                    <div class="d-flex justify-content-between align-items-center">
                        <div id="column1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="parking space" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                Parking Space
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="sauna and masseuse" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                Sauna and Masseuse
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="gym canteen" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Gym Canteen
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="showers and locker rooms" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Showers and Locker Rooms
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="treadmills" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Treadmills
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="rowing machines" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Rowing Machines
                                </label>
                            </div>
                        </div>
                        <div id="column2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="air conditioning" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Air Conditioning
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="ellipticals" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Ellipticals
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="stationary bikes" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Stationary Bikes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="stair masters" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Stair Masters
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="weights" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Weights
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="cardio equipments" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Cardio Equipments
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                   
                    <div class="form-group mb-4">
                        <label for="open">Opening Hours</label>
                        <input type="text" name="open" id="openedAt" class="form-control" placeholder="Opened At">
                    </div>
                    <div class="form-group mb-4">
                        <label for="per_month">Price (month)</label>
                        <input type="text" name="per_month" id="openedAt" class="form-control" placeholder="Price per month">
                    </div>
                    <div class="form-group mb-4">
                        <label for="per_session">Price (daily)</label>
                        <input type="text" name="per_session" id="openedAt" class="form-control" placeholder="Price per session">
                    </div>
                    <div class="form-group mb-4">
                        <label for="close">Closing Hours</label>
                        <input type="text" name="close" id="closedAt" class="form-control" placeholder="Closed At">
                    </div>
                    <div class="form-group mb-4">
                        <label for="max_capacity">Full Capacity</label>
                        <input type="number" name="max_capacity" id="maxCap" class="form-control" placeholder="How many people can your gym hold per session">
                    </div>

                    <div class="form-group mb-4">
                        <label for="pwd">Password</label>
                        <input type="password" name="pwd" id="password" class="form-control mb-2" placeholder="Password">
                        <input type="checkbox" id="togglePassword"> <span id="textPwd">Show password</span>
                        <small id="emailHelp" class="form-text text-muted"> Password must be at least 8 characters in length</small>
                        <small id="emailHelp" class="form-text text-muted"> Password must be include at least one upper case letter</small>
                        <small id="emailHelp" class="form-text text-muted"> Password must be include at least one number</small>
                        <small id="emailHelp" class="form-text text-muted"> Password must be include at least one special character</small>
                    </div>

                    <div class="form-group mb-4">
                        <label for="re-pwd">Repeat Password</label>
                        <input type="password" name="re-pwd" id="" class="form-control" placeholder="Repeat password">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mb-2" name="submit_signup">Register Gym</button>
                    <small class="text-muted mb-4">Already registerd? <a href="employeeLogin.php">Manage workspace</a></small>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById("password");
            if (password.type === "password") {
                password.type = "text";
                document.getElementById('textPwd').textContent = 'Hide password';

            } else {
                password.type = "password";
                document.getElementById('textPwd').textContent = 'Show password';
            }
        }
        document.getElementById("togglePassword").addEventListener("change", togglePassword);
    </script>
</body>

</html>