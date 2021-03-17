<?php
include "navigation.php";
?>
<div class="container mt-4">
    <h1 class="d-inline pl-2 pr-2">Notifications</h1>
</div>
<div class="container border-right border-left mt-4 bg-light p-4">
    <!-- TODO: 
        use vanilla js to reduce the viewed notifications
    -->
    <?php
    //  TODO:
    // this means we need to add the created_at in our resource_members table columns
    $sql = "SELECT * FROM resource_schedule";
    $result = $DBconnection->query($sql);
    $resultRows = $result->num_rows;
    echo "<h4>" . $resultRows . " Tasks</h4>";
    // TODO: put a margin bottom width at the bottom of the card
    // TODO: create a date column in resource_schedule to dynamically insert where we need the date
    echo "
    <div class='card mb-4'>";
    while ($row = $result->fetch_assoc()) {
        $query = "SELECT * FROM employees";
        $sequel = $DBconnection->query($query);
        while ($gym = $sequel->fetch_assoc()) {
            if (isset($_SESSION['employerID'])) {
                if ($_SESSION['employerID'] == $row['employer_id']) {
                    echo "
                    <div class='card-body container'>
                        <h5 class='card-title d-inline text-primary text-capitalize'>
                            ".$row['resource_name']."
                        </h5>
                        <div class='float-right'>
                            <a role='button' data-toggle='tooltip' data-placement='top' title='mark as seen'><i class='fa fa-check mr-4 text-primary'></i></a>
                            <a type='button' data-toggle='tooltip' data-placement='top' title='set as priority'><i class='fa fa-flag mr-4 text-primary'></i></a>
                            <a type='button' data-toggle='tooltip' data-placement='top' title='delete'><i class='fa fa-trash text-danger'></i></a>
                        </div>
                    </div>
                    <div class='card-footer text-muted'>
                        05/06/2020
                    </div>";
                }
            }
        }
    }


    ?>
</div>
</div>



<!-- FIXME: 
tooltips in bootstrap still not working
fixed the above problem, now the tooltip is disturbing after being hovered
 -->

<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/jquery-3.5.1.min.js"></script>

<script>
    $(document).ready(function() {
        $("body").tooltip({
            selector: '[data-toggle=tooltip]'
        });
        console.log("hello world");
    });
</script>