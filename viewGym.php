<?php
include "navbar.php";
include 'includes/processSchedule.inc.php';
date_default_timezone_set('Africa/Nairobi');
?>

<div class="container mt-4 d-flex flex-column justify-content-center">
<?php
    if(isset($_GET['id'])) {
        $id = $DBconnection->real_escape_string($_GET['id']);
        $query = "SELECT * FROM gyms WHERE gym_id='$id'";
        $result = $DBconnection->query($query);

        if ($gym = $result->fetch_assoc()) {
            echo "
            <div class='text-center' style='margin: 20px 0;'>
                <h2 class='text-center text-uppercase display-4'>".$gym["gym_name"]."</h2>
                <h4>\"Persevearance is the key\"</h4>
                <h6 class='text-muted'>ksh.2000 per month || ksh.200 per session/day</h6>
            </div>
            
            ";
        }
    }
?>
    
    <div class='gym-section mb-4'>
        <div id='slideshow-section' data-component='slideshow'>
            <div role='list'>
                <div class='slide'>
                    <img src='images/dark-gym.jpg' />
                </div>
                <div class='slide'>
                    <img src='images/dummy.jpg' />
                </div>
                <div class='slide'>
                    <img src='images/mountain-climbers.jpg' />
                </div>
            </div>
        </div>
        <div class="gym-features-section">
            <!-- TODO: 
                *divided into gym features and sessions offered
             -->
            <div class="gym-features">
                <h2 class="text-center text-capitalize" style="margin: 20px 0;">gym features</h2>
                <div class="cards-row d-flex flex-wrap justify-content-between align-items-center">
                    <ul class="list-group mb-4" style="width: 20rem;">
                        <h3 class="badge-light p-2">Ammenities</h3>
                        <li class="list-group-item">item <i class="fa fa-caret-down"></i></li>
                        <li class="list-group-item">item <i class="fa fa-caret-down"></i></li>
                        <li class="list-group-item">item <i class="fa fa-caret-down"></i></li>
                        <li class="list-group-item">item <i class="fa fa-caret-down"></i></li>
                    </ul>

                    <ul class="list-group mb-4" style="width: 20rem;">
                        <h3 class="badge-light p-2">Ammenities</h3>
                        <li class="list-group-item">item <i class="fa fa-caret-down"></i></li>
                        <li class="list-group-item">item <i class="fa fa-caret-down"></i></li>
                        <li class="list-group-item">item <i class="fa fa-caret-down"></i></li>
                        <li class="list-group-item">item <i class="fa fa-caret-down"></i></li>
                    </ul>

                    <ul class="list-group mb-4" style="width: 20rem;">
                        <h3 class="badge-light p-2">Ammenities</h3>
                        <li class="list-group-item">item <i class="fa fa-caret-down"></i></li>
                        <li class="list-group-item">item <i class="fa fa-caret-down"></i></li>
                        <li class="list-group-item">item <i class="fa fa-caret-down"></i></li>
                        <li class="list-group-item">item <i class="fa fa-caret-down"></i></li>
                    </ul>

                    <ul class="list-group mb-4" style="width: 20rem;">
                        <h3 class="badge-light p-2">Ammenities</h3>
                        <li class="list-group-item">item <i class="fa fa-caret-down"></i></li>
                        <li class="list-group-item">item <i class="fa fa-caret-down"></i></li>
                        <li class="list-group-item">item <i class="fa fa-caret-down"></i></li>
                        <li class="list-group-item">item <i class="fa fa-caret-down"></i></li>
                    </ul>
                </div>
            </div>
            <div class="gym-sessions"> 
                <h2 class="text-center text-capitalize" style="margin: 20px 0;">gym sessions</h2>
                <div class="cards-row d-flex flex-wrap justify-content-between align-items-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            <h4 class="card-title text-primary">Morning Session</h4>
                            <div class="card-subtitle mt-2">
                                Cardio and HIIT workout
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, exercitationem?</p>
                            <p class="text-muted">ksh.200 per session for non-members</p>
                            <button class="btn btn-primary float-right">More <i class="fa fa-caret-right"></i></button>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            <h4 class="card-title text-primary">Evening Session</h4>
                            <div class="card-subtitle mt-2">
                                Cardio and HIIT workout
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, exercitationem?</p>
                            <p class="text-muted">ksh.200 per session for non-members</p>
                            <button class="btn btn-primary float-right">More <i class="fa fa-caret-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-4 d-flex flex-column justify-content-center">
    <?php
    if (isset($_GET['id'])) {
        $id = $DBconnection->real_escape_string($_GET['id']);
        $query = "SELECT * FROM gyms WHERE gym_id='$id'";
        $result = $DBconnection->query($query);

        if ($gym = $result->fetch_assoc()) {
            echo '
            <h2 class="display-4 text-center" style="margin-bottom: 80px;">' . strtoupper($gym['gym_name']) . '</h2>
            <div class="d-flex justify-content-between align-items-center"> 
    
                <div class="gym-section">
                    <div class="services mt-4">
                    
                        <div class="service-amenities mb-4">
                            <h3 class="badge-light p-2">Amenities</h3>';
                            $amenitiesArr = unserialize(base64_decode($gym['amenities']));
                            foreach ($amenitiesArr as $key => $item) {
                                echo ' <ul class="list-group">
                                    <li class="list-group-item">' . $item . '</li> 
                                </ul>';
                            }

                            echo '
                        </div>

                        <div class="service-classes mb-4">
                            <h3 class="badge-light p-2">Classes</h3>';
                                $classesArr = unserialize(base64_decode($gym['classes']));
                                if(is_array($classesArr) || is_object($classesArr)) {
                                    foreach($classesArr as $class) {
                                        echo "<ul class='list-group'>
                                            <li class='list-group-item'>".$class."</li>
                                        </ul>";
                                    }
                                } else {
                                    echo "Array conversion error: ".$DBconnection->error;
                                }
                            echo '
                        </div>

                        <div class="service-equipments mb-4">
                            <h3 class="badge-light p-2">Equipments</h3>';
                            $equipArr = unserialize(base64_decode($gym['equipments']));
                            foreach ($equipArr as $key => $equip) {
                                echo '<ul class="list-group">
                                        <li class="list-group-item">' . $equip . '</li> 
                                </ul>';
                            }
                            echo '
                        </div>

                        <div class="service-others mb-4">
                            <h3 class="badge-light p-2 mt-4">Other Details</h3>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Opening hours
                                    <span class="badge badge-primary badge-pill"> ' . $gym['opened_at'] . ' - ' . $gym['closed_at'] . '</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Maximum capacity per session
                                    <span class="badge badge-primary badge-pill">' . $gym['full_capacity'] . '</span>
                                </li>   
                            </ul>
                        </div>';
    ?>
            <?php
            echo " <div class='capacity-sessions'>
                <h3 class='badge-light p-2 mt-4'>Capacity sessions</h3>";
                
                if (isset($_GET['id'])) {
                $sql = "SELECT * FROM gyms";
                $result = $DBconnection->query($sql) or die($DBconnection->error);
                while($row = $result->fetch_assoc()) {
                    $gymPage = $_GET['id'];
                    $gymid = $row['gym_id'];
                    if($gymid == $gymPage) {
                        $query = "SELECT * FROM capacity_schedule WHERE gym_id = '$gymPage'";
                        $sequel = $DBconnection->query($query);
                        while ($record = $sequel->fetch_assoc()) {
                            echo "<div class='card mb-4' style='width: 18rem;'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>" . $record['title'] . "</h5>
                                        <h6 class='card-subtitle mb-2 text-muted'>ksh. " . $record['price'] . "</h6>
                                        <p class='card-text'>" . $record['description'] . "</p>
                                        <form method='post' action='" . reserveCapacity($DBconnection) . "' class='d-inline'>";
                                            $sql = "SELECT * FROM users";
                                            $result = $DBconnection->query($sql);
                                            while ($row = $result->fetch_assoc()) {
                                                if (isset($_SESSION['userID'])) {
                                                    if ($_SESSION['userID'] == $row['user_id']) {
                                                        echo "
                                                            <input type='hidden' name='uid' value='" . $row['user_name'] . "'>
                                                            <input type='hidden' name='date' value='" . date('Y-m-d H:i:s') . "'>
                                                            <button type='submit' name='submit_capacity' class='btn btn-primary btn-sm'>Book <span class='ml-2'>&#8594;</span></button>";
                                                    }
                                                }
                                            }
                                        echo "</form>";
                                            echo "
                                            <a href='userScheduleSess.php?sessID=".$record['capacity_id']."' class='btn btn-sm btn-outline-primary float-right'>More</a>
                                    </div>
                                </div>
                                </div>
                            </div>";
                        }
                    }
                }
            }
      
            ?>

            <div class='container-fluid mt-4'>
                
                <table class='table mt-4'>
                    
                    <tbody>
                <?php
                
               
    }
        }
                ?>

                
            </div>
</div>


<script>
    const slideshows = document.querySelectorAll("[data-component='slideshow']");
    slideshows.forEach(initSlideShow);

    function initSlideShow(slideshow) {
        const slides = document.querySelectorAll(`#${slideshow.id} [role="list"] .slide`);
        let index = 0, time = 3000;
        slides[index].classList.add("active");

        setInterval(() => {
            slides[index].classList.remove("active");
            index++;
            if(index === slides.length) index = 0;
            slides[index].classList.add("active");
        }, time);
    }
</script>


