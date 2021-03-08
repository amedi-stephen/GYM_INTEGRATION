<?php
include "navigation.php";
?>

<div class="container">
    <div class="resource-header text-center mt-4 mb-4">
        <h2 class="display-4 text-primary">Resource Planning</h2>
        <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, a.</h4>
    </div>
    <div class="resource-body">
        <h4>Fill in the following details</h4>
        <form action="" method="post" style="width: 60%;" class="bg-light">
            <div class="form-group">
                <label for="schedule_name">Name of schedule</label>
                <input type="text" name="schedule_name" class="form-control">
            </div>

            <div class="form-check">
                
                <label class="form-check-label mr-4">
                    <input class="form-check-input" type="checkbox">
                    Sunday
                </label>

                <label class="form-check-label mr-4">
                    <input class="form-check-input" type="checkbox">
                    Monday
                </label>

                <label class="form-check-label mr-4">
                    <input class="form-check-input" type="checkbox">
                    Tuesday
                </label>

                <label class="form-check-label mr-4">
                    <input class="form-check-input" type="checkbox">
                    Wednesday
                </label>

                <label class="form-check-label mr-4">
                    <input class="form-check-input" type="checkbox">
                    Thursday
                </label>

                <label class="form-check-label mr-4">
                    <input class="form-check-input" type="checkbox">
                    Friday
                </label>

                <label class="form-check-label mr-4">
                    <input class="form-check-input" type="checkbox">
                    Saturday
                </label>
            </div>

            <div class="form-group">
                opening hours<br><br>
                <label for="schedule_from">From</label>
                <input type="time" name="schedule_from">
                <label for="schedule_to">From</label>
                <input type="time" name="schedule_to">
            </div>

            <div class="form-group">
                <label for="start">When can appointments start</label>
                <input type="date" name="date" id="">
            </div>

            <button type="submit">Submit schedule</button>
            <p class="text-muted">Go to <a href="capacity.php">capacity planning</a> instead</p>
        </form>
    </div>
</div>