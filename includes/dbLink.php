<?php

// General settings
$host       = "localhost";
$database   = "user_data";
$user       = "root";
$password   = "";

$db = mysqli_connect($host, $user, $password, $database)
or die("Error: " . mysqli_connect_error());