<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Stock</title>
    <link rel="stylesheet" type="text/css" href="mahoganycharm.css">
    <style>
        .add-stock-form {
            background-color: pink;
            padding: 20px;
            border-radius: 10px;
            width: 50%;
            margin: auto;
            text-align: center;
        }
        .add-stock-form h2 {
            text-align: center;
        }
        .add-stock-form label {
            display: block;
            margin-bottom: 10px;
        }
        .add-stock-form input[type="number"]{
            width: 50%;
            padding: 8px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .add-stock-form input[type="submit"] {
            background-color: violet;
            color: white;
            cursor: pointer;
            width: 85px;
            padding: 8px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .cancel-btn {
            padding: 10px 20px;
            background-color: #ea2100;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="header">
            <img src="logo pic/Mahogany.webp" alt="Logo Image"/>
            <h1>Mahogany</h1>
        </div>
        <hr>
    </header>

    <div class="links">
        <a href="transaction.php">Transactions</a>
        <a href="view.php">View</a>
        <a href="reports.php">Reports</a>
    </div>

    <div class="add-stock-form">
        <h2>Add Stock</h2>
        <form action="add_stock_process.php" method="post">
            <input type="hidden" name="productID" value="<?php echo $_GET['productID']; ?>">
            <label for="quantity">Quantity to Add:</label>
            <input type="number" id="quantity" name="quantity" min="1" required><br>

            <input type="submit" value="Add Stock">
            <br>
            <a href="view.php" class="cancel-btn">Cancel</a>
        </form>
    </div>

    <br><br><br><br>
    <hr>
    <div class="footer">
        <p> &copy; 2025 John Emmanuel Sabuero . All Rights Reserved. | <a id="home" href="index.html">Home</a></p>
    </div>
</body>
</html>
