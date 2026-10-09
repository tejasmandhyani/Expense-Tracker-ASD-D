<?php include('db_connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Business Expense Tracker</title>
    <style>
        body { font-family: Arial; background-color: #f8f9fa; padding: 20px; }
        h1 { text-align: center; color: #333; }
        form, table { background: white; padding: 20px; border-radius: 10px; margin: auto; width: 80%; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input, textarea, select { width: 100%; padding: 8px; margin: 6px 0; border: 1px solid #ccc; border-radius: 4px; }
        input[type="submit"] { background: #007bff; color: white; cursor: pointer; }
        input[type="submit"]:hover { background: #0056b3; }
        a { text-decoration: none; color: #007bff; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<h1>💼 Business Expense Tracker</h1>

<form action="save_expense.php" method="POST">
    <label>Party Name:</label>
    <input type="text" name="party_name" required>

    <label>Amount (₹):</label>
    <input type="number" step="0.01" name="amount" required>

    <label>Payment Date:</label>
    <input type="date" name="payment_date" required>

    <label>Description:</label>
    <textarea name="description" rows="3"></textarea>

    <input type="submit" value="Add Expense">
</form>

<p style="text-align:center; margin-top:20px;">
    <a href="view_expenses.php">View All Expenses</a>
</p>

</body>
</html>
