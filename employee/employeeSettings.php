<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Employee</title>
</head>

<body>
    <?php
        require "navigation.php";
    ?>

    <div class="card mt-4 container">
        <div class="container">
            <form action="../includes/employeedp.inc.php" method="post" enctype="multipart/form-data" class="mt-4">
            <?php
                    $query = "SELECT * FROM employees";
                    $result = $DBconnection->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if (isset($_SESSION["employerID"])) {
                                if ($_SESSION["employerID"] == $row["employer_id"]) {
                                    $employerid = $row["employer_id"];
                                    $sql = "SELECT * FROM employerimage WHERE employer_id='$employerid'";
                                    $sqlResult = $DBconnection->query($sql);
                                    while ($image = $sqlResult->fetch_assoc()) {
                                        if ($image["eimage_status"] == 0) {
                                            
                                            
                                            echo "<img src='../uploads/employer/profile" . $employerid . ".jpg' class='p-4' style='width: 200px; height: 200px;'>";
                                        } else {
                                            echo "<img src='../uploads/default.webp' class='p-4' style='width: 200px; height: 200px;'>";
                                        }
                                    }
                                }
                            }
                        }
                    } else {
                        echo "error occured";
                    }
                    ?>
            <!-- <img src="../images/dummy.jpg" alt="" srcset="" style="width: 100px; height: 100px;"> -->
                <div class="container">
                    <div class="form-group mt-4">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="img_upload">
                        <button type="submit" class="btn btn-primary" name="upload_img">Upload</button>
                    </div>
                </div>
            </form>
            <form action="../includes/employeeProfile.inc.php" method="post">
                <h4 class="text-primary badge-light p-2">Fill in the following details</h4>
                

                <div class="form-group mb-4">
                    <label for="gym_name">Name of Gym</label>
                    <input type="text" name="gym_name" id="gymName" class="form-control" placeholder="Enter name of your gym">
                </div>
                <div class="form-group mb-4">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phoneNumber" class="form-control"  placeholder="Enter your phone number">
                </div>
                <div class="form-group mb-4">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="addressDetails" class="form-control"  placeholder="Enter the address of your gym">
                </div>
                <div class="form-group mb-4">
                    <label for="town_name">Town Location</label>
                    <input type="text" name="town_name" id="townName" class="form-control"  placeholder="Enter town your gym is located">
                </div>
                <div class="form-group mb-4">
                    <label for="classes">Select the classes your gym offers. Press command or control when clicking to select multiple items</label>
                    <select multiple="multiple_classes" class="form-control" id="gymClasses" name="classes[]">
                        <option>Cardio</option>
                        <option>Outdoor training</option>
                        <option>Ab/core exercises</option>
                        <option>Yoga</option>
                        <option>Pilates</option>
                        <option>Kick boxing classes</option>
                        <option>Spin classes</option>
                        <option>Martial arts</option>
                        <option>Strength training</option>
                        <option>Stretching/flexibility</option>
                        <option>Bootcamp</option>
                        <option>Karate</option>
                        <option>Tai chi</option>
                        <option>Dance classes</option>
                        <option>Crossfit</option>
                        <option>Sports Performance</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="equipments">Select the equipments your gym has. Press command or control when clicking to select multiple items</label>
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
                <div class="form-group">
                    <label for="open">Opening Hours</label>
                    <input type="text" name="open" id="openedAt" class="form-control" placeholder="Opened At">
                </div>
                <div class="form-group">
                    <label for="close">Closing Hours</label>
                    <input type="text" name="close" id="closedAt" class="form-control" placeholder="Closed At">
                </div>
                <div class="form-group">
                    <label for="max_capacity">Full Capacity</label>
                    <input type="number" name="max_capacity" id="maxCap" class="form-control" placeholder="How many people can your gym hold per session">
                </div>
                <button type="submit" class="btn btn-primary" name="submit_gym" id="btnProfile">Submit Details <i class="fa fa-user"></i></button>
            </form>
        </div>
    </div>
</body>