<?php
require "includes/dbh.inc.php";
require "navbar.php";
?>

<div class="container mt-4">
    <h2 style="margin-bottom: 50px;">Settings</h2>
    <div class="d-flex justify-content-between">
        <ul class='list-group' style='width: 18rem;'>
            <li class='list-group-item'><a href="userSettings.php"><i class="fa fa-share-alt"></i> Profile Visiblility</a></li>
            <li class='list-group-item'><a href="accountSettings.php"><i class="fa fa-user"></i> Account Details</a></li>
        </ul>
        <div class="container border-left ml-4">
            <h2 class="mb-4">Account Details</h2>
            <?php
                $sql = "SELECT * FROM users";
                $result = $DBconnection->query($sql);
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        if(isset($_SESSION['userID'])) {
                            if($_SESSION['userID'] == $row['user_id']) {
                                echo "<form style='width: 30rem' class='mb-4'>
                                    <div class='form-group mb-4'>
                                        <label for='email'>Email</label>
                                        <input type='text' class='form-control' value='".$row['user_email']."'>
                                    </div>

                                    <div class='form-group mb-4'>
                                        <label for='user'>User</label>
                                        <input type='text' class='form-control' value='".$row['user_name']."'>
                                    </div>

                                    <div class='form-group'>
                                        <label for='location'>Location</label>
                                        <input type='text' class='form-control' value='".ucfirst($row['user_location'])."'>
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

<?php
    include "footer.php";
?>