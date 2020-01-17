<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sausis_2020"; // keturios eilutes virsuj - prisijungimas prie db

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>


