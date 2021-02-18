<?php

$DBserver = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBname = "traindb";

$conn = @new mysqli($DBserver, $DBusername, $DBpassword, $DBname);

if ($conn->connect_error) {
  die("Connect Error: ".$conn->connect_error);
}