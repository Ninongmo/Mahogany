<?php
include 'connection.php';

$sql = "SELECT p.productID, p.product_image, p.product_name, 
               pd.description1, pd.description2, pd.description3, pd.size, pd.material, 
               p.product_quantity, p.product_price 
        FROM mahogany_products p 
        JOIN mahogany_product_details pd ON p.product_detailsID = pd.product_detailsID";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['productID']."</td>";
        echo "<td><img src='".$row['product_image']."' alt='Product Image'></td>";
        echo "<td>".$row['product_name']."</td>";
        echo "<td>".$row['description1']."<br>";
        echo "".$row['description2']."<br>";
        echo "".$row['description3']."<br>";
        echo "Size: ".$row['size']."<br>";
        echo "Material: ".$row['material']."</td>";
        echo "<td>".$row['product_quantity']."</td>";
        echo "<td>&#8369;".$row['product_price']."</td>";
        echo "<td>";
        echo "<style>";
        echo ".button {";
        echo "text-decoration: none;";
        echo "padding: 5px 10px;";
        echo "border-radius: 5px;";
        echo "color: white;";
        echo "}";
        echo ".button-update {";
        echo "background-color: #4CAF50;";
        echo "}";
        echo ".button-add-stock {";
        echo "background-color: #008CBA;";
        echo "}";
        echo "</style>";
        echo "<a href='update.php?productID=".$row['productID']."' class='button button-update'>Update</a>";
        echo "<br><br>";
        echo "<a href='add_stock.php?productID=".$row['productID']."' class='button button-add-stock'>Add Stock</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No products found</td></tr>";
}
$conn->close();
?>
