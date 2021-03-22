<?php
include "navigation.php";
?>

<div class="container mt-4">
    <h2 style="margin-bottom: 50px;">Settings</h2>
    <div class="d-flex justify-content-between">
        <ul class='list-group' style='width: 18rem;'>
            <li class='list-group-item'><a href="employeeSettings.php"><i class="fa fa-share-alt"></i> Profile Visiblility</a></li>
            <li class='list-group-item'><a href="employeeAccount.php"><i class="fa fa-user"></i> Account Details</a></li>
        </ul>
        <div class="container border-left ml-4">
            <h2 class="mb-4">Employee Account Details</h2>
            <?php
                $sql = "SELECT * FROM gyms";
                $result = $DBconnection->query($sql);
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        if(isset($_SESSION['gymID'])) {
                            if($_SESSION['gymID'] == $row['gym_id']) {
                                echo "<form style='width: 30rem' class='mb-4'>
                                    <div class='form-group mb-4'>
                                        <label for='email'>Gym Email</label>
                                        <input type='text' class='form-control' value='".$row['gym_email']."'>
                                    </div>

                                    <div class='form-group mb-4'>
                                        <label for='user'>Gym Name</label>
                                        <input type='text' class='form-control' value='".$row['gym_name']."'>
                                    </div>

                                    <div class='form-group'>
                                        <label for='location'>Town</label>
                                        <input type='text' class='form-control' value='".ucfirst($row['town'])."'>
                                    </div>

                                    <div class='form-group'>
                                        <label for='address'>Address</label>
                                        <input type='text' class='form-control' value='".ucfirst($row['address'])."'>
                                    </div>

                                    <div class='form-group'>
                                        <label for='phone'>Phone</label>
                                        <input type='text' class='form-control' value='".ucfirst($row['phone'])."'>
                                    </div>

                                    <div class='form-group'>
                                        <label for='open'>Opened hrs</label>
                                        <input type='text' class='form-control' value='".ucfirst($row['opened_at'])."'>
                                    </div>

                                    <div class='form-group'>
                                        <label for='close'>Closing hrs</label>
                                        <input type='text' class='form-control' value='".ucfirst($row['closed_at'])."'>
                                    </div>

                                    <div class='form-group'>
                                        <label for='cap'>Capacity</label>
                                        <input type='text' class='form-control' value='".ucfirst($row['full_capacity'])."'>
                                    </div>
                                    
                                    <button class='btn btn-primary'>Save Account</button>
                                    <button class='btn btn-danger float-right'>Delete Account</button>
                                </form>";
                            }
                        }
                    }
                } else {
                    echo "no records found";
                }
            ?>
        </div>
    </div>
</div>