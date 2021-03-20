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
                        <div>
                            <h1>".ucwords($row['user_name'])."</h1>
                            <h4 class='text-muted'>Gym Navigation Member Since ".$row['created_at']."</h4>
                        </div>
                    </div>";
                }
            }
        }
    }
?>
