<?php
require "includes/dbh.inc.php";
require "navbar.php";
?>

<div class="container mt-4">
    <form action="">
        <div class=" d-flex justify-content-center">
            <div class="form-inline">
                <input type="text" name="search" class="form-control form-control-lg" placeholder="Search for gyms">
                <button type="submit" class="btn btn-primary btn-lg">Search</button>
            </div>
        </div>
    </form>
    <div class="">

        <div class="row">
            <div class="col-md-8">
                <div class="bg-light mt-4 mb-4">
                    <img src="images/dummy.jpg" alt="" style="height: 500px; width: 100%;">
                    <div class="container-fluid">
                        <button class="btn btn-primary">Like <i class="fa fa-grin-hearts"></i></button>
                        <strong>22</strong> &nbsp; - &nbsp;
                        <div class="float-right">
                            <button class="btn btn-primary">Post Comment</button>
                        </div>
                        <div class="comment-section">
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
                            <form action="">
                                <input type="text" name="" id="" class="form-control">
                                <button class="btn btn-primary"><i class="fa fa-comment"></i>Post</button>
                            </form>

                        </div>

                        <div class="text-muted">Posted by: stars gym</div>
                    </div>
                </div>


                <div class="bg-light mt-4 mb-4">
                    <img src="images/dummy.jpg" alt="" style="height: 500px; width: 100%;">
                    <div class="container-fluid">
                        <button class="btn btn-primary">Like <i class="fa fa-grin-hearts"></i></button>
                        <strong>22</strong> &nbsp; - &nbsp;
                        <div class="float-right">
                            <button class="btn btn-primary">Post Comment</button>
                        </div>
                        <div class="comment-section">
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
                            <form action="">
                                <input type="text" name="" id="" class="form-control">
                                <button class="btn btn-primary"><i class="fa fa-comment"></i>Post</button>
                            </form>

                        </div>

                        <div class="text-muted">Posted by: stars gym</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats">
                    <div class="card mt-4 mb-4">
                        <div class="card-header bg-light">
                            <h3 class="card-title">Stats</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    Images
                                </div>
                                <div class="col-md-4 text-right">
                                    2
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    Comments
                                </div>
                                <div class="col-md-4 text-right">
                                    4
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    Views
                                </div>
                                <div class="col-md-4 text-right">
                                    25
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    Likes
                                </div>
                                <div class="col-md-4 text-right">
                                    18
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header bg-light">
                            <h3 class="card-title">
                                Most Popular Images
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#"><img src="/dummyImages/asoggetti-zlPhxd5OydQ-unsplash.jpg" class="img-thumbnail" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>


<?php
require "footer.php";
?>