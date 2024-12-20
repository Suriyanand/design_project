<!DOCTYPE html>
<html lang="en">
<head>
<title>Agree LAND</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Purple Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<!-- Navbar Start -->
    <?php include 'include/navbar.php';  ?>
	
	<div class="fs_menu_overlay"></div>
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
				<li class="menu_item"><a href="#">Home</a></li>
				<li class="menu_item"><a href="categories.php">product</a></li>
				<li class="menu_item"><a href="#">services</a></li>
				<li class="menu_item">
					<a href="#">Resources</a>
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

	<!-- Slider -->

	<div class="main_slider" style="background-image:url(images/1.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>Seasonal Harvest Offers 2024</h6>
						<h1>Up to 40% Off Farming Essentials</h1>
						<div class="red_button shop_now_button"><a href="#">Explore Now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="main_slider" style="background-image:url(images/5.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>Exclusive Harvest Collection 2024</h6>
						<h1>50% Off on First Order for Farmers</h1>
						<div class="red_button shop_now_button"><a href="categories.php">Explore now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="main_slider" style="background-image:url(images/8.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>Holiday Harvest Collection 2024</h6>
						<h1>Get Free Shipping on Orders Over $50 for Farmers</h1>
						<div class="red_button shop_now_button"><a href="categories.php">Explore now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Banner -->

	<div class="banner">
		<div class="container">
			<div class="col text-center">
				<div class="section_title new_arrivals_title">
					<h2>Freshly Harvested: New Arrivals</h2>
				</div>
			</div>
			<div id="deal1"class="owl-carousel row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/1.jpg)">
						<div class="banner_category">
							<a href="categories.php">Farm Notebooks</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/2.jpg)">
						<div class="banner_category">
							<a href="categories.php">Farm Daily Planner</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/3.jpg)">
						<div class="banner_category">
							<a href="categories.php">Farmhouse Wall Decor</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Framers Products</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">All</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".notebooks">Seeds</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".pens">Tractors</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".folders">Fertilizers</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".art-supplies">Irrigation Systems</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".office-supplies">Harvesters</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
	
						<!-- Product 1 -->
						<div class="product-item notebooks">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="images/5.jpg" alt="">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Premium Vegetable Seeds</a></h6>
									<div class="product_price">$15.00<span>$20.00</span></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button">
								<a href="#" onclick="addToCart('Classic Hardcover Notebook', 15.00)">add to cart</a>
							</div>
						</div>
	
						<!-- Product 2 -->
						<div class="product-item pens">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/6.jpg" alt="">
								</div>
								<div class="favorite"></div>
								<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Organic Fertilizer Pack</a></h6>
									<div class="product_price">$10.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button">
								<a href="#" onclick="addToCart('Premium Ballpoint Pen Set', 10.00)">add to cart</a>
							</div>
						</div>
	
						<!-- Product 3 -->
						<div class="product-item folders">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/7.jpg" alt="">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Eco-friendly Seed Storage Folder/a></h6>
									<div class="product_price">$5.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button">
								<a href="#" onclick="addToCart('A4 Document Folder', 5.00)">add to cart</a>
							</div>
						</div>
	
						<!-- Product 4 -->
						<div class="product-item art-supplies">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/8.jpg" alt="">
								</div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Garden Marking </a></h6>
									<div class="product_price">$25.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button">
								<a href="#" onclick="addToCart('Acrylic Paint Set', 25.00)">add to cart</a>
							</div>
						</div>
	
						<!-- Product 5 -->
						<div class="product-item office-supplies">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/9.jpg" alt="">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Farm Tool Organizer Set</a></h6>
									<div class="product_price">$30.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button">
								<a href="#" onclick="addToCart('Desk Organizer Set', 30.00)">add to cart</a>
							</div>
						</div>
	
						<!-- Product 6 -->
						<div class="product-item notebooks">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="images/10.jpg" alt="">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$5</span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="#single.php">Fields </a></h6>
									<div class="product_price">$8.00<span>$13.00</span></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button">
								<a href="#" onclick="addToCart('Spiral Notebook', 8.00)">add to cart</a>
							</div>
						</div>
	
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- Deal of the week -->

	<div class="deal_ofthe_week">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="deal_ofthe_week_img">
						<img src="images/12.jpg" alt="">
					</div>
				</div>
				<div class="col-lg-6 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
						<div class="section_title">
							<h2>Deal Of The Week</h2>
						</div>
						<ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="day" class="timer_num">03</div>
								<div class="timer_unit">Day</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="hour" class="timer_num">15</div>
								<div class="timer_unit">Hours</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="minute" class="timer_num">45</div>
								<div class="timer_unit">Mins</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="second" class="timer_num">23</div>
								<div class="timer_unit">Sec</div>
							</li>
						</ul>
						<div class="red_button deal_ofthe_week_button"><a href="categories.php">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Best Sellers -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Best Sellers</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							<!-- Slide 1 -->

							<div class="owl-item product_slider_item">
								<div class="product-item">
									<div class="product discount">
										<div class="product_image">
											<img src="images/11.jpg" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Premium Organic Fertilizer - 50kg Bag</a></h6>
											<div class="product_price">$520.00<span>$590.00</span></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 2 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/2.jpg" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Smart Farm Management App - Subscription</a></h6>
											<div class="product_price">$610.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 3 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/5.jpg" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Automatic Drip Irrigation System for Small Farms</a></h6>
											<div class="product_price">$120.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 4 -->

							<div class="owl-item product_slider_item">
								<div class="product-item accessories">
									<div class="product">
										<div class="product_image">
											<img src="images/7.jpg" alt="">
										</div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">High-Quality Corn Seeds - 1kg Pack</a></h6>
											<div class="product_price">$410.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 5 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women men">
									<div class="product">
										<div class="product_image">
											<img src="images/11.jpg" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Premium Agricultural Headphones - Noise-Canceling, Perfect for Farm Work 	</a></h6>
											<div class="product_price">$180.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 6 -->

							<div class="owl-item product_slider_item">
								<div class="product-item accessories">
									<div class="product discount">
										<div class="product_image">
											<img src="images/2.jpg" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Heavy-Duty Tractor Seat Cushion -</a></h6>
											<div class="product_price">$520.00<span>$590.00</span></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 7 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/8.jpg" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Smart Weather Station</a></h6>
											<div class="product_price">$610.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 8 -->

							<div class="owl-item product_slider_item">
								<div class="product-item accessories">
									<div class="product">
										<div class="product_image">
											<img src="images/1.jpg" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Farm Broadcast Microphone - Clear Communication for Farm Operations</a></h6>
											<div class="product_price">$120.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 9 -->

							<div class="owl-item product_slider_item">
								<div class="product-item men">
									<div class="product">
										<div class="product_image">
											<img src="images/9.jpg" alt="">
										</div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">DThermal Label Printer - Ideal for Labeling Seeds, Harvests, and Equipment</a></h6>
											<div class="product_price">$410.00</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 10 -->

							<div class="owl-item product_slider_item">
								<div class="product-item men">
									<div class="product">
										<div class="product_image">
											<img src="images/6.jpg" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Focused Work on the Farm</a></h6>
											<div class="product_price">$180.00</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Slider Navigation -->

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Free Shipping on All Orders Over $50</h6>
							<p>Get your farming tools and supplies delivered directly to your farm, with no extra cost for shipping on qualifying orders.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cach on delivery</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 days return</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>opening all week</h6>
							<p>8AM - 09PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blogs -->

	<div class="blogs">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Latest Blogs</h2>
					</div>
				</div>
			</div>
			<div class="row blogs_container">
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/14.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2024</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/15.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2024</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/12.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2024</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Argi News</h4>
						<p>Subscribe to our newsletter and receive the latest updates on farming techniques, crop management, and exclusive offers for your agricultural needs.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	 <!-- Footer Start -->
	 <?php include 'include/footer.php';  ?>
    <!-- Footer End -->


</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
