<?php
include "navbar.php";
include 'includes/processSchedule.inc.php';
date_default_timezone_set('Africa/Nairobi');
?>

<div class="container">
    <?php
        if(isset($_GET['sessID'])) {
            $sessPage = $_GET['sessID'];
            $sql = "SELECT * FROM users";
            $result = $DBconnection->query($sql) or die("Error occurred 1: ".$DBconnection->error);
            while($user = $result->fetch_assoc()) {
                if(isset($_SESSION['userID'])) {
                    if($_SESSION['userID'] == $user['user_id']) {
                        $userid = $user['user_id'];
                        $query = "SELECT * FROM capacity_schedule WHERE capacity_id='$sessPage'";
                        $sequel = $DBconnection->query($query) or die("Error occurred 2: ".$DBconnection->error);

                        while($row = $sequel->fetch_assoc()) {
                            
                            echo "<div class='card mt-4 mb-4'>
                                <div class='card-header'>
                                    <h5 class='card-title'>".$row['title']."</h5>
                                    <p class='text-muted'>".$row['price']."</p>
                                </div>
                                <div class='card-body'>
                                    <div class='d-flex mb-4'>
                                        <div class='bg-primary p-2'>Safe</div>
                                        <div class='bg-warning p-2'>Be Cautious</div>
                                        <div class='bg-danger p-2'>Almost Full</div>
                                    </div>
                                    <p>".$row['description']."</p>
                                    <form method='post' action='" . reserveCapacity($DBconnection) . "' class='d-inline'>
                                        <input type='hidden' name='uid' value='" . $user['user_name'] . "'>
                                        <input type='hidden' name='date' value='" . date('Y-m-d H:i:s') . "'>
                                        <button type='submit' name='submit_capacity' class='btn btn-primary btn-sm'>Book <span class='ml-2'>&#8594;</span></button>
                                    </form>";
                                    $sqlCount = "SELECT user_id FROM capacity_members";
                                    $resultCount = $DBconnection->query($sqlCount) or die("Error occurred: ".$DBconnection->error);
                                    $resultRows = $resultCount->num_rows;
                                    if($count = $resultCount->fetch_assoc()) {
                                        echo "
                                    <span class='badge badge-primary badge-pill float-right'>".$resultRows." </span>
                                    ";
                                    } 
                                    echo "  
                                    
                                </div>
                            </div>";
                        }
                    }
                }
            }

        }
    ?>
</div>