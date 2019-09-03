<!doctype html>
<html lang="en">
    <head>
        <?php
            include 'head.php';
        ?>
        <title>Top | Products | Urth</title>
        <meta name="title" content="Top | Products | Urth">
        <meta name="description" content="">
        <meta name="keywords" content="">
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
		<div class="wrapper">
			<div class="section">
				<div class="breadcrumb onload">
					<p><a href="">Home</a> / <a href="">Shop</a> / <a href="">Top</a> / <a href="">Blue Top</a></p>
				</div>
				<div class="product_slider onload">
					<ul class="bxslider">
						<li>
							<img class="product_zoom" src="<?=$baseurl;?>images/products/product1.jpg" alt="" data-zoom-image="<?=$baseurl;?>images/products/product1big.jpg">
						</li>
						<li>
							<img class="product_zoom" src="<?=$baseurl;?>images/products/product2.jpg" alt="" data-zoom-image="<?=$baseurl;?>images/products/product2big.jpg">
						</li>
						<li>
							<img class="product_zoom" src="<?=$baseurl;?>images/products/product1.jpg" alt="" data-zoom-image="<?=$baseurl;?>images/products/product1big.jpg">
						</li>
						<li>
							<img class="product_zoom" src="<?=$baseurl;?>images/products/product2.jpg" alt="" data-zoom-image="<?=$baseurl;?>images/products/product2big.jpg">
						</li>
					</ul>
				</div>
				<div class="section product_details block_effect">
					<div class="col_30">
						<h3>&#8377; 00,000</h3>
						<div class="action_block">
							<div class="col_30">
								<p>Size</p>
							</div><div class="col_70">
								<div class="sizes">
									<span class="transition">S</span><span class="transition selected_size">M</span><span class="transition">L</span><span class="transition">XL</span>
								</div>
							</div>
						</div>
						<p><span class="view_sizechart">View Size Chart</span></p>
						<div class="action_block">
							<div class="col_30">
								<p>Color</p>
							</div><div class="col_70">
								<div class="colors">
									<span style="background-color:#000;"></span><span style="background-color:#444;"></span><span style="background-color:#666;"></span><span style="background-color:#888;"></span><span style="background-color:#aaa;"></span><span style="background-color:#bbb;"></span>
								</div>
							</div>
						</div>
						<div class="action_block">
							<div class="col_30">
								<p>Quantity</p>
							</div><div class="col_70">
								<div id="cart_product1">
									<div class="quantity_ticker dec">
										<p>-</p>
									</div><div class="quantity_ticker main_quantity">
										<input type="text" value="1">
									</div><div class="quantity_ticker inc">
										<p>+</p>
									</div>
								</div>
							</div>
						</div>
						<div class="action_block">
							<div class="col_5">
								<p><span class="add_to_cart transition">Add To Cart</span></p>
							</div><div class="col_30">
								<div class="wishlist"></div>
							</div>
						</div>
						<div class="action_block">
							<ul class="social_shares">
								<li>
									<img src="<?=$baseurl;?>images/icons/facebook.svg" alt="">
								</li><li>
									<img src="<?=$baseurl;?>images/icons/twitter.svg" alt="">
								</li><li>
									<img src="<?=$baseurl;?>images/icons/pinterest.svg" alt="">
								</li>
							</ul>
						</div>
					</div><div class="col_70">
						<h3>Product Name</h3>
						<p>Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text seit 1500, als ein unbekannter Schriftsteller eine </p>
						<h3>Fabric Details</h3>
						<p>Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text seit 1500, als ein unbekannter Schriftsteller eine </p>
						<h3>Style Tip</h3>
						<p>Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text seit 1500, als ein unbekannter Schriftsteller eine </p>
					</div>
				</div>
			</div>
			<div class="section like_section block_effect">
				<h2>You May Also Like</h2>
				<div class="productlisting_section">
					<div class="product_block rotate_effect">
						<div class="image_wrap">
							<img src="<?=$baseurl;?>images/home/products/product1.jpg" alt="">
							<div class="overlay transition">
								<div class="table">
									<div class="table_cell">
										<p>View</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col_5">
							<h3>Box Trousers</h3>
						</div><div class="col_5 right_text">
							<p>&#8377; 00,000</p>
						</div>
					</div><div class="product_block rotate_effect">
						<div class="image_wrap">
							<img src="<?=$baseurl;?>images/home/products/product2.jpg" alt="">
							<div class="overlay transition">
								<div class="table">
									<div class="table_cell">
										<p>View</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col_5">
							<h3>Box Trousers</h3>
						</div><div class="col_5 right_text">
							<p>&#8377; 00,000</p>
						</div>
					</div><div class="product_block rotate_effect">
						<div class="image_wrap">
							<img src="<?=$baseurl;?>images/home/products/product3.jpg" alt="">
							<div class="overlay transition">
								<div class="table">
									<div class="table_cell">
										<p>View</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col_5">
							<h3>Box Trousers</h3>
						</div><div class="col_5 right_text">
							<p>&#8377; 00,000</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mask"></div>
		<div class="popup">
			<div class="table">
				<div class="table_cell">
					<h2 class="section_title">Size Chart</h2>

				</div>
			</div>
		</div>
        <?php
            include 'footer.php';
        ?>
		<script src="<?=$baseurl;?>js/zoom.js"></script>
		<script>
			$(document).ready(function() {
				$(".product_zoom").elevateZoom({
				  zoomType: "inner",
				  cursor: "crosshair"
				});
			});
		</script>
    </body>
</html>