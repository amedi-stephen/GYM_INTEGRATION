<?php

$DBserver = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBname = "gymdb";

$DBconnection = @new mysqli($DBserver, $DBusername, $DBpassword, $DBname);

if ($DBconnection->connect_error) {
  die("Connect Error: ".$conn->connect_error);
}