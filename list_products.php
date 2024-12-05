<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'login_register');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
if (!$result) {
    die("Error fetching products: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSkt6uFuH6L/z7eorq2iPJcMlTo3HFrJKFe4mFV1MQu" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .product-list {
            width: 100%;
            border-collapse: collapse;
        }

        .product-list th,
        .product-list td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .product-list th {
            background-color: #f4f4f4;
        }

        .product-list img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
        }

        .no-products {
            text-align: center;
            color: #555;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-q3fYbHIrE6IEIeGSxZ1pA4TufrFbE5rldAwN8Pug1hl0ndMjwFlLCU5BEfj7cxv4" crossorigin="anonymous"></script>

    <h1>Product List</h1>

    <?php if ($result->num_rows > 0) { ?>
        <table class="product-list">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>discount_price</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php $counter = 1; while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $counter++; ?></td>
                        <td>
                            <img src="<?php echo file_exists('uploads/' . $row['image']) ? 'uploads/' . $row['image'] : 'placeholder.png'; ?>" alt="Product Image">
                        </td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td>$<?php echo htmlspecialchars($row['price']); ?></td>
                        <td>$<?php echo htmlspecialchars($row['discount_price']); ?></td>
                        <td><a href="edit_product.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p class="no-products">No products available.</p>
    <?php } ?>

    <?php $conn->close(); ?>

</body>
</html>
