<?php
include "navigation.php";
?>

<?php
    $sql = "SELECT * FROM gyms";
    $result = $DBconnection->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if (isset($_SESSION['gymID'])) {
                if ($_SESSION['gymID'] == $row['gym_id']) {
                    echo "<div class='container mt-4'>
                        <div class='profile-name' style='margin-bottom: 80px;'>
                            <h1>".ucwords($row['gym_name'])."</h1>
                            <h4 class='text-muted'>Gym Navigator Member Since ".$row['created_at']."</h4>
                        </div>
                        
                        <div class='d-flex justify-content-between' style='margin-bottom: 80px;'>
                            <div>
                                <h2>Employer Benefits</h2>
                                <ul class='list-group' style='width: 25rem;'>
                                    <li class='list-group-item'><i class='fa fa-check-circle text-success'></i> Accept secure, easy payments</li>
                                    <li class='list-group-item'><i class='fa fa-check-circle text-success'></i> Fill your classes</li>
                                    <li class='list-group-item'><i class='fa fa-check-circle text-success'></i> Keep track of your members</li>
                                    <li class='list-group-item'><i class='fa fa-check-circle text-success'></i> Manage rooms and trainers</li>
                                    <li class='list-group-item'><i class='fa fa-check-circle text-success'></i> Get real-time notifications on new, rescheduled, or cancelled bookings</li>
                                    <li class='list-group-item'><i class='fa fa-check-circle text-success'></i> Your gym schedule software helps maximize class capacity and enables new visitors to book inductions 24/7.</li>
                                </ul>
                            </div>

                            <div>
                                <h2>Employer preferences</h2>
                                <form>
                                    <div class='form-group mb-4'>
                                        <label for='gym_name'>Gym Name</label>
                                        <p class='card p-2'>".$row['gym_name']."</p>
                                    </div>
                                    <p>Member's activites</p>";
                                    $classesArr = unserialize(base64_decode($row['classes']));
                                    foreach ($classesArr as $key => $class) {
                                        echo "<ul class='list-group mb-4'>
                                            <li class='list-group-item'>".$class."</li>
                                        </ul>
                                        ";
                                    }

                                    echo "
                                    <p>Gym's Classes</p>";
                                    $equipmentsArr = unserialize(base64_decode($row['equipments']));
                                    foreach ($equipmentsArr as $key => $equip) {
                                        echo "<ul class='list-group mb-4'>
                                            <li class='list-group-item'>".$equip."</li>
                                        </ul>";
                                    }
                                    echo "
                                </form>
                            
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

<?php
    include "../footer.php";
?>