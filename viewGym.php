<?php
include "navbar.php";
include 'includes/processSchedule.inc.php';
date_default_timezone_set('Africa/Nairobi');
?>

<div class="container mt-4 d-flex flex-column justify-content-center">
    <?php
    if (isset($_GET['id'])) {
        $id = $DBconnection->real_escape_string($_GET['id']);
        $query = "SELECT * FROM gyms WHERE gym_id='$id'";
        $result = $DBconnection->query($query);

        if ($gym = $result->fetch_assoc()) {
            echo "
            <div class='text-center' style='margin: 20px 0;'>
                <h2 class='text-center text-uppercase display-4'>" . $gym["gym_name"] . "</h2>
                <h4>\"Persevearance is the key\"</h4>
                <h6 class='text-muted'><i class='fa fa-envelope'></i> Email: " . $gym["gym_email"] . " || <i class='fa fa-phone-square'></i> Phone: " . $gym["phone"] . "</h6>
            </div>
            <div class='gym-section mb-4'>
                <div id='slideshow-section' data-component='slideshow'>
                    <div role='list'>";
            $sql = "SELECT * FROM gym_images WHERE gym_id='$id'";
            $sequel = $DBconnection->query($sql);
            while ($image = $sequel->fetch_assoc()) {
            }
            echo "
                        <div class='slide'>
                        <img src='https://source.unsplash.com/featured/?{fitness},{gym}' />
                        </div>
                        <div class='slide'>
                            <img src='https://source.unsplash.com/featured/?{gym},{equipments}' />
                        </div>
                        <div class='slide'>
                            <img src='https://source.unsplash.com/featured/?{gym},{equipments}' />
                        </div>
                    </div>
                </div>
                <div class='gym-features-section'>
                    <div class='gym-features'>
                        <h2 class='text-center text-capitalize' style='margin: 20px 0;'>gym features</h2>
                        <div class='cards-row d-flex flex-wrap justify-content-center'>
                            <ul class='list-group mb-4 mr-4' style='width: 20rem;'>
                            <h2 class='badge-light text-center p-2'>Amenities</h2>";

            $amenitiesArr = unserialize(base64_decode($gym['amenities']));
            foreach ($amenitiesArr as $key => $item) {
                echo "
                                        <li class='list-group-item'>" . $item . "<button type='button' class='btn btn-sm btn-primary float-right' data-bs-toggle='popover' title='Popover title' data-bs-content='And heres some amazing content. Its very engaging. Right?'>View</button></li>";
            }
            echo "</ul>";
            // END OF UNORDERED LIST
            echo "<ul class='list-group mb-4' style='width: 20rem'>
                                    <h2 class='badge-light text-center p-2'>Classes</h2>";
            $classesArr = unserialize(base64_decode($gym['classes']));
            foreach ($classesArr as $key => $class) {
                echo "<li class='list-group-item'>" . $class . "<button type='button' class='btn btn-sm btn-primary float-right' data-bs-toggle='popover' title='Popover title' data-bs-content='And heres some amazing content. Its very engaging. Right?'>View</button></li>";
            }
            echo "</ul>";
            // END OF UNORDERED LIST
            // END OF UNORDERED LIST
            echo "
                        </div>
                    </div>
                </div>";
        }
    }
    ?>
    <div class='gym-features-section'>
        <div class="gym-sessions">
            <h2 class="text-center text-capitalize" style="margin: 20px 0;">gym sessions</h2>
            <div class="cards-row">
                <div class='card mr-4'>
                    <div class='card-header'>
                        <h4 class='card-title text-primary'>Sessions</h4>
                        <div class='card-subtitle mt-2'>
                            View all the gym sessions here.
                        </div>
                    </div>
                    <div class='card-body'>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Start date</th>
                                    <th scope="col">End date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($_GET["id"])) {
                                    $id = $DBconnection->real_escape_string($_GET['id']);
                                    $query = "SELECT * FROM gyms WHERE gym_id='$id'";
                                    $result = $DBconnection->query($query);
                                    while ($row = $result->fetch_assoc()) {
                                        $gymPage = $_GET['id'];
                                        $gymid = $row['gym_id'];
                                        if ($gymid == $gymPage) {
                                            $query = "SELECT * FROM capacity_schedule WHERE gym_id = '$gymPage'";
                                            $sequel = $DBconnection->query($query);
                                            while ($record = $sequel->fetch_assoc()) {
                                                            echo '
                                                    
                                                    <tr>
                                
                                                        <td> ' . $record["title"] . '</td>
                                                        <td> ' . $record["price"] . '</td>
                                                        <td> ' . $record["description"] . '</td>
                                                        <td> ' . $record["from_date"] . '</td>
                                                        <td> ' . $record["to_date"] . '</td>
                                                        <td> <button type="button" class="btn btn-primary btn-sm open-modal">Book</button></td>
                                                        
                                                    </tr>
                                                            ';
                                                                }
                                                                echo "
                                                </div>
                                            </div>
                                            ";

                                            
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <?php
                if (isset($_GET['id'])) {
                    $query = "SELECT * FROM users";
                    $result = $DBconnection->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if (isset($_SESSION['userID'])) {
                                if ($_SESSION["userID"] == $row['user_id']) {


                                    $id = $DBconnection->real_escape_string($_GET['id']);
                                    $query = "SELECT * FROM gyms WHERE gym_id='$id'";
                                    $result = $DBconnection->query($query);
                                    while ($row_gym = $result->fetch_assoc()) {
                                        $gymPage = $_GET['id'];
                                        $gymid = $row_gym['gym_id'];
                                        if ($gymid == $gymPage) {
                                            $query = "SELECT * FROM capacity_schedule WHERE gym_id = '$gymPage'";
                                            $sequel = $DBconnection->query($query);
                                            while ($record = $sequel->fetch_assoc()) {

                                                echo "<div class='modal-overlay'>
                                                    <div class='modal-container'>
                                                        <button class='close-btn btn btn-sm btn-danger float-right'><i class='fa fa-times'></i></button>
                                                        <h3 class='text-center'>Payment Details</h3>
                                                        <h1>" .$gymid . "</h1>
                                                        <form action='" . reserveMembership($DBconnection) . "' method='POST'>
                                                            <input type='hidden' name='uid' value='" . $row['user_id'] . "' />
                                                            <input type='hidden' name='cap_id' value='" . $record["capacity_id"] . "' />
                                                            <input type='hidden' name='gym_id' value='" . $gymid . "' />
                                                            <div class='form-group'>
                                                                <label htmlFor='uid'>Username</label>
                                                                <input type='text' name='uname' value='" . $row["user_name"] . "' class='form-control' />
                                                            </div>
                                                            <div class='form-group'>
                                                                <label htmlFor='uid'>Price</label>
                                                                <input type='text' name='gym_price' value='" . $record["price"] . "' class='form-control' />
                                                            </div>
                                                            <div class='form-group'>
                                                                <label htmlFor='email'>Email</label>
                                                                <input type='text' name='email' value='" . $row['user_email'] . "' class='form-control' />
                                                            </div>
                                                            <div class='button-group'>
                                                            <button type='submit' name='submit_registration_now' class='btn btn-primary'>Pay Now</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                    ";
                                            }
                                        }
                                    }
                                    
                                }
                            }
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <script>
        const slideshows = document.querySelectorAll("[data-component='slideshow']");
        slideshows.forEach(initSlideShow);

        function initSlideShow(slideshow) {
            const slides = document.querySelectorAll(`#${slideshow.id} [role="list"] .slide`);
            let index = 0,
                time = 5000;
            slides[index].classList.add("active");

            setInterval(() => {
                slides[index].classList.remove("active");
                index++;
                if (index === slides.length) index = 0;
                slides[index].classList.add("active");
            }, time);
        }
    </script>

    <script>
        const openBtn = document.querySelector(".open-modal");
        const modalOverlay = document.querySelector(".modal-overlay");
        const closeBtn = document.querySelector(".close-btn");

        openBtn.addEventListener("click", openModal);
        closeBtn.addEventListener("click", closeModal);

        function openModal() {
            modalOverlay.classList.add("open-modal");
        }

        function closeModal() {
            modalOverlay.classList.remove("open-modal");
        }
    </script>

    <?php
    require "footer.php";
    ?>