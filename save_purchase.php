<?php
include('db_connect.php');

$item = $_POST['item_name'];
$vendor = $_POST['vendor_name'];
$amount = $_POST['amount'];
$date = $_POST['purchase_date'];
$desc = $_POST['description'];

$sql = "INSERT INTO purchases (item_name, vendor_name, amount, purchase_date, description)
        VALUES ('$item', '$vendor', '$amount', '$date', '$desc')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Purchase added successfully'); window.location.href='add_purchase.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
