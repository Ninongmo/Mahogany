<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productID = $_POST['productID'];
    $quantity = $_POST['quantity'];

    // Perform validation if needed

    // Update the product quantity
    $sql = "UPDATE mahogany_products 
            SET product_quantity = product_quantity + ? 
            WHERE productID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $quantity, $productID);

    if ($stmt->execute()) {
        echo "Stock added successfully. <a href='view.php'>View Products</a>";
    } else {
        echo "Error adding stock: " . $conn->error;
    }

    $stmt->close();
}
$conn->close();
?>
