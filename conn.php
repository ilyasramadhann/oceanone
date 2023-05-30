<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "ocean_one";

// Create Conn
$conn = mysqli_connect($servername, $username, $password, $database);

// Check Conn
if (!$conn) {
    die("Connection Failed :". mysqli_connect_error());
}

?>