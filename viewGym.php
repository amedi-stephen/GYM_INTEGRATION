<?php
include "navbar.php";
include 'includes/processSchedule.inc.php';
date_default_timezone_set('Africa/Nairobi');
?>

<div class="container-fluid mt-4">
    <?php
    if (isset($_GET['id'])) {
        $id = $DBconnection->real_escape_string($_GET['id']);
        $query = "SELECT * FROM gyms WHERE gym_id='$id'";
        $result = $DBconnection->query($query);

        if ($gym = $result->fetch_assoc()) {
            echo '
            <h2 class="display-4 text-center" style="margin-bottom: 80px;">' . strtoupper($gym['gym_name']) . '</h2>
            <div class="row">
    
                <div class="gym-section col-md-8">
                    <div class="d-flex justify-content-between">
                        <img src="images/dummy.jpg" style="width:300px; height: 300px;" class="mr-2">
                        <img src="images/dummy.jpg" style="width:300px; height: 300px;">
                    </div>
                    <div class="services mt-4">
                    
                    <div class="service-amenities mb-4">
                        <h3 class="badge-light p-2">Amenities</h3>';
                        $amenitiesArr = unserialize($gym['amenities']);
                        foreach ($amenitiesArr as $key => $item) {
                            echo '
                                <ul class="list-group">
                                <li class="list-group-item">' . $item . '</li> 
                            </ul>
                                ';
                        }

                    echo '
                        
                    </div>
                    <div class="service-classes mb-4">
                        <h3 class="badge-light p-2">Classes</h3>';
                    $classesArr = unserialize($gym['classes']);
                    foreach ($classesArr as $key => $class) {
                        echo '
                            <ul class="list-group">
                            <li class="list-group-item">' . $class . '</li> 
                        </ul>
                            ';
                    }
                    echo '
                    </div>
                    <div class="service-equipments mb-4">
                        <h3 class="badge-light p-2">Equipments</h3>';
                    $equipArr = unserialize($gym['equipments']);
                    foreach ($equipArr as $key => $equip) {
                        echo '
                            <ul class="list-group">
                                <li class="list-group-item">' . $equip . '</li> 
                            </ul>
                            ';
                    }
                    echo '
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
                echo "
                <h3 class='badge-light p-2 mt-4'>Capacity sessions</h3>
                <div class='float-right'>";
               
               $query = 'SELECT * FROM capacity_schedule';
               $sequel = $DBconnection->query($query);
               while($record = $sequel->fetch_assoc()) {
                //    TODO: how can we make it display only an employers/gym shedule
                if($_GET['id']) {
                    echo "
                    <div class='card mb-4' style='width: 18rem;'>
                    <div class='card-body'>
                    <h5 class='card-title'>".$record['title']."</h5>
                        <h6 class='card-subtitle mb-2 text-muted'>ksh. ".$record['price']."</h6>
                        <p class='card-text'>".$record['description']."</p>
                        <form method='post' action='".reserveCapacity($DBconnection)."' class='d-inline'>";
                            $sql = "SELECT * FROM users";
                            $result = $DBconnection->query($sql);
                            while($row = $result->fetch_assoc()) {
                                if(isset($_SESSION['userID'])) {
                                    // TODO: in resource sessions, put default values of usernames just as this
                                    // TODO: put a date created column in capacity_schedule for users booking
                                    // TODO: add user phone numbers, but for now lets submit the following details
                                    if($_SESSION['userID'] == $row['user_id']) {
                                        // FIXME: a lot of data redundancy during a single submission
                                        // FIXME: also, when you book the other capacity schedules, it still submits the first id number
    
                                        echo "
                                        <input type='hidden' name='uid' value='".$row['user_name']."'>
                                        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                                        <button type='submit' name='submit_capacity' class='btn btn-primary'>Book <span class='ml-2'>&#8594;</span></button>
                                        ";
                                    }  else {
                                        echo "<button type='button' class='btn btn-primary' disabled>Book <span class='ml-2'>&#8594;</span></button>";
                                    }
                                }
                            }
                            // TODO: Find a way to calculate if a user books, the number gets added
                            // ideas include using AJAX for data update without reloading the page
                            echo "
                        </form>
                        <span class='badge badge-pill badge-primary float-right p-2'>1/".$record['max_pple']."</span>
                    </div>
                    </div>
                    </div>";
                    
                }
               }
            ?>

            <div class='container-fluid'>
                <h3 class='badge-light p-2 mt-4'>Resource sessions</h3>
                <table class='table'>
                    <thead>
                        <tr>
                            <th scope='col'>Resource Name</th>
                            <th scope='col'>Starting Date</th>
                            <th scope='col'>Opening hrs</th>
                            <th scope='col'>Closing hrs</th>
                            <th scope='col'>Book Session</th>
                        <tr>
                    </thead>
                    <tbody>
                <?php
                if (isset($_GET['id'])) {
                    $sql = "SELECT * FROM resource_schedule";
                    $result = $DBconnection->query($sql);
                    if ($result) {
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // TODO: the other buttons are not showing the modal
                                echo "
                                        <tr>
                                            <td>" . $row['resource_name'] . "</td>
                                            <td>" . $row['start_appointment'] . "</td>
                                            <td>" . $row['opening_hrs'] . "</td>
                                            <td>" . $row['closing_hrs'] . "</td>
                                            <td>
                                                <a href='javascript:void(0)' class='btn btn-primary btn-sm modal-btn'>Book session <span class='ml-2'>&#8594;</span></a>
                                            </td>
                                        <tr>";
                            }
                        } else {
                            echo "No record found";
                        }
                    }
                }
                echo "
            </tbody>
            </table>
            
        </div>
        
        </div>
    </div>";
            }
        } else {
            echo "no got staff";
        }
                ?>

                <div class="comment-section col-md-4 float-right">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Comments</h3>
                        </div>
                        <div class="card-body">
                            <ul class="media-list">
                                <li class="media mb-2">
                                    <a href="#" class="pull-left">
                                        <img src="/uploads/caspar-camille-rubin-89xuP-XmyrA-unsplash.jpg" width="45" height="45" class="mr-2">
                                    </a>
                                    <div class="media-body">
                                        <p>This Gym equal sucks!</p>
                                        <strong class="media-heading">
                                            Steve
                                        </strong>
                                        <small class="text-muted">A minute ago</small>
                                    </div>
                                </li>
                                <hr>
                                <li class="media mb-4">
                                    <a href="#" class="pull-left">
                                        <img src="images/dummy.jpg" width="45" height="45" class="mr-2">
                                    </a>
                                    <div class="media-body">
                                        <p>Always crowded with no air conditioning</p>
                                        <strong class="media-heading">
                                            Jane
                                        </strong>
                                        <small class="text-muted">A minute ago</small>
                                    </div>
                                </li>
                            </ul>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="name"><strong>Name:</strong></label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name"><strong>Email:</strong></label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="comment"><strong>Comment:</strong></label>
                                    <textarea name="comment" class="form-control"></textarea>
                                </div>
                                <button class="btn btn-primary mb-4 disabled">Post Comment <i class="fa fa-comment"></i></button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
</div>

<div class="modal-overlay mb-4">

    <div class="modal-container container bg-light p-4" style="width: 40%;">
        <div class="header p-2">
            <h3 class="d-inline">Book a session</h3>
            <button class="float-right close-btn btn btn-danger btn-sm">
                <i class="fa fa-times"></i>
            </button>
        </div>

        <div class="modal-content">
            <?php
            echo "<form class='container' method='post' action='" . reserveResource($DBconnection) . "'>
                <div class='form-group'>
                    <label for='name'>Full Name</label>
                    <input type='text' name='name' id='fullName' class='form-control'>
                </div>
                <div class='form-group'>
                    <label for='number'>Phone Number</label>
                    <input type='text' name='number' id='phoneNumber' class='form-control'>
                </div>
                <button type='submit' name='resource_reserve' class='btn btn-primary mb-2'>Create Rerservation</button>
            </form>";
            ?>
        </div>
    </div>
</div>


<script>
    // FIXME: only the single button is showing the modal, we need to use querySelectorAll and loop them
    const openBtn = document.querySelector(".modal-btn");
    const modalOverlay = document.querySelector(".modal-overlay");
    const closeBtn = document.querySelector(".close-btn");

    openBtn.addEventListener('click', openModal);
    closeBtn.addEventListener('click', closeModal);


    function openModal() {
        modalOverlay.classList.add('open-modal');
    }

    function closeModal() {
        modalOverlay.classList.remove('open-modal');
    }
</script>