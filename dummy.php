<?php
include "navbar.php";
include 'includes/processSchedule.inc.php';
date_default_timezone_set('Africa/Nairobi');
?>

<div class="container mt-4 d-flex flex-column justify-content-center">
    <div class="text-center" style="margin: 20px 0;">
        <h2 class="text-center text-uppercase display-4">gym name</h2>
        <h4>"Persevearance is the key"</h4>
        <h6 class="text-muted">ksh.2000 per month || ksh.200 per session/day</h6>
    </div>
    <div class="gym-section mb-4">
        <!-- TODO: add a slideshow here on access to the internet -->
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