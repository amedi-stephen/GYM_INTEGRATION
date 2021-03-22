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
                                    <li class='list-group-item'><i class='fa fa-check-circle text-success'></i> Easy access to gyms around your town</li>
                                    <li class='list-group-item'><i class='fa fa-check-circle text-success'></i> Reserve sessions and appointments with ease</li>
                                    <li class='list-group-item'><i class='fa fa-check-circle text-success'></i> Gym Navigator events</li>
                                    <li class='list-group-item'><i class='fa fa-check-circle text-success'></i> We help keep track of your exercise journey</li>
                                </ul>
                            </div>

                            <div>
                                <h2>Employer preferences</h2>
                                <form>
                                    <div class='form-group'>
                                        <label for='goal'>Member's Goal</label>
                                        <input type='text' class='form-control' value='".$row['user_goal']."' readonly=''>
                                    </div>
                                    <div class='form-group'>
                                        <label for='goal'>Member's about</label>
                                        <p class='card p-2'>".$row['gym_name']."</p>
                                    </div>
                                    <p>Member's activites</p>";
                                    //FIXME: truncate the database, re-enter data that is under base64_encode
                                    $classesArr = @unserialize(base64_decode($row['classes']));
                                    foreach (@$classesArr as $key => $class) {
                                        echo "<ul class='list-group'>
                                            <li class='list-group-item'>".$class."</li>
                                        </ul>
                                        ";
                                    }

                                    echo "
                                    <p>Member's prefferables</p>";
                                    $equipmentsArr = @unserialize(base64_decode($row['equipments']));
                                    foreach ($equipmentsArr as $key => $equip) {
                                        echo "<ul class='list-group'>
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