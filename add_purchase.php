<?php include('db_connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Purchase Bill</title>
    <style>
        body { font-family: Arial; background-color: #f8f9fa; padding: 20px; }
        h1 { text-align: center; color: #333; }
        form { background: white; padding: 20px; border-radius: 10px; margin: auto; width: 80%; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input, textarea { width: 100%; padding: 8px; margin: 6px 0; border: 1px solid #ccc; border-radius: 4px; }
        input[type="submit"] { background: #007bff; color: white; cursor: pointer; }
        input[type="submit"]:hover { background: #0056b3; }
        a { text-decoration: none; color: #007bff; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<h1>🧾 Add Purchase Bill</h1>

<form action="save_purchase.php" method="POST">
    <label>Item Name:</label>
    <input type="text" name="item_name" required>

    <label>Vendor Name:</label>
    <input type="text" name="vendor_name" required>

    <label>Amount (₹):</label>
    <input type="number" step="0.01" name="amount" required>

    <label>Purchase Date:</label>
    <input type="date" name="purchase_date" required>

    <label>Description:</label>
    <textarea name="description" rows="3"></textarea>

    <input type="submit" value="Add Purchase">
</form>

<p style="text-align:center; margin-top:20px;">
    <a href="view_purchase.php">View All Purchases</a> | 
    <a href="index.php">Go to Expense Tracker</a>
</p>

</body>
</html>
