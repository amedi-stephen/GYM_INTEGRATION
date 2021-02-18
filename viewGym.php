<?php 
    require "navbar.php";
?>

<div class="container mt-4">
    <h2 class="display-4 text-primary text-center">Ultra Fit Gym</h2>
    <div class="row">
        <div class="gym-section col-md-8">
            <div class="d-flex">
                <img src="images/dummy.jpg" style="width:300px; height: 300px;" class="mr-2">
                <img src="images/dummy.jpg" style="width:300px; height: 300px;">
            </div>
            <div class="services mt-4">
            <div class="service-gender mb-4">
                    <h3 class="badge-light p-2">Gender</h3>
                    <ul class="list-group">
                        <li class="list-item">For both male and female</li>
                    </ul>
                </div>
                <div class="service-amenities mb-4">
                    <h3 class="badge-light p-2">Amenities</h3>
                    <ul class="list-group">
                        <li class="list-item">lskfs</li>
                        <li class="list-item">lskfs</li>
                        <li class="list-item">lskfs</li>
                    </ul>
                </div>
                <div class="service-classes mb-4">
                    <h3 class="badge-light p-2">Classes</h3>
                    <ul class="list-group">
                        <li class="list-item">lskfs</li>
                        <li class="list-item">lskfs</li>
                        <li class="list-item">lskfs</li>
                    </ul>
                </div>
                <div class="service-equipments mb-4">
                    <h3 class="badge-light p-2">Equipments</h3>
                    <ul class="list-group">
                        <li class="list-item">lskfs</li>
                        <li class="list-item">lskfs</li>
                        <li class="list-item">lskfs</li>
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="comment-section col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Comments</h3>
                    <!-- <p class="text-muted">Only logged in users are allowed to comment</p> -->
                </div>
                <div class="card-body">
                    <ul class="media-list">
                            <li class="media mb-2">
                            <a href="#" class="pull-left">
                                <img src="/uploads/caspar-camille-rubin-89xuP-XmyrA-unsplash.jpg" width="45" height = "45" class="mr-2">
                            </a>
                        <div class="media-body">
                        <p>This Gym equal sucks!</p>
                            <strong class="media-heading">
                                Steve
                            </strong>
                            <small class="text-muted">A minute ago</small>
                        </div>
                        </li> <hr>
                        <li class="media mb-4">
                        <a href="#" class="pull-left">
                            <img src="images/dummy.jpg" width="45" height = "45" class="mr-2">
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
                        <button class="btn btn-primary mb-4">Post Comment <i class="fa fa-comment"></i></button>
                    </form>
                </div>
            </div>
            
        </div>

    </div>

</div>