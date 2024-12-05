<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'login_register');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products from the database
$sql = "SELECT id, name, price, discount_price, image FROM products";
$result = $conn->query($sql);
?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>Categories</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/categories_styles.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<!-- Navbar Start -->
    <?php include 'include/navbar.php';  ?>


	<div class="fs_menu_overlay"></div>

	<!-- Hamburger Menu -->

	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						usd
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">cad</a></li>
						<li><a href="#">aud</a></li>
						<li><a href="#">eur</a></li>
						<li><a href="#">gbp</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">French</a></li>
						<li><a href="#">Italian</a></li>
						<li><a href="#">German</a></li>
						<li><a href="#">Spanish</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<!-- <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li> -->
					</ul>
				</li>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="categories.php">product</a></li>
				<li class="menu_item"><a href="#">services</a></li>
				<li class="menu_item">
					<a href="#">resources</a>
					<ul class="dropdown">
						<li><a href="#">Crop Guide</a></li>
						<li><a href="#">Soil Management</a></li>
						<li><a href="#">Weather Updates</a></li>
					</ul>
				</li>
				
				<li class="menu_item"><a href="single.php">blog</a></li>
				<li class="menu_item"><a href="contact.php">contact Us</a></li>
			</ul>
		</div>
	</div>

	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="index.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Items</a></li>
					</ul>
				</div>

				<!-- Sidebar -->
                <div class="sidebar">
                    <!-- Product Category -->
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5>Product Category</h5>
                        </div>
                        <ul class="sidebar_categories">
                            <li><a href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".pens">Seeds</a></li>
                            <li><a href="#" data-filter=".papers">Fertilizers</a></li>
                            <li><a href="#" data-filter=".notebooks">Tools & Equipment</a></li>
                            <li><a href="#" data-filter=".office-supplies">Pesticides</a></li>
                            <li><a href="#" data-filter=".writing-tools">Irrigation Systems</a></li>
                            <li><a href="#" data-filter=".other-stationery">Organic Products</a></li>
                        </ul>
                    </div>

                    <!-- Price Range Filtering -->
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5>Filter by Price</h5>
                        </div>
                        <p>
                            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range"></div>
                        <div class="filter_button">
                            <span>Filter</span>
                        </div>
                    </div>

                    <!-- Sizes -->
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5>Product Type</h5>
                        </div>
                        <ul class="checkboxes">
                            <li><input type="checkbox" data-filter=".a4"><span>Seeds</span></li>
                            <li><input type="checkbox" data-filter=".a5"><span>Fertilizers</span></li>
                            <li><input type="checkbox" data-filter=".a3"><span>Tools & Equipment</span></li>
                            <li><input type="checkbox" data-filter=".legal"><span>Pesticides</span></li>
                        </ul>
                    </div>

                    <!-- Color -->
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5>Category</h5>
                        </div>
                        <ul class="checkboxes">
                            <li><input type="checkbox" data-filter=".black"><span>Tractors</span></li>
                            <li><input type="checkbox" data-filter=".blue"><span>Fertilizers</span></li>
                            <li><input type="checkbox" data-filter=".red"><span>Seeds</span></li>
                            <li><input type="checkbox" data-filter=".green"><span>Irrigation Equipment</span></li>
                            <li><input type="checkbox" data-filter=".yellow"><span>Farm Tools</span></li>
                        </ul>
                    </div>
                </div>
                                

				<!-- Main Content -->

				<div class="main_content">

					<!-- Products -->

					<div class="products_iso">
						<div class="row">
							<div class="col">

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_top">
									<ul class="product_sorting">
										<li>
											<span class="type_sorting_text">Default Sorting</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_type">
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default Sorting</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Product Name</span></li>
											</ul>
										</li>
										<li>
											<span>Show</span>
											<span class="num_sorting_text">6</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>6</span></li>
												<li class="num_sorting_btn"><span>12</span></li>
												<li class="num_sorting_btn"><span>24</span></li>
											</ul>
										</li>
									</ul>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>of</span> 3</div>
										<div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>

								</div>

								<!-- Product Grid -->
                                <div class="product-grid">
                                    
                                <!-- Product 1 -->
                                <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="col-md-4 product-item">
                    <div class="product discount product_filter">
                        <div class="product_image">
                            <img src="uploads/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
                        </div>
                        <div class="favorite favorite_left"></div>
                        <?php if ($row['discount_price'] < $row['price']) { ?>
                            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                <span>-$<?php echo htmlspecialchars($row['price'] - $row['discount_price']); ?></span>
                            </div>
                        <?php } ?>
                        <div class="product_info">
                            <h6 class="product_name">
                                <a href="single.php?id=<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['name']); ?></a>
                            </h6>
                            <div class="product_price">
                                $<?php echo htmlspecialchars($row['discount_price']); ?>
                                <?php if ($row['discount_price'] < $row['price']) { ?>
                                    <span>$<?php echo htmlspecialchars($row['price']); ?></span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="red_button add_to_cart_button">
                        <a href="#" onclick="addToCart('<?php echo htmlspecialchars($row['name']); ?>', <?php echo htmlspecialchars($row['discount_price']); ?>)">Add to Cart</a>
                    </div>
                </div>
            <?php } ?>
                                <!-- Product 2 -->
                                
                                <!-- Product 3 -->
                                
                                <!-- Product 4 -->
                                

                                <!-- Product 5 -->
                                

                                <!-- Product 6 -->
                            
                                <!-- Product 7 -->
                                

                                <!-- Product 8 -->
                                

                                <!-- Product 9 -->
                               
                                <!-- Product 10 -->
                               
                                <!-- Product 11 -->
                                
                                <!-- Product 12 -->
                                <div class="product-item notebooks">
                                    <div class="product discount product_filter">
                                        <div class="product_image">
                                            <img src="images/15.jpg" alt="">
                                        </div>
                                        <div class="favorite favorite_left"></div>
                                        <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$5</span></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.php">ractor and Farm Equipment</a></h6>
                                            <div class="product_price">$2500.00<span>$2800.00</span></div>
                                        </div>
                                    </div>
                                    <div class="red_button add_to_cart_button"><a href="#" onclick="addToCart('ractor and Farm Equipment', 2500.00)">add to cart</a></div>
                                </div>

                                
                            </div>



                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/categories_custom.js"></script>
</body>

</html>
