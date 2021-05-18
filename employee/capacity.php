<?php
include "navigation.php";
include '../includes/processSchedule.inc.php';
?>


<div class="container mt-4">
    <h2 style="margin-bottom: 50px;">Schedules</h2>
    <div class="d-flex justify-content-between">
        <ul class='list-group' style='width: 18rem;'>
            <li class='list-group-item'><a href="capacity.php">Create session</a></li>
            <li class='list-group-item'><a href="viewSchedule.php">view your schedules</a></li>
        </ul>
        <div class="container border-left ml-4">
            <h2 class="mb-4">Create Sessions</h2>
            <p>Create sessions for your gym that your customers can view them and book via online.</p>
            <?php
            echo "<form action='" . setCapacity($DBconnection) . "' method='post' style='width: 35rem; margin-bottom: 30px;'>
                <div class='form-group mb-4'>
                <label for='title'>Title</label>
                <input type='text' name='title' class='form-control' placeholder='Enter title'>
            </div>

            <div class='form-inline mb-4'>
                <label for='capacity_from'>From</label>
                <input type='time' name='capacity_from' class='form-control mr-4'>
                <label for='capacity_to'>To </label>
                <input type='time' name='capacity_to' class='form-control'>
            </div>

            <div class='form-group mb-4'>
                <label for='price'>Price</label>
                <input type='text' name='price' class='form-control' placeholder='ksh.'>
            </div>

            <div class='form-group mb-4'>
                <label for='description'>Description</label>
                <textarea name='description' class='form-control' rows='3' style='resize: none'></textarea>
            </div>

            <div class='form-group mb-4'>
                <label for='repeat'><strong>Repeat</strong></label>
                <select name='repeat' class='form-control'>
                    <option value='daily'>Daily</option>
                    <option value='weekends'>Weekend</option>
                    <option value='monthly'>Monthly</option>
                </select>
            </div>

            <div class='form-group mb-4'>
                <label for='capacity'>Capacity</label>
                <input type='number' name='capacity' class='form-control' placeholder='People per session'>
            </div>

            <div class='form-group mb-4'>
                <label for='instructor'>Instructor</label>
                <input type='text' name='instructor' class='form-control' placeholder='People per session'>
            </div>

            <button type='submit' name='submit_capacity' class='btn btn-primary'>Create Capacity</button>
            </form>";
            ?>
        </div>
    </div>
</div>