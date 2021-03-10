<?php
// date_default_timezone_set('Africa/Nairobi');
include "navigation.php";
include '../includes/processSchedule.inc.php';
?>

<div class="container">
    <div class="resource-header text-center mt-4 mb-4">
        <h2 class="display-4 text-primary">Resource Planning</h2>
        <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, a.</h4>
    </div>
    <div class="resource-body">
        <div class="d-flex justify-content-center align-items-center">
        <?php
            echo "
            <form action='".setResource($DBconnection)."' method='post' style='width: 60%;' class='bg-light p-4'>
                <h4>Fill in the following details</h4>
                <div class='form-group mb-4'>
                    <label for='schedule_name'><strong>Name of schedule:</strong></label>
                    <input type='text' name='schedule_name' placeholder='Schedule Name' class='form-control'>
                </div>

                <div class='form-group mb-4'>
                    <label><strong>Days of the week on which the resource is available:</strong></label> <br>
                    <label class='form-check-label mr-4 ml-4'>
                        <input class='form-check-input' type='checkbox' name='checkWeek[]' value='sunday'>
                        Sunday
                    </label>

                    <label class='form-check-label mr-4'>
                        <input class='form-check-input' type='checkbox' name='checkWeek[]' value='monday'>
                        Monday
                    </label>

                    <label class='form-check-label mr-4'>
                        <input class='form-check-input' type='checkbox' name='checkWeek[]' value='tuesday'>
                        Tuesday
                    </label>

                    <label class='form-check-label mr-4'>
                        <input class='form-check-input' type='checkbox' name='checkWeek[]' value='wednesday'>
                        Wednesday
                    </label>

                    <label class='form-check-label mr-4'>
                        <input class='form-check-input' type='checkbox' name='checkWeek[]' value='thursday'>
                        Thursday
                    </label>

                    <label class='form-check-label mr-4'>
                        <input class='form-check-input' type='checkbox' name='checkWeek[]' value='friday'>
                        Friday
                    </label>

                    <label class='form-check-label mr-4'>
                        <input class='form-check-input' type='checkbox' name='checkWeek[]' value='saturday'>
                        Saturday
                    </label>
                </div>

                <label><strong>Opening Hours:</strong></label><br>
                <div class='form-inline mb-4'>
                    <label for='schedule_from'><strong>From: </strong></label>
                    <input type='time' name='schedule_from' class='form-control mr-4'>
                    <label for='schedule_to'><strong>To: </strong></label>
                    <input type='time' name='schedule_to' class='form-control'>
                </div>

                <div class='form-group mb-4'>
                    <label for='start'><strong>When can the appointment start:</strong></label>
                    <input type='date' name='date' class='form-control'>
                </div>

                <button type='submit' class='btn btn-primary mb-4' name='resource_submit'>Submit schedule</button>
                <p class='text-muted'>Use <a href='capacity.php'>capacity planning</a> instead</p>
            </form>
            ";
        ?>
            
        </div>
    </div>
</div>