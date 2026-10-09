<?php
// No PHP logic needed here, just include DB if you want to check connection
include('db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Business Management Dashboard</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; font-family: "Segoe UI", Arial, sans-serif; }

    body {
      background: linear-gradient(135deg, #007bff, #00bcd4);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #333;
    }

    .container {
      background: #fff;
      width: 90%;
      max-width: 900px;
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      text-align: center;
      animation: fadeIn 0.8s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      font-size: 2em;
      color: #007bff;
      margin-bottom: 10px;
    }

    p.subtitle {
      color: #555;
      font-size: 1.1em;
      margin-bottom: 30px;
    }

    .card-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .card {
      background: #f9f9f9;
      padding: 30px 20px;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }

    .icon {
      font-size: 50px;
      margin-bottom: 15px;
    }

    .expense { color: #28a745; }
    .purchase { color: #007bff; }

    a {
      text-decoration: none;
      color: inherit;
    }

    footer {
      text-align: center;
      margin-top: 30px;
      font-size: 0.9em;
      color: #666;
    }

    @media (max-width: 600px) {
      h1 { font-size: 1.5em; }
      .card { padding: 25px 15px; }
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>📊 Business Management Dashboard</h1>
    <p class="subtitle">Manage all your business expenditures and purchases in one place</p>

    <div class="card-container">

      <a href="index.php">
        <div class="card">
          <div class="icon expense">💸</div>
          <h2>Expense Tracker</h2>
          <p>Record all outgoing payments with filters and summaries.</p>
        </div>
      </a>

      <a href="view_expenses.php">
        <div class="card">
          <div class="icon expense">📄</div>
          <h2>View Expenses</h2>
          <p>See all your recorded expenses and totals per party.</p>
        </div>
      </a>

      <a href="add_purchase.php">
        <div class="card">
          <div class="icon purchase">🧾</div>
          <h2>Add Purchase Bill</h2>
          <p>Add bills or purchases to track business spending.</p>
        </div>
      </a>

      <a href="view_purchases.php">
        <div class="card">
          <div class="icon purchase">📦</div>
          <h2>View Purchases</h2>
          <p>View and filter all purchases made from any vendor.</p>
        </div>
      </a>

    </div>

    <footer>© <?php echo date('Y'); ?> Your Business Tracker | Designed by You 💼</footer>
  </div>

</body>
</html>
