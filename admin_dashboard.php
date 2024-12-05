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

// Check for form submission for adding a product
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['product_image'])) {
    $productName = htmlspecialchars($_POST['product_name']);
    $productPrice = htmlspecialchars($_POST['product_price']);
    $discountPrice = htmlspecialchars($_POST['discount_price']);
    $productImage = $_FILES['product_image'];

    // Handle image upload with validation
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $maxSize = 2 * 1024 * 1024; // 2 MB
    if (!in_array($productImage['type'], $allowedTypes)) {
        die("Error: Only JPG, PNG, and GIF files are allowed.");
    }
    if ($productImage['size'] > $maxSize) {
        die("Error: File size must be less than 2 MB.");
    }

    // Save image to uploads directory
    $imageName = time() . '_' . basename($productImage['name']);
    $targetDir = 'uploads/';
    $targetFile = $targetDir . $imageName;

    if (move_uploaded_file($productImage['tmp_name'], $targetFile)) {
        // Insert new product into the database
        $stmt = $conn->prepare("INSERT INTO products (name, price, discount_price,image) VALUES (?, ?, ? ,?)");
        $stmt->bind_param("ssss", $productName, $productPrice,$discountPrice, $imageName);
        $stmt->execute();
        $stmt->close();
    } else {
        die("Error: Unable to upload the file.");
    }

    // Redirect to avoid form resubmission
    header("Location: admin_dashboard.php");
    exit;
}

// Check for form submission for deleting a product
if (isset($_POST['delete_product'])) {
    $productId = (int) $_POST['product_id'];
    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $stmt->close();

    // Redirect to avoid form resubmission
    header("Location: admin_dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            transition: margin-left 0.3s ease;
        }

        /* Topbar Styling */
        .topbar {
            position: fixed;
            top: 0;
            width: 100%;
            height: 60px;
            background-color: #333;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            z-index: 1000;
        }

        .topbar h1 {
            font-size: 20px;
            margin-left: 10px;
        }

        .toggle-btn {
            background: none;
            border: none;
            cursor: pointer;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            width: 50px;
            height: 40px;
        }

        .bar {
            display: block;
            width: 100%;
            height: 4px;
            background-color: white;
            border-radius: 2px;
            transition: 0.3s;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #2196f3cc;
            padding-top: 80px;
            position: fixed;
            left: -200px;
            transition: left 0.3s ease;
        }

        .sidebar.open {
            left: 0;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 15px;
            text-decoration: none;
            font-size: 16px;
        }

        .sidebar a:hover {
            background-color: #45a049;
        }

        /* Main Content Styling */
        .main {
            margin-left: 0;
            padding: 80px 20px 20px 20px;
            width: 100%;
            transition: margin-left 0.3s ease;
        }

        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: flex-start;
        }

        .product-item {
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 200px;
        }

        .product-item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .product-item h6 {
            margin: 10px 0 5px;
            font-size: 18px;
        }

        .product-item p {
            color: #555;
        }

        form label {
            margin-top: 10px;
        }

        form input,
        form button {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <!-- Topbar -->
    <div class="topbar">
        <button class="toggle-btn" onclick="toggleSidebar()">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>

        <h1>Admin Dashboard</h1>
    </div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <a href="#">Dashboard</a>
        <a href="list_products.php">Manage Products</a>
        <a href="#">Orders</a>
        <a href="#">Settings</a>
        <a href="index.php">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main">
        <h2>Add New Product</h2>
        <form action="admin_dashboard.php" method="post" enctype="multipart/form-data">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" id="product_name" required>

            <label for="product_price">Product Price:</label>
            <input type="number" step="0.01" name="product_price" id="product_price" required>

            <label for="discount_price">discount Price:</label>
            <input type="number" step="0.01" name="discount_price" id="discount_price" required>

            <label for="product_image">Product Image:</label>
            <input type="file" name="product_image" id="product_image" required>

            <button type="submit">Add Product</button>
        </form>

        <h2>Product List</h2>
        <div class="product-grid">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="product-item">
                    <img src="<?php echo file_exists('uploads/' . $row['image']) ? 'uploads/' . $row['image'] : 'placeholder.png'; ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
                    <h6><?php echo htmlspecialchars($row['name']); ?></h6>
                    <p>$<?php echo htmlspecialchars($row['price']); ?></p>
                    <form action="admin_dashboard.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="delete_product">Delete</button>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- JavaScript to Toggle Sidebar -->
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("open");

            var main = document.querySelector(".main");
            main.style.marginLeft = sidebar.classList.contains("open") ? "200px" : "0";
        }
    </script>

</body>
</html>

<?php $conn->close(); ?>
