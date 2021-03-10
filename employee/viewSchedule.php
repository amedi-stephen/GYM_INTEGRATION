<?php
    include 'navigation.php';
    include '../includes/processSchedule.inc.php';
?>

<?php
    getCapacityEmployee($DBconnection);
    getResourceEmployee($DBconnection);
?>