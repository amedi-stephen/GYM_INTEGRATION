<?php
include 'navigation.php';
include '../includes/processSchedule.inc.php';
?>

<div class="container">
    <?php
    if (isset($_GET['sessID'])) {
        $sessPage = $_GET['sessID'];
        $sql = "SELECT * FROM gyms";
        $my_sessions = "SELECT * FROM capacity_members";
        $result = $DBconnection->query($sql) or die("Error occurred: " . $DBconnection->error);
        $res_session = $DBconnection->query($my_sessions) or die("Error occurred: " . $DBconnection->error);
        while ($row = $result->fetch_assoc()) {
            if (isset($_SESSION['gymID'])) {
                if ($_SESSION['gymID'] == $row['gym_id']) {
                    //fetch capacity id
                   
                    // while ($cap = $res_session->fetch_assoc()) {
                    //    if($cap = $res_session->fetch_assoc()){
                    //        echo '<pre>';
                    //         var_dump($cap);
                    //        echo '</pre>';
                    //    }

                        
                    // }
                    
                    $query = "SELECT * FROM capacity_schedule";
                    $sequel = $DBconnection->query($query) or die("Error occurred: " . $DBconnection->error);
                    $record = $sequel->fetch_assoc();
                
                    echo '<span>'.$sessPage.'</span>';
                    echo '<span>'.$gymid.'</span>';
                    $sqlMembers = "SELECT * FROM capacity_members WHERE gym_id = '$gymid' AND capacity_id = '$sessPage' ";
                    $resultMembers = $DBconnection->query($sqlMembers) or die("Error occurred: " . $DBconnection->error);
                    $resultRows = $resultMembers->num_rows;
                    
                    while($my_res =  $resultMembers->fetch_assoc()){
                        echo "<div class='card mb-4 mt-4'>

                            <div class='card-header flex' style='background-color:blue;color:white;'>
                                <h5 clas='card-title'>" . $my_res['username'] . "</h5>
                            </div>
                            <div class='card-body'>
                            <h6 style='color:white'>" . $my_res['amount_paid'] . "</h6>
                                <p>" . $my_res['email'] . "</p>

                                <p> total " . $resultRows . "</p>
                                <p> total session id " . $sessPage . "</p>
                                <p> total " . $record['capacity_id'] . "</p>

                            </div>

                        
                        </div>";
                    }
                    
                   
                    // if( $sessPage ){
                    //     echo '<h1>'.$sessPage.'</h1>';
                    //     $sqlMembers = "SELECT * FROM capacity_members WHERE gym_id = '$gymid'";
                    //     $resultMembers = $DBconnection->query($sqlMembers) or die("Error occurred: " . $DBconnection->error);
                    //     $resultRows = $resultMembers->num_rows;
                        
                    //     while($my_res =  $resultMembers->fetch_assoc()){
                    //         echo "<div class='card mb-4 mt-4'>

                    //          <div class='card-header flex' style='background-color:blue;color:white;'>
                    //              <h5 clas='card-title'>" . $my_res['username'] . "</h5>
                    //          </div>
                    //          <div class='card-body'>
                    //             <h6 style='color:white'>" . $my_res['amount_paid'] . "</h6>
                    //              <p>" . $my_res['email'] . "</p>

                    //              <p> total " . $resultRows . "</p>
                    //              <p> total session id " . $sessPage . "</p>
                    //              <p> total " . $record['capacity_id'] . "</p>

                    //          </div>

                            
                    //      </div>";
                    //     }
                    // }

                    
                    
                    // while ($record = $sequel->fetch_assoc()) {
                    //     echo '<pre>';
                    //     var_dump($record);
                    //     echo '</pre>';
                    //     $sqlMembers = "SELECT * FROM capacity_members WHERE gym_id = '$gymid'";
                    //     $resultMembers = $DBconnection->query($sqlMembers) or die("Error occurred: " . $DBconnection->error);
                    //     $resultRows = $resultMembers->num_rows;
                    //     echo 'hello motto';
                    //     if ($member = $resultMembers->fetch_assoc()) {
                    //         echo "<div class='card mb-4 mt-4'>
                    //         <div class='card-header' style='background-color:blue'>
                    //             <h5 clas='card-title'>" . $record['title'] . "</h5>
                    //             <h6 class='text-muted'>" . $record['price'] . "</h6>
                    //         </div>
                    //         <div class='card-body'>
                    //             <p>" . $record['description'] . "</p>
                    //             <p class='d-inline badge-primary p-1'>" . $resultRows . " Member(s) have booked your session</p>
                    //             <p class='float-right text-muted'>" . $record['from_date'] . "</p>
                    //         </div>
                            
                    //     </div>";
                    //     }
                    // }
                    // $capacityID = $row['capacity_members_id'];
                }
            } else {
                echo "You are not logged in";
            }
        }
    } else {
        echo "Not set";
    }

    ?>
</div>