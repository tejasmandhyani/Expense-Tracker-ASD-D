<?php include('db_connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>All Expenses</title>
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

<h1>📜 Expense Records</h1>

<form method="GET">
    <input type="text" name="search" placeholder="Enter party name to filter">
    <input type="submit" value="Search">
</form>

<table>
    <tr>
        <th>ID</th>
        <th>Party Name</th>
        <th>Amount (₹)</th>
        <th>Date</th>
        <th>Description</th>
    </tr>

<?php
$total = 0;
if (isset($_GET['search']) && $_GET['search'] != "") {
    $search = $_GET['search'];
    $sql = "SELECT * FROM expenses WHERE party_name LIKE '%$search%' ORDER BY payment_date DESC";
    echo "<h3 style='text-align:center;'>Showing results for: <u>$search</u></h3>";
} else {
    $sql = "SELECT * FROM expenses ORDER BY payment_date DESC";
}

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['party_name']."</td>
            <td>".$row['amount']."</td>
            <td>".$row['payment_date']."</td>
            <td>".$row['description']."</td>
        </tr>";
        $total += $row['amount'];
    }
} else {
    echo "<tr><td colspan='5'>No records found</td></tr>";
}
?>

</table>

<?php
if (isset($_GET['search']) && $_GET['search'] != "") {
    echo "<h2 style='text-align:center; color:green;'>Total Amount Paid to $search: ₹$total</h2>";
}
?>

<p style="text-align:center; margin-top:20px;">
    <a href="index.php">← Back to Add Expense</a>
</p>

</body>
</html>
