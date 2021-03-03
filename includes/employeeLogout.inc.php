<?php

include "dbh.inc.php";


    session_start();
    session_unset();
    session_destroy();

    header("Location: ../employee/employeeLogin.php");
