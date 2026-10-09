<?php include('db_connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>View Purchases</title>
    <style>
        body { font-family: Arial; background-color: #f8f9fa; padding: 20px; }
        h1 { text-align: center; color: #333; }
        table { border-collapse: collapse; width: 90%; margin: auto; background: white; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #007bff; color: white; }
        form { width: 60%; margin: 20px auto; display: flex; justify-content: center; gap: 10px; }
        input[type="text"] { flex: 1; padding: 8px; }
        input[type="submit"] { background: #007bff; color: white; padding: 8px 20px; border: none; border-radius: 4px; cursor: pointer; }
        input[type="submit"]:hover { background: #0056b3; }
    </style>
</head>
<body>

<h1>📦 Purchase Records</h1>

<form method="GET">
    <input type="text" name="vendor" placeholder="Enter vendor name to filter">
    <input type="submit" value="Search">
</form>

<table>
    <tr>
        <th>ID</th>
        <th>Item Name</th>
        <th>Vendor Name</th>
        <th>Amount (₹)</th>
        <th>Date</th>
        <th>Description</th>
    </tr>

<?php
$total = 0;
if (isset($_GET['vendor']) && $_GET['vendor'] != "") {
    $vendor = $_GET['vendor'];
    $sql = "SELECT * FROM purchases WHERE vendor_name LIKE '%$vendor%' ORDER BY purchase_date DESC";
    echo "<h3 style='text-align:center;'>Showing purchases from: <u>$vendor</u></h3>";
} else {
    $sql = "SELECT * FROM purchases ORDER BY purchase_date DESC";
}

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['item_name']."</td>
            <td>".$row['vendor_name']."</td>
            <td>".$row['amount']."</td>
            <td>".$row['purchase_date']."</td>
            <td>".$row['description']."</td>
        </tr>";
        $total += $row['amount'];
    }
} else {
    echo "<tr><td colspan='6'>No purchases found</td></tr>";
}
?>

</table>

<?php
if (isset($_GET['vendor']) && $_GET['vendor'] != "") {
    echo "<h2 style='text-align:center; color:green;'>Total Purchases from $vendor: ₹$total</h2>";
}
?>

<p style="text-align:center; margin-top:20px;">
    <a href="add_purchase.php">← Back to Add Purchase</a>
</p>

</body>
</html>
