<?php
include 'connection.php'; // Include the connection file

$sql = "SELECT p.productID, p.product_name, p.product_quantity, p.product_price, p.product_image, 
               d.description1, d.description2, d.description3, d.size, d.material
        FROM mahogany_products p
        JOIN mahogany_product_details d ON p.product_detailsID = d.product_detailsID
        WHERE p.product_name = 'Mahogany Wood Fluted Vase'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $product_id = $row["productID"];
    $product_name = $row["product_name"];
    $product_quantity = $row["product_quantity"];
    $product_price = $row["product_price"];
    $product_image = $row["product_image"]; // Assuming product_image stores the image data or file path
    $product_description = "" . $row["description1"] . "<br>" .
                           "" . $row["description2"] . "<br>" .
                           "" . $row["description3"] . "<br><br>" .
                           "Size: " . $row["size"] . "<br>" .
                           "Material: " . $row["material"];
} else {
    echo "Product not found!";
    exit; // Exit the script if the product is not found
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admiral Dining Mahogany Chair</title>
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
        <a href="company.html">Company</a>
        <a href="log-in.php">Login</a>
        <a href="contactus.html">Contact Us</a>
    </div>

    <table class="product-css">
        <tr>
            <td>
                <img src="<?php echo $product_image; ?>" alt="Chair">
            </td>
            <td>
                <p class="product-css2"><?php echo $product_name; ?></p>
                <p>
                    <?php echo $product_description; ?>
                    <br>
                    Stock/s: <?php echo $product_quantity; ?> <br>
                    Price: &#8369;<?php echo number_format($product_price, 2); ?><br>
                </p>
                
                <form action="checkout.php" method="POST">
                    Quantity: <input type="number" name="quantity" min="1" max="50" value="1">
                    <input type="hidden" name="productID" value="<?php echo $product_id; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
                    <input type="hidden" name="product_description" value="<?php echo strip_tags($product_description); ?>">
                    <input type="hidden" name="product_quantity" value="<?php echo $product_quantity; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $product_price; ?>">

                    <div class="buttons">
                        <input type="submit" name="buy_button" value="Buy">
                        <input type="button" value="Cancel" onclick="window.location.href='index.html'">
                    </div>
                </form>
            </td>
        </tr>
    </table>
              
    <br><br><br>
    
    <hr>
    <div class="footer">
        <p> &copy;2025 John Emmanuel Sabuero . All Rights Reserved.</p>
    </div>
</body>
</html>
