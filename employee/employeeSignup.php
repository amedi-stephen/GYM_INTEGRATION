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

<body>


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

                    <div class="form-group mb-4">
                        <label for="classes">Gym Available Classes</label>
                        <select multiple="multiple_activities" class="form-control" id="fitness-activities" name="classes[]">
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
                        <label for="equipments">Select the equipments your gym has.</label>
                        <select multiple="multiple_equipments" class="form-control" id="gymEquipments" name="equipments[]">
                            <option>Rowing machine</option>
                            <option>Elliptic machines</option>
                            <option>Exercise bikes</option>
                            <option>Treadmills</option>
                            <option>Treadmills</option>
                            <option>Stair climbers</option>
                            <option>Cable machines</option>
                            <option>Selectorized machines</option>
                            <option>Stability balls</option>
                            <option>Resistance bands</option>
                            <option>Boxing equipment</option>
                            <option>Pilotes Reformers</option>
                            <option>Weights</option>
                        </select>
                        <small class="text-muted form-text mt-2">Press command or control when clicking to select multiple items</small>
                    </div>

                    <div class="form-group mb-4">
                        <label for="amenities">Select Amenities your gym offers</label>
                        <select multiple="multiple_amenities" class="form-control" id="gymAmenities" name="amenities[]">
                            <option>Locker rooms</option>
                            <option>Parking</option>
                            <option>Showers</option>
                            <option>Personal trainer</option>
                            <option>Steam room</option>
                            <option>Sauna</option>
                            <option>Laundry Service</option>
                            <option>Child care</option>
                            <option>Massage</option>
                            <option>Spa services</option>
                            <option>Air conditioning</option>
                            <option>Towels</option>
                        </select>
                    </div>

                    <div class="form-group mb-4">
                        <label for="open">Opening Hours</label>
                        <input type="text" name="open" id="openedAt" class="form-control" placeholder="Opened At">
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