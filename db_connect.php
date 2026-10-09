<?php
$servername = "localhost"; // change to InfinityFree host later
$username = "root";        // change to your InfinityFree username
$password = "";            // change to your InfinityFree password
$dbname = "expense_db";    // your database name

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
