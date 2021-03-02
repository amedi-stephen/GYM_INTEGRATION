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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <img src="../images/dummy.jpg" style="width: 50px; height: 50px; border-radius: 50%;">
            <a class="navbar-brand" href="#">Alpha Fitness Gym</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">MENU</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Dashboard</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Log Out</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Notifications<span class="badge badge-success badge-pill nav-pills">3</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Gallery</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">

                    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Log Out</button>
                </form>
            </div>
        </div>

    </nav>

    <div class="card mt-4 container">
        <div class="container">
            <form action="includes/upload.inc.php" method="post" enctype="multipart/form-data" class="mt-4">
            <img src="../images/dummy.jpg" alt="" srcset="" style="width: 100px; height: 100px;">
                <div class="container">
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="file">
                        <button type="submit" class="btn btn-primary" name="submit_upload">Upload</button>
                    </div>
                </div>
            </form>
            <form action="includes/createProfile.inc.php" method="post">
                <h4 class="text-primary badge-light p-2">Fill in the following details</h4>
                

                <div class="form-group mb-4">
                    <label for="gym_name">Name of Gym</label>
                    <input type="text" name="gym_name" id="gymName" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group mb-4">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phoneNumber" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group mb-4">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="addressDetails" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group mb-4">
                    <label for="town_name">Town Location</label>
                    <input type="text" name="town_name" id="townName" class="form-control">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group mb-4">
                    <label for="classes">Select the classes your gym offers. Press command or control when clicking to select multiple items</label>
                    <select multiple="multiple_classes" class="form-control" id="gymClasses" name="classes[]">
                        <option>Cardio</option>
                        <option>Jogging</option>
                        <option>Riding bike</option>
                        <option>Dancing</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="equipments">Select the equipments your gym has. Press command or control when clicking to select multiple items</label>
                    <select multiple="multiple_equipments" class="form-control" id="gymEquipments" name="equipments[]">
                        <option>Rowing machine</option>
                        <option>Elliptic machines</option>
                        <option>Riding bike</option>
                        <option>Dancing</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="amenities">Select Amenities your gym offers</label>
                    <select multiple="multiple_amenities" class="form-control" id="gymAmenities" name="amenities[]">
                        <option>Boxing</option>
                        <option>Karate</option>
                        <option>Muai Tai</option>
                        <option>kick boxing</option>
                        <option>air conditioning</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="open">Opening Hours</label>
                    <input type="text" name="open" id="openedAt" class="form-control" placeholders="Opening Hours">
                </div>
                <div class="form-group">
                    <label for="close">Closing Hours</label>
                    <input type="text" name="close" id="closedAt" class="form-control" placeholders="Closing Hours">
                </div>
                <div class="form-group">
                    <label for="max_capacity">Full Capacity</label>
                    <input type="number" name="max_capacity" id="maxCap" class="form-control" placeholders="Opening Hours">
                </div>
                <button type="submit" class="btn btn-primary" name="submit_gym" id="btnProfile">Submit Details <i class="fa fa-user"></i></button>
            </form>
        </div>
    </div>
</body>