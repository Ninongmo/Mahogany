<?php
header('Content-Type: application/json');
include 'connection.php';

$query = isset($_GET['q']) ? $_GET['q'] : '';

$sql = "SELECT t.transaction_number, o.order_date, c.customerID, CONCAT(c.first_name, ' ', c.middle_name, ' ', c.last_name, ' ', c.suffix) AS customer_name, c.address AS customer_address, c.country AS customer_country, c.email AS customer_email_address, c.contact_number AS customer_contact_number, o.productID, p.product_name, o.quantity AS product_quantity, p.product_price, o.total_amount AS product_total_amount, t.status AS status
        FROM transactions t
        INNER JOIN orders o ON t.orderID = o.orderID
        INNER JOIN customers c ON t.customerID = c.customerID
        INNER JOIN mahogany_products p ON o.productID = p.productID 
        WHERE t.transaction_number LIKE ? 
        OR o.order_date LIKE ? 
        OR c.customerID LIKE ? 
        OR c.first_name LIKE ? 
        OR c.middle_name LIKE ? 
        OR c.last_name LIKE ? 
        OR c.suffix LIKE ? 
        OR c.address LIKE ? 
        OR c.country LIKE ? 
        OR c.email LIKE ? 
        OR c.contact_number LIKE ? 
        OR p.product_name LIKE ? 
        OR o.quantity LIKE ? 
        OR p.product_price LIKE ? 
        OR o.total_amount LIKE ?
        OR t.status LIKE ?
        ORDER BY t.transaction_number DESC";

$stmt = $conn->prepare($sql);
$searchTerm = "%$query%";
$stmt->bind_param('ssssssssssssssss', $searchTerm, $searchTerm, $searchTerm, $searchTerm, $searchTerm, $searchTerm, $searchTerm, $searchTerm, $searchTerm, $searchTerm, $searchTerm, $searchTerm, $searchTerm, $searchTerm, $searchTerm, $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

$reports = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reports[] = $row;
    }
}

$stmt->close();
$conn->close();

echo json_encode($reports);
?>
