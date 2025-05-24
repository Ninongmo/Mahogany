<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <link rel="stylesheet" type="text/css" href="mahoganycharm.css">
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

    <div class="transaction-css">

        <table>
            <tr>
                <th colspan="15" id="transactions">TRANSACTIONS</th>
            </tr>
            <tr>
                <th>TRANSACTION NO.</th>
                <th>DATE</th>
                <th>Cust. ID</th>
                <th>CUSTOMER NAME</th>
                <th>ADDRESS</th>
                <th>COUNTRY</th>
                <th>EMAIL ADDRESS</th>
                <th>CONTACT NUMBER</th>
                <th>PRODUCT CODE</th>
                <th>PRODUCT ORDERED</th>
                <th>QUANTITY</th>
                <th>PRICE</th>
                <th>TOTAL AMOUNT</th>
                <th>ORDER PENDING</th>
                <th>ACTION</th>
            </tr>
            
            <?php include 'fetching_transactions.php'; ?>

        </table>
    </div>

    <br><br><br><br>
    <hr>
    <div class="footer">
        <p> &copy; 2025 John Emmanuel Sabuero . All Rights Reserved. | <a id="home" href="index.html">Home</a></p>
    </div>
    
</body>
</html>