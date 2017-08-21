<?php

/*conexion a la base*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siades_beta";





// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>