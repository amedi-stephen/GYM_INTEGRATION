<?php
require "navbar.php";
?>

<div class="container mt-4">
    <h2 class="display-4 text-center text-uppercase" style="margin-bottom: 40px;">Services</h2>
    <form action="searchResults.php" method="post" class="mb-4">
        <h4>Search Again</h4>
        <div class="form-inline">
            <input type="text" name="search" class="form-control form-control-lg" placeholder="Search Again">
            <button class="btn btn-outline-primary btn-lg" name="btn_search">Search</button>
        </div>
    </form>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Filter your results
                        <button type="button" class="btn btn-outline-primary float-right toggleBtn">
                            <span class="plus-icon" id=""><i class="fa fa-plus"></i></span>
                            <span class="minus-icon" id="display"><i class="fa fa-minus"></i></span>
                        </button>
                    </h3>
                </div>
                <div class="card-body filter-section">
                    <form action="" method="post">
                        <div class="gender-based">
                            <h6 class="badge-primary p-2">Gender Based</h6>
                            <div id="male" class="d-flex justify-content-between align-items-stretch">
                                <p>Only for men </p>
                                <input type="radio" name="" id="">
                            </div>
                            <div id="female" class="d-flex justify-content-between align-items-stretch">
                                <p>Only for Female </p>
                                <input type="radio" name="" id="">
                            </div>
                        </div>
                        <hr>
                        <div class="amenities-based">
                            <h6 class="badge-primary p-2">Amenities</h6>
                            <div id="locker" class="d-flex justify-content-between align-items-stretch">
                                <p>Locker Rooms</p>
                                <input type="checkbox">
                            </div>
                            <div id="showers" class="d-flex justify-content-between align-items-stretch">
                                <p>Showers</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="spa" class="d-flex justify-content-between align-items-stretch">
                                <p>Spa Services</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="therapy" class="d-flex justify-content-between align-items-stretch">
                                <p>Physical Therapy</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="parking" class="d-flex justify-content-between align-items-stretch">
                                <p>Parking</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="trainer" class="d-flex justify-content-between align-items-stretch">
                                <p>Personal Trainer</p>
                                <input type="checkbox" name="" id="">
                            </div>
                        </div>
                        <hr>
                        <div class="class-based">
                            <h6 class="badge-primary p-2">Classes</h6>
                            <div id="cardio" class="d-flex justify-content-between align-items-stretch">
                                <p>Cardio</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="ab" class="d-flex justify-content-between align-items-stretch">
                                <p>Ab Workouts</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="outdoor" class="d-flex justify-content-between align-items-stretch">
                                <p>Outdoor Training</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="yoga" class="d-flex justify-content-between align-items-stretch">
                                <p>Yoga</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="boxing" class="d-flex justify-content-between align-items-stretch">
                                <p>Boxing</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="kick-boxing" class="d-flex justify-content-between align-items-stretch">
                                <p>Kick Boxing</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="martial-arts" class="d-flex justify-content-between align-items-stretch">
                                <p>Martial Arts</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="strength" class="d-flex justify-content-between align-items-stretch">
                                <p>Strength Training</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="sports" class="d-flex justify-content-between align-items-stretch">
                                <p>Sports Perfomance</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="crossfit" class="d-flex justify-content-between align-items-stretch">
                                <p>Crossfit</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="karate" class="d-flex justify-content-between align-items-stretch">
                                <p>Karate</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="taichi" class="d-flex justify-content-between align-items-stretch">
                                <p>Taichi</p>
                                <input type="checkbox" name="" id="">
                            </div>
                        </div>
                        <hr>
                        <div class="equipment-based">
                            <h6 class="badge-primary p-2">Equipments</h6>
                            <div id="treadmill" class="d-flex justify-content-between align-items-stretch">
                                <p>Treadmills</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="exerciseBikes" class="d-flex justify-content-between align-items-stretch">
                                <p>Exercise Bikes</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="rowing-machine" class="d-flex justify-content-between align-items-stretch">
                                <p>Rowing Machines</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="elliptic-machines" class="d-flex justify-content-between align-items-stretch">
                                <p>Elliptical Machines</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="weights" class="d-flex justify-content-between align-items-stretch">
                                <p>Weights</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="stable-balls" class="d-flex justify-content-between align-items-stretch">
                                <p>Stabilized Balls</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="boxing" class="d-flex justify-content-between align-items-stretch">
                                <p>Boxing Equipments</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="stair-climbers" class="d-flex justify-content-between align-items-stretch">
                                <p>Stair Climbers</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <div id="cable-machine" class="d-flex justify-content-between align-items-stretch">
                                <p>Cable Machines</p>
                                <input type="checkbox" name="" id="">
                            </div>
                            <button class="btn btn-outline-primary">Apply Filters</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="search col-lg-8">
            <?php
            include "includes/dbh.inc.php";

            if (isset($_POST["btn_search"])) {
                $search = $DBconnection->real_escape_string($_POST["search"]);
                $QUERY_search = "SELECT * FROM gyms WHERE town LIKE '%$search%' OR gym_name LIKE '%$search%'";
                $result_search = $DBconnection->query($QUERY_search);
                $row_results = $result_search->num_rows;

                echo '<h3 class="badge-light p-4">There are ' . $row_results . ' result(s)</h3>';

                echo '<div class="container bg-light p-2 d-flex flex-wrap justify-content-between">';
                if ($row_results > 0) {
                    while ($row = $result_search->fetch_assoc()) {
                        echo '
                                <div class="card mb-4 " style = "flex-grow: 4; width: 18rem;">
                                    <div class="card-header">
                                        <div class="card-title">' . strtoupper($row["gym_name"]) . ' - <span class="text-muted">' . strtoupper($row["town"]) . '</span></div>
                                    </div>
                                    <div class="card-body">
                                        <p>LOCATION: ' . strtoupper($row["address"]) . '</p>
                                        <a href="viewGym.php?id='.$row['gym_id'].'" class="btn btn-outline-primary text-uppercase">View Gym <span class="ml-2">&#8594;</span></a>
                                    </div>
                                </div>';
                    }
                } else {
                    echo "no gym or town in our database but keep in touch as more gyms are being discovered!";
                }

                echo '</div>';
            } else {
                echo "search button not executed";
            }
            ?>
        </div>
    </div>
</div>

<script>
    const btns = document.querySelectorAll(".toggleBtn");

    btns.forEach(btn => {
        // console.log(btn);
        btn.addEventListener("click", function(e) {
            e.currentTarget.parentElement.parentElement.parentElement.classList.toggle("show-filters");
        });
    });
</script>

<script>
    // FIXME: make the jquery animation slidetoggle work
    $(document).ready(function() {
        $('.toggleBtn').click(function() {
            $('.show-filters').slideToggle(5000);
        });
    });
</script>
