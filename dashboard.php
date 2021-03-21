<?php
require "includes/dbh.inc.php";
require "navbar.php";
?>

<div class="container mt-4">
    <form action="searchResults.php" method="post" style="margin-bottom: 80px;">
        <div class=" d-flex justify-content-center">
            <div class="form-inline">
                <input type="text" name="search" class="form-control form-control-lg" placeholder="Search for gyms">
                <button type="submit" class="btn btn-primary btn-lg" name="btn_search">Search</button>
            </div>
        </div>
    </form>

    <div class="container">
        <h2>Available Gyms</h2>
        <p>Gyms according to your current location</p>

        <div class="d-flex justify-content-between">
            <div>lorem</div>
            <div>
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Current Resource Sessions</h5>
                    </div>
                    <div class="card-body">
                        kdjgksjg;jkjsfgl
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Current Capacity Sessions</h5>
                    </div>
                    <div class="card-body">
                        kdjgksjg;jkjsfgl
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


<?php
require "footer.php";
?>