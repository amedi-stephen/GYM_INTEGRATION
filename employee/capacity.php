<?php
include "navigation.php";
?>

<div class="container">
    <div class="capacity-header text-center mt-4 mb-4">
        <h2 class="display-4 text-primary">Capacity Planning</h2>
        <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, a.</h4>
    </div>
    <div class="capacity-body">
        <div class="d-flex justify-content-center align-items-center">
            <form action="" method="post" style="width: 60%;" class="bg-light p-4">
                <h4>Fill in the following details</h4>
                <div class="form-group mb-4">
                    <label for="title"><strong>Title: </strong></label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title">
                </div>

                <div class="form-inline mb-4">
                    <label for="title"><strong>From: </strong></label>
                    <input type="time" name="title" class="form-control mr-4">
                    <label for="title"><strong>To: </strong></label>
                    <input type="time" name="title" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label for="price"><strong>Price: </strong></label>
                    <input type="text" name="price" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label for="description"><strong>Description:</strong></label>
                    <textarea name="description" class="form-control" rows="3" style="resize: none"></textarea>
                </div>

                <div class="form-group mb-4">
                    <label for="repeat"><strong>Repeat</strong></label>
                    <select name="repeat" class="form-control">
                        <option value="daily">Daily</option>
                        <option value="weekly">Weekly</option>
                        <option value="monthly">Monthly</option>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label for="capacity"><strong>Capacity:</strong></label>
                    <input type="number" name="capacity" class="form-control">
                </div>

                <button type="submit" name="submit_capacity" class="btn btn-primary">Create Schedule</button>
            </form>
        </div>
    </div>
</div>