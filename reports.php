<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <link rel="stylesheet" type="text/css" href="mahoganycharm.css">
    <style>
       
        .search-container {
            display: flex;
            justify-content: flex-start;
            padding: 20px;
        }
        #searchInput {
            width: 300px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px 0 0 4px;
            outline: none;
        }
        button {
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-left: none;
            border-radius: 0 4px 4px 0;
            background-color: violet;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: purple;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color:rgb(83, 77, 77);
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .reports{
            overflow-y: auto;
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


    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search reports...">
        <button onclick="searchReports()">Search</button>
    </div>

    <div class="reports">
    <table>
        <thead>
            <tr>
                <th>Transaction Number</th>
                <th>Order Date</th>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Customer Address</th>
                <th>Customer Country</th>
                <th>Customer Email</th>
                <th>Customer Contact</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Quantity</th>
                <th>Product Price</th>
                <th>Total Amount</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody id="results">
            <!-- Search results will be inserted here -->
        </tbody>
    </table>
    </div>
    
    <br><br><br><br>
    <hr>
    <div class="footer">
        <p> &copy; 2025 John Emmanuel Sabuero . All Rights Reserved. | <a id="home" href="index.html">Home</a></p>
    </div>

    <script>
        function searchReports() {
            const query = document.getElementById('searchInput').value;
            fetch(`reports_process.php?q=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    const resultsDiv = document.getElementById('results');
                    resultsDiv.innerHTML = '';
                    if (data.length === 0) {
                        resultsDiv.innerHTML = '<tr><td colspan="14">No results found</td></tr>';
                    } else {
                        data.forEach(report => {
                            const reportRow = document.createElement('tr');
                            reportRow.innerHTML = `
                                <td>${report.transaction_number}</td>
                                <td>${report.order_date}</td>
                                <td>${report.customerID}</td>
                                <td>${report.customer_name}</td>
                                <td>${report.customer_address}</td>
                                <td>${report.customer_country}</td>
                                <td>${report.customer_email_address}</td>
                                <td>${report.customer_contact_number}</td>
                                <td>${report.productID}</td>
                                <td>${report.product_name}</td>
                                <td>${report.product_quantity}</td>
                                <td>&#8369;${report.product_price}</td>
                                <td>&#8369;${report.product_total_amount}</td>
                                <td>${report.status}</td>
                                
                            `;
                            resultsDiv.appendChild(reportRow);
                        });
                    }
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    const resultsDiv = document.getElementById('results');
                    resultsDiv.innerHTML = '<tr><td colspan="14">Error fetching data</td></tr>';
                });
        }
    </script>
    
</body>
</html>