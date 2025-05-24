<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productID = $_POST['productID'];
    $description1 = $_POST['description1'];
    $description2 = $_POST['description2'];
    $description3 = $_POST['description3'];
    $product_price = $_POST['product_price'];

    // Update the product details
    $sql_details = "UPDATE mahogany_product_details 
                    SET description1 = ?, description2 = ?, description3 = ? 
                    WHERE product_detailsID = (SELECT product_detailsID FROM mahogany_products WHERE productID = ?)";
    $stmt_details = $conn->prepare($sql_details);
    $stmt_details->bind_param("sssi", $description1, $description2, $description3, $productID);

    // Update the product price
    $sql_price = "UPDATE mahogany_products 
                  SET product_price = ? 
                  WHERE productID = ?";
    $stmt_price = $conn->prepare($sql_price);
    $stmt_price->bind_param("di", $product_price, $productID);

    if ($stmt_details->execute() && $stmt_price->execute()) {
        header("Location: view.php");
        exit();
    } else {
        echo "Error updating product: " . $conn->error;
    }

    $stmt_details->close();
    $stmt_price->close();
}
$conn->close();
?>
