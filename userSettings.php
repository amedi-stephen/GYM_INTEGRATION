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
            <h2 class="mb-4">Profile Visibility</h2>
            <p>Your Gym Navigator profile represents you on reviews and comments as well as across the Gym Navigator family of services.</p>
            <form action="includes/upload.inc.php" method="post" enctype="multipart/form-data">
                <div class="d-flex align-items-center align-content-center">
                    <div class="user-profile">
                        <?php
                        $QUERY_allUsers = "SELECT * FROM users";
                        $RESULT_allUsers = $DBconnection->query($QUERY_allUsers);
                        if ($RESULT_allUsers->num_rows > 0) {
                            while ($row = $RESULT_allUsers->fetch_assoc()) {
                                if (isset($_SESSION["userID"])) {
                                    if ($_SESSION["userID"] == $row["user_id"]) {
                                        $userid = $row["user_id"];
                                        $QUERY_image = "SELECT * FROM profileimg WHERE user_id='$userid'";
                                        $RESULT_image = $DBconnection->query($QUERY_image);
                                        while ($row_image = $RESULT_image->fetch_assoc()) {
                                            if ($row_image["img_status"] == 0) {
                                                echo "<img src='uploads/profile" . $userid . ".jpg' class='p-4' style='width: 200px; height: 200px;'>";
                                            } else {
                                                echo "<img src='uploads/default.webp' class='p-4' style='width: 200px; height: 200px;'>";
                                            }
                                        }
                                        echo "</div>
                                            <div class='form-group'>
                                                <p>Profile Display</p>
                                                <p class='text-muted'>" . ucwords($row['user_name']) . "</p>
                                                <input type='file' class='form-control-file mb-4' id='exampleInputFile' aria-describedby='fileHelp' name='file'>
                                                <button type='submit' class='btn btn-outline-primary' name='submit_upload'>Edit</button>
                                            </div>";
                                    }
                                }
                            }
                        } else {
                            echo "error occured";
                        }
                        ?>

                    </div>

            </form>
            <hr>
            <p>Product Review Visibility</p>
            <p>Choose how you will appear on any Nike product reviews you complete.</p>
            <form>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="private" id="privateid" value="profilestatus">
                        Private: Profile visible to only you
                    </label> <br><br>
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="social" id="privateid" value="profilestatus" checked="">
                        Social: Profile visible to friends
                    </label> <br><br>
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="public" id="privateid" value="profilestatus">
                        Public: Everyone can view profile
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="js/app.js"></script>

<?php
require "footer.php";
?>