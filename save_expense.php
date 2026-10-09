<?php
include('db_connect.php');

$party = $_POST['party_name'];
$amount = $_POST['amount'];
$date = $_POST['payment_date'];
$desc = $_POST['description'];

$sql = "INSERT INTO expenses (party_name, amount, payment_date, description)
        VALUES ('$party', '$amount', '$date', '$desc')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Expense added successfully'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
