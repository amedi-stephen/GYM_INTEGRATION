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
            <div>
                <?php
                    $sql = "SELECT * FROM users";
                    $result = $DBconnection->query($sql);
                    while($row = $result->fetch_assoc()) {
                        if(isset($_SESSION['userID'])) {
                            if($_SESSION['userID'] == $row['user_id']) {
                                $town = $row['user_location'];
                                $query = "SELECT * FROM gyms WHERE town = '$town'";
                                $sequel = $DBconnection->query($query);
                                if($sequel->num_rows > 0) {
                                    while($record = $sequel->fetch_assoc()) {
                                       echo " <div class='card mb-4 ' style = 'flex-grow: 4;'>
                                       <div class='card-header'>
                                           <div class='card-title'>" . strtoupper($record['gym_name']) . " - <span class='text-muted'>" . strtoupper($record["town"]) . "</span></div>
                                       </div>
                                       <div class='card-body'>
                                           <p>LOCATION: " . strtoupper($record["address"]) . "</p>
                                           <a href='viewGym.php?id=".$record['gym_id']."' class='btn btn-outline-primary text-uppercase'>View Gym <span class='ml-2'>&#8594;</span></a>
                                       </div>
                                   </div> <hr>";
                                    }
                                } else {
                                    echo "There are no gyms that match your location. Go to settings and view your profile";
                                }
                            }
                        }
                    }
                 ?>
            </div>
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
                        <?php
                            $sql = "SELECT * FROM users";
                            $result = $DBconnection->query($sql) or die("Error message: ".$DBconnection->error);
                            while($row = $result->fetch_assoc()) {
                                if(isset($_SESSION['userID'])) {
                                    if($_SESSION['userID'] == $row['user_id']) {
                                        $query = "SELECT * FROM capacity_schedule 
                                            INNER JOIN capacity_members ON capacity_schedule.capacity_id = capacity_members.capacity_id";
                                        $sequel = $DBconnection->query($query) or die("Error message: ".$DBconnection->error);
                                        while($record = $sequel->fetch_assoc()) {
                                            if($record['user_id'] == $_SESSION['userID']) {
                                                echo "<p class='d-inline'>".$record['title']."</p>
                                                <p class='float-right'>Active</p>
                                                <hr>";
                                            }
                                        }
                                    }
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


<?php
require "footer.php";
?>