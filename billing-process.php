<?php
// Include the database configuration file
include_once 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $transaction_number = mysqli_real_escape_string($conn, $_POST['transaction_number']);
    $transactionDate = date('Y-m-d');
    $first_name = mysqli_real_escape_string($conn, $_POST['first-name']);
    $middle_name = mysqli_real_escape_string($conn, $_POST['middle-name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last-name']);
    $suffix = mysqli_real_escape_string($conn, $_POST['suffix']);
    $customerAddress = mysqli_real_escape_string($conn, $_POST['address']);
    $customerCountry = mysqli_real_escape_string($conn, $_POST['country']);
    $customerEmailAddress = mysqli_real_escape_string($conn, $_POST['email']);
    $customerContactNumber = mysqli_real_escape_string($conn, $_POST['contact-number']);
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $productQuantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $productPrice = mysqli_real_escape_string($conn, $_POST['product_price']);
    
    // Calculate the total amount based on product price and quantity
    $productTotalAmount = $productPrice * $productQuantity;

    // Insert data into customers table
    $customerInsertQuery = "INSERT INTO customers (first_name, middle_name, last_name, suffix, email, contact_number, address, country)
    VALUES ('$first_name', '$middle_name', '$last_name', '$suffix', '$customerEmailAddress', '$customerContactNumber', '$customerAddress', '$customerCountry')";

    if ($conn->query($customerInsertQuery) === TRUE) {
        // Get the customer ID of the newly inserted customer
        $customerID = $conn->insert_id;

        // Retrieve productID based on product name
        $productQuery = "SELECT productID, product_quantity FROM mahogany_products WHERE product_name = '$product_name'";
        $productResult = mysqli_query($conn, $productQuery);
        if ($productResult && mysqli_num_rows($productResult) > 0) {
            $productRow = mysqli_fetch_assoc($productResult);
            $productID = $productRow['productID'];
            $currentQuantity = $productRow['product_quantity'];

            // Insert data into orders table
            $orderInsertQuery = "INSERT INTO orders (order_date, customerID, productID, quantity, total_amount)
            VALUES ('$transactionDate', '$customerID', '$productID', '$productQuantity', '$productTotalAmount')";

            if ($conn->query($orderInsertQuery) === TRUE) {
                // Get the order ID of the newly inserted order
                $orderID = $conn->insert_id;

                // Insert data into transactions table
                $transactionInsertQuery = "INSERT INTO transactions (transaction_number, orderID, customerID)
                VALUES ('$transaction_number', '$orderID', '$customerID')";

                if ($conn->query($transactionInsertQuery) === TRUE) {
                    // Calculate the new quantity after the transaction
                    $newQuantity = $currentQuantity - $productQuantity;

                    // Update the product's quantity in your database
                    $updateQuery = "UPDATE mahogany_products SET product_quantity = $newQuantity WHERE productID = $productID";
                    $updateResult = mysqli_query($conn, $updateQuery);

                    if ($updateResult) {
                        header("Location: ordersuccess.html"); // Redirect to success page
                        exit;
                    } else {
                        echo "Error updating product quantity: " . mysqli_error($conn);
                    }
                } else {
                    echo "Error inserting data into transactions table: " . $conn->error;
                }
            } else {
                echo "Error inserting data into orders table: " . $conn->error;
            }
        } else {
            echo "Error: Product ID not found for product name: $product_name";
        }
    } else {
        echo "Error inserting data into customers table: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
