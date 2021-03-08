<?php
include "navigation.php";
?>

<div class="container">
    <div class="capacity-header text-center mt-4 mb-4">
        <h2 class="display-4 text-primary">Capacity Planning</h2>
        <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, a.</h4>
    </div>
    <div class="capacity-body">
        <h4>Fill in the following details</h4>
        <form action="" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title">
            </div>

            <div class="form-group">
                <label for="title">From</label>
                <input type="time" name="title">
                <label for="title">To</label>
                <input type="time" name="title">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price">
            </div>

            <div class="form-group">
                <label for="description">Title</label>
                <textarea name="description" cols="30" rows="10" style="resize: none"></textarea>
            </div>

            <div class="form-group">
                <select name="repeat">
                    <option value="daily">Daily</option>
                    <option value="weekly">Weekly</option>
                    <option value="monthly">Monthly</option>
                </select>
            </div>

            <div class="form-group">
                <label for="capacity">Capacity</label>
                <input type="number" name="capacity">
            </div>

            <button type="submit" name="submit_capacity">Create Schedule</button>
        </form>
    </div>
</div>