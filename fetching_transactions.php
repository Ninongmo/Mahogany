<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['deliver'])) {
        $transactionID = $_POST['transactionID'];
        $sql = "UPDATE transactions SET status='delivered' WHERE transactionID=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $transactionID);
        $stmt->execute();
        $stmt->close();
    }
}

$sql = "SELECT t.transactionID, t.transaction_number, o.order_date, c.customerID, CONCAT(c.first_name, ' ', c.middle_name, ' ', c.last_name, ' ', c.suffix) AS customer_name, c.address AS customer_address, c.country AS customer_country, c.email AS customer_email_address, c.contact_number AS customer_contact_number, o.productID, p.product_name, o.quantity AS product_quantity, p.product_price, o.total_amount AS product_total_amount, t.status
        FROM transactions t
        INNER JOIN orders o ON t.orderID = o.orderID
        INNER JOIN customers c ON t.customerID = c.customerID
        INNER JOIN mahogany_products p ON o.productID = p.productID
        ORDER BY t.transactionID DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<style>
            .button {
                padding: 10px 15px;
                margin: 5px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            .deliver-button {
                background-color: #4CAF50;
                color: white;
            }
            
          </style>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['transaction_number']."</td>";
        echo "<td>".$row['order_date']."</td>";
        echo "<td>".$row['customerID']."</td>";
        echo "<td>".$row['customer_name']."</td>";
        echo "<td>".$row['customer_address']."</td>";
        echo "<td>".$row['customer_country']."</td>";
        echo "<td>".$row['customer_email_address']."</td>";
        echo "<td>".$row['customer_contact_number']."</td>";
        echo "<td>".$row['productID']."</td>";
        echo "<td>".$row['product_name']."</td>";
        echo "<td>".$row['product_quantity']."</td>";
        echo "<td>&#8369;".$row['product_price']."</td>";
        echo "<td>&#8369;".$row['product_total_amount']."</td>";
        echo "<td>".$row['status']."</td>";
        echo "<td>";
        if ($row['status'] == 'pending') {
            echo "<form method='POST' style='display:inline;'>
                    <input type='hidden' name='transactionID' value='".$row['transactionID']."'>
                    <button type='submit' name='deliver' class='button deliver-button'>Deliver</button>
                  </form>";
        }
        echo "</td>";
        echo "</tr>";
    }
}

$conn->close();
?>
