<?php

include "dbh.inc.php";

// if(isset($_POST["submit_logout"])) {
    session_start();
    session_unset();
    session_destroy();

    header("Location: ../index.php");
// }