<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
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

    <div class="view-css">

        <table>
            <tr>
                <th colspan="7" id="view-prods">VIEW PRODUCTS</th>
            </tr>
            <tr>
                <th>PRODUCT CODE</th>
                <th>PRODUCT IMAGE</th>
                <th>PRODUCT NAME</th>
                <th>PRODUCT DESCRIPTION</th>
                <th>PRODUCT QUANTITY</th>
                <th>PRODUCT PRICE</th>
                <th>UPDATE/ADD</th>
            </tr>
        
            <?php include 'fetching_products.php'; ?>

        </table>
    </div>

    <br><br><br><br>
    <hr>
    <div class="footer">
        <p> &copy; 2025 John Emmanuel Sabuero . All Rights Reserved. | <a id="home" href="index.html">Home</a></p>
    </div>
    
</body>
</html>