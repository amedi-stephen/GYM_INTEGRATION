<?php
include "navigation.php";
?>

<div class="container mt-4">
    <h2 style="margin-bottom: 50px;">Employee Settings</h2>
    <div class="d-flex justify-content-between">
        <ul class='list-group' style='width: 18rem;'>
            <li class='list-group-item'><a href="employeeSettings.php"><i class="fa fa-share-alt"></i> Profile Visiblility</a></li>
            <li class='list-group-item'><a href="employeeAccount.php"><i class="fa fa-user"></i> Account Details</a></li>
        </ul>
        <div class="container border-left ml-4">
            <h2 class="mb-4">Profile Visibility</h2>
            <p>Your Gym Navigator profile represents your brand.</p>
            <form action="../includes/employeedp.inc.php" method="post" enctype="multipart/form-data">
                <div class="d-flex align-items-center align-content-center">
                    <div class="gym-profile">
                        <?php
                        $query = "SELECT * FROM gyms";
                        $result = $DBconnection->query($query);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                if (isset($_SESSION["gymID"])) {
                                    if ($_SESSION["gymID"] == $row["gym_id"]) {
                                        $gymid = $row["gym_id"];
                                        $QUERY_image = "SELECT * FROM employerimage WHERE gym_id='$gymid'";
                                        $RESULT_image = $DBconnection->query($QUERY_image);
                                        while ($row_image = $RESULT_image->fetch_assoc()) {
                                            if ($row_image["eimage_status"] == 0) {
                                                echo "<img src='../uploads/employer/profile" . $userid . ".jpg' class='p-4' style='width: 200px; height: 200px;'>";
                                            } else {
                                                echo "<img src='../uploads/default.webp' class='p-4' style='width: 200px; height: 200px;'>";
                                            }
                                        }
                                        echo "</div>
                                            <div class='form-group'>
                                                <p>Profile Display</p>
                                                <p class='text-muted'>" . ucwords($row['gym_name']) . "</p>
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


            </form>

        </div>

    </div>
</div>

<?php
require "../footer.php";
?>