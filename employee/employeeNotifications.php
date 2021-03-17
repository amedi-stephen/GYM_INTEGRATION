<?php
include "navigation.php";
?>
<div class="container mt-4">
    <h1 class="d-inline pl-2 pr-2">Notifications</h1>
</div>
<div class="container border-right border-left mt-4 bg-light p-4">
    <!-- TODO: 
        use num_rows to count the number of notifications
        use vanilla js to reduce the viewed notifications
    -->
    <h4>5 Tasks</h4>
    <div class="card mb-4">
        <!-- TODO:
        resource schedule name
        floated on the left are viewed icons, set priority and delete
        on the card footer, it should show the date.
        this means we need to add the created_at in our resource_members table columns
     -->
        <div class="card-body container">
            <h5 class="card-title d-inline">
                How to beast > <span class="text-muted">Resource schedule</span>
            </h5>
            <div class="float-right">
                <a role="button" data-toggle="tooltip" data-placement="top" title="mark as seen"><i class="fa fa-eye mr-4 text-primary"></i></a>
                <a type="button" data-toggle="tooltip" data-placement="top" title="set as priority"><i class="fa fa-flag mr-4 text-primary"></i></a>
                <a type="button" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-trash text-danger"></i></a>
            </div>
        </div>
        <div class="card-footer text-muted">
            05/06/2020
        </div>
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
        $("body").tooltip({ selector: '[data-toggle=tooltip]' });
        console.log("hello world");
    });
</script>
