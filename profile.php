<?php
require "includes/dbh.inc.php";
require "navbar.php";
?>


<?php
    $sql = "SELECT * FROM users";
    $result = $DBconnection->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if (isset($_SESSION['userID'])) {
                if ($_SESSION['userID'] == $row['user_id']) {
                    echo "<div class='container mt-4'>
                        <div class='profile-name' style='margin-bottom: 80px;'>
                            <h1>".ucwords($row['user_name'])."</h1>
                            <h4 class='text-muted'>Gym Navigation Member Since ".$row['created_at']."</h4>
                        </div>
                        
                        <div class='d-flex justify-content-between' style='margin-bottom: 80px;'>
                            <div>
                                <h2>Member Benefits</h2>
                                <ul class='list-group' style='width: 25rem;'>
                                    <li class='list-group-item'><i class='fa fa-check-circle text-success'></i> Easy access to gyms around your town</li>
                                    <li class='list-group-item'><i class='fa fa-check-circle text-success'></i> Reserve sessions and appointments with ease</li>
                                    <li class='list-group-item'><i class='fa fa-check-circle text-success'></i> Gym Navigator events</li>
                                    <li class='list-group-item'><i class='fa fa-check-circle text-success'></i> We help keep track of your exercise journey</li>
                                </ul>
                            </div>

                            <div>
                                <h2>Members preferences</h2>
                                <form>
                                    <div class='form-group'>
                                        <label for='goal'>Member's Goal</label>
                                        <input type='text' class='form-control' value='to gain weight' readonly=''>
                                    </div>
                                    <div class='form-group'>
                                        <label for='goal'>Member's about</label>
                                        <p class='card p-2'>lkjsf slkfj lskfjlksjflk</p>
                                    </div>
                                    <p>Member's activites</p>
                                    <ul class='list-group'>
                                        <li class='list-group-item'>skjfl</li>
                                    </ul>

                                    <p>Member's prefferables</p>
                                    <ul class='list-group'>
                                        <li class='list-group-item'>skjfl</li>
                                    </ul>
                                </form>
                            
                                <p>Member's activities</p>
                                <p>Member's preferrables</p>
                            </div>
                        </div>

                        <div>
                            <p class='text-center'>Go to <a href='userSettings.php'>settings</a> to create your profile</p>
                        </div>
                    </div>";
                }
            }
        }
    }
?>
