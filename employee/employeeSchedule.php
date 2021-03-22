<?php
include "navigation.php";
include '../includes/processSchedule.inc.php';
?>

<div class="container mt-4">
    <h2 style="margin-bottom: 50px;">Schedules</h2>
    <div class="d-flex justify-content-between">
        <ul class='list-group' style='width: 18rem;'>
            <li class='list-group-item'><a href="employeeSchedule.php">resource schedule</a></li>
            <li class='list-group-item'><a href="capacity.php">capacity schedule</a></li>
            <li class='list-group-item'><a href="viewSchedule.php">view your schedules</a></li>
        </ul>
        <div class="container border-left ml-4">
            <h2 class="mb-4">resource Scheduling</h2>
            <p> You define one or more ‘resources’, such as a person, object or location. Each resource can only be booked once per time period. For example, your clients can pick a time to come see you within the business hours you set</p>
            <?php
            echo "<form action='".setResource($DBconnection)."' method='post' style='width: 35rem; margin-bottom: 30px;'>
                    <div class='form-group mb-4'>
                        <label for='schedule_name'>Title for schedule</label>
                        <input type='text' name='schedule_name' placeholder='e.g. Diet Plannig' class='form-control'>
                    </div>

                    <div class='form-group mb-4'>
                        <label>Days of the week on which the resource is available</label> <br>
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

                        <label class='form-check-label'>
                            <input class='form-check-input' type='checkbox' name='checkWeek[]' value='friday'>
                            Friday
                        </label> <br>

                        <label class='form-check-label mr-4 ml-4'>
                            <input class='form-check-input' type='checkbox' name='checkWeek[]' value='saturday'>
                            Saturday
                        </label>
                    </div>

                    <label>Opening Hours:</label><br>
                    <div class='form-inline mb-4'>
                        <label for='schedule_from' class='mr-2'>From </label>
                        <input type='time' name='schedule_from' class='form-control mr-4'>
                        <label for='schedule_to' class='mr-2'>To </label>
                        <input type='time' name='schedule_to' class='form-control'>
                    </div>

                    <div class='form-group mb-4'>
                        <label for='start'>When can the appointment start</label>
                        <input type='date' name='date' class='form-control'>
                    </div>

                    <div class='form-group'>
                        <label for='appointer'>Name of appointer</label>
                        <input type='text' class='form-control' name='appointer' placeholder='e.g. john'>
                    </div>

                    <button type='submit' class='btn btn-primary float-right' name='resource_submit'>Schedule resource</button>
                </form>
               ";
            ?>
        </div>
    </div>
</div>


<?php
    require "../footer.php";
?>