
<?php
$servername = "db";
$username = "expense_user";
$password = "change_this_password";
$dbname = "expense_db";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $dbname
);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
