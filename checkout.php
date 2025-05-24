<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
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
            <a href="index.html">Products</a>
            <a href="products-gallery.html">Products Gallery</a>
            <a href="company.html">Company</a>
            <a href="log-in.html">Login</a>
            <a href="contactus.html">Contact Us</a>
    </div>
<br><br>

    <div class="orderform-css">
        <table>
            <tr>
                <td colspan="5" class="align-center-orderform" id="order-css">Order Form</td>
            </tr>
            <tr>
                <td>Transaction No.:</td>
                <td><?php echo uniqid(); ?></td>
                <td>Date:</td>
                <td colspan="2"><?php echo date('Y-m-d'); ?></td>
            </tr>
            <tr>
                <td class="align-center-orderform">Product Code</td>
                <td>Name</td>
                <td class="align-right-orderform">Price</td>
                <td class="align-center-orderform">Quantity</td>
                <td class="align-right-orderform">Amount</td>
            </tr>
            <tr>
                <td class="align-center-orderform"><?php echo $_POST['productID']; ?></td>
                <td><?php echo $_POST['product_name']; ?></td>
                <td class="align-right-orderform"> &#8369;<?php echo number_format($_POST['product_price'], 2); ?></td>
                <td class="align-center-orderform"><?php echo $_POST['quantity']; ?></td>
                <td class="align-right-orderform"> &#8369;<?php echo number_format($_POST['product_price'] * $_POST['quantity'], 2); ?></td>
            </tr>
            <tr>
                <td colspan="4" class="align-right-orderform">Total</td>
                <td class="align-right-orderform">&#8369;<?php echo number_format($_POST['product_price'] * $_POST['quantity'], 2); ?></td>
            </tr>
            <form>
                <tr>
                    <td colspan="5" class="align-center-orderform"><a href="billing.php?transaction_number=<?php echo uniqid(); ?>&total_purchase=<?php echo number_format($_POST['product_price'] * $_POST['quantity'], 2); ?>&product_name=<?php echo urlencode($_POST['product_name']); ?>&product_price=<?php echo $_POST['product_price']; ?>&quantity=<?php echo $_POST['quantity']; ?>"><input id="proceed" type="button" value="Proceed"></a></td>
                </tr>
                <tr>
                    <td colspan="5" class="align-center-orderform"><a href="index.html"><input id="select-product" type="button" value="Select Product"></a></td>
                </tr>
            </form>
            
        </table>

    </div>

    <br><br>
    <hr>
    <div class="footer">
        <p>&copy; 2025 John Emmanuell Sabuero. All Rights Reserved.</p>
    </div>
        
</body>
</html>