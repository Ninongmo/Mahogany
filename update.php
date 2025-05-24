<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" type="text/css" href="mahoganycharm.css">
    <style>
                .update-form label {
                    display: block;
                    margin-bottom: 5px;
                }

                .update-form input[type="text"],
                .update-form textarea {
                    width: 75%;
                    padding: 8px;
                    margin-bottom: 10px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                }

                .update-form input[type="submit"] {
                    background-color: violet;
                    width: 85px;
                    color: white;
                    padding: 8px;
                    margin-bottom: 10px;
                    border-radius: 4px;
                    box-sizing: border-box;
                    border: none;
                    cursor: pointer;
                }

                .update-form{
                    text-align: center;
                }

                .cancel-btn {
                    padding: 10px 20px;
                    background-color: #ea2100;
                    color: #fff;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                    text-decoration: none;
                    text-align: center;
                }
            </style>
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

    <div class="update-form">
        <?php
        include 'connection.php';

        if (isset($_GET['productID'])) {
            $productID = $_GET['productID'];
            $sql = "SELECT p.productID, p.product_name, p.product_price, d.description1, d.description2, d.description3 
                    FROM mahogany_products p 
                    JOIN mahogany_product_details d ON p.product_detailsID = d.product_detailsID 
                    WHERE p.productID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $productID);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>
                
                <form action="update_product.php" method="post">
                    <input type="hidden" name="productID" value="<?php echo $row['productID']; ?>">
                    <label for="product_name">Product Name:</label>
                    <input type="text" id="product_name" name="product_name" value="<?php echo $row['product_name']; ?>" disabled><br>

                    <label for="description1">Description 1:</label>
                    <textarea id="description1" name="description1"><?php echo $row['description1']; ?></textarea><br>

                    <label for="description2">Description 2:</label>
                    <textarea id="description2" name="description2"><?php echo $row['description2']; ?></textarea><br>

                    <label for="description3">Description 3:</label>
                    <textarea id="description3" name="description3"><?php echo $row['description3']; ?></textarea><br>

                    <label for="product_price">Product Price:</label>
                    <input type="text" id="product_price" name="product_price" value="<?php echo $row['product_price']; ?>"><br>

                    <input type="submit" value="Update">
                    <br><br>
                    <a href="view.php" class="cancel-btn">Cancel</a>
                </form>

                <?php
            } else {
                echo "No product found";
            }
            $stmt->close();
        }
        $conn->close();
        ?>
    </div>

    <br><br><br><br>
    <hr>
    <div class="footer">
        <p> &copy; 2025 John Emmanuel Sabuero. All Rights Reserved. | <a
