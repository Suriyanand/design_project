<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'login_register');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch product details if 'id' is set in the query string
$product = null;
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
    $stmt->close();
    
    if (!$product) {
        die("Product not found.");
    }
}

// Handle form submission to update the product
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $discountPrice = $_POST['discount_price'];
    $productImage = $_FILES['product_image'];
    $productId = $_POST['product_id'];
    $imageName = $product['image']; // Keep the old image by default

    // If a new image is uploaded, handle the file upload
    if (!empty($productImage['name'])) {
        $imageName = time() . '_' . basename($productImage['name']);
        $targetDir = 'uploads/';
        $targetFile = $targetDir . $imageName;

        if (move_uploaded_file($productImage['tmp_name'], $targetFile)) {
            // Optional: Delete the old image file if it exists
            $oldImage = $targetDir . $product['image'];
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
        } else {
            die("Error uploading image.");
        }
    }

    // Update product in the database
    $stmt = $conn->prepare("UPDATE products SET name = ?, price = ?,discount_price = ?, image = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $productName, $productPrice,$discountPrice, $imageName, $productId);
    if ($stmt->execute()) {
        header("Location: list_products.php?message=Product updated successfully");
        exit();
    } else {
        die("Error updating product: " . $conn->error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        form label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="number"],
        form input[type="file"],
        form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border: none;
        }

        form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Edit Product</h1>

    <?php if ($product): ?>
        <form action="edit_product.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">

            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" id="product_name" value="<?php echo htmlspecialchars($product['name']); ?>" required>

            <label for="product_price">Product Price:</label>
            <input type="number" step="0.01" name="product_price" id="product_price" value="<?php echo htmlspecialchars($product['price']); ?>" required>

            <label for="discount_price">discount price:</label>
            <input type="number" step="0.01" name="discount_price" id="discount_price" value="<?php echo htmlspecialchars($product['discount_price']); ?>" required>

            <label for="product_image">Product Image:</label>
            <input type="file" name="product_image" id="product_image">
            <p>Current Image:</p>
            <img src="uploads/<?php echo $product['image']; ?>" alt="Product Image" style="max-width: 100px; max-height: 100px;">

            <button type="submit">Update Product</button>
        </form>
    <?php else: ?>
        <p>Product not found.</p>
    <?php endif; ?>

    <?php $conn->close(); ?>
</body>
</html>
