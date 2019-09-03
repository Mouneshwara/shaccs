<!doctype html>
<html lang="en">
    <head>
        <?php
            include 'head.php';
        ?>
        <title>Cart | Urth</title>
        <meta name="title" content="Cart | Urth">
        <meta name="description" content="">
        <meta name="keywords" content="">
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
		<div class="wrapper">
			<div class="section cart_section">
				<div class="breadcrumb onload">
					<p><a href="">Home</a> / <a href="">My Account</a> / <a href="">Cart</a></p>
				</div>
				<h2 class="onload">Your Cart (1)</h2>
				<div class="col_70 onload">
					<div class="cart_heading">
						<div class="cart_item">
							<p>Item</p>
						</div><div class="cart_quantity">
							<p>Quantity</p>
						</div><div class="cart_price">
							<p>Price</p>
						</div><div class="cart_total">
							<p>Total</p>
						</div>
					</div>
					<div class="cart_data item1">
						<div class="cart_item">
							<div class="cart_productimage">
								<img src="<?=$baseurl;?>images/products/product1.jpg" alt="">
							</div><div class="cart_productdata">
								<p>BOX TROUSERS</p>
								<p><span>Size :</span> S</p>
								<p><span>Color :</span> <span class="cart_productcolor" style="background-color:#000;"></span></p>
							</div>
						</div><div class="cart_quantity_head_mobile">
							<div class="cart_quantity">
								<p>Quantity</p>
							</div><div class="cart_price">
								<p>Price</p>
							</div><div class="cart_total">
								<p>Total</p>
							</div>
						</div><div class="cart_quantity" id="cart_product1">
							<div class="quantity_ticker dec">
								<p>-</p>
							</div><div class="quantity_ticker main_quantity">
								<input type="text" value="1">
							</div><div class="quantity_ticker inc">
								<p>+</p>
							</div>
						</div><div class="cart_price">
							<p>&#8377; 00,000</p>
						</div><div class="cart_total">
							<p>&#8377; 00,000</p>
						</div>
						<div class="remove_item" id="item1"></div>
						<div class="wishlist_item"></div>
					</div>
					<div class="cart_data item2">
						<div class="cart_item">
							<div class="cart_productimage">
								<img src="<?=$baseurl;?>images/products/product1.jpg" alt="">
							</div><div class="cart_productdata">
								<p>BOX TROUSERS</p>
								<p><span>Size :</span> S</p>
								<p><span>Color :</span> <span class="cart_productcolor" style="background-color:#000;"></span></p>
							</div>
						</div><div class="cart_quantity_head_mobile">
								<div class="cart_quantity">
									<p>Quantity</p>
								</div><div class="cart_price">
									<p>Price</p>
								</div><div class="cart_total">
									<p>Total</p>
								</div>
						</div><div class="cart_quantity" id="cart_product2">
							<div class="quantity_ticker dec">
								<p>-</p>
							</div><div class="quantity_ticker main_quantity">
								<input type="text" value="1">
							</div><div class="quantity_ticker inc">
								<p>+</p>
							</div>
						</div><div class="cart_price">
							<p>&#8377; 00,000</p>
						</div><div class="cart_total">
							<p>&#8377; 00,000</p>
						</div>
						<div class="remove_item" id="item2"></div>
						<div class="wishlist_item"></div>
					</div>
					<div class="cart_data item3">
						<div class="cart_item">
							<div class="cart_productimage">
								<img src="<?=$baseurl;?>images/products/product1.jpg" alt="">
							</div><div class="cart_productdata">
								<p>BOX TROUSERS</p>
								<p><span>Size :</span> S</p>
								<p><span>Color :</span> <span class="cart_productcolor" style="background-color:#000;"></span></p>
							</div>
						</div><div class="cart_quantity" id="cart_product2">
							<div class="quantity_ticker dec">
								<p>-</p>
							</div><div class="quantity_ticker main_quantity">
								<input type="text" value="1">
							</div><div class="quantity_ticker inc">
								<p>+</p>
							</div>
						</div><div class="cart_price">
							<p>&#8377; 00,000</p>
						</div><div class="cart_total">
							<p>&#8377; 00,000</p>
						</div>
						<div class="remove_item" id="item3"></div>
						<div class="wishlist_item"></div>
					</div>
					<div class="cart_data item4">
						<div class="cart_item">
							<div class="cart_productimage">
								<img src="<?=$baseurl;?>images/products/product1.jpg" alt="">
							</div><div class="cart_productdata">
								<p>BOX TROUSERS</p>
								<p><span>Size :</span> S</p>
								<p><span>Color :</span> <span class="cart_productcolor" style="background-color:#000;"></span></p>
							</div>
						</div><div class="cart_quantity" id="cart_product2">
							<div class="quantity_ticker dec">
								<p>-</p>
							</div><div class="quantity_ticker main_quantity">
								<input type="text" value="1">
							</div><div class="quantity_ticker inc">
								<p>+</p>
							</div>
						</div><div class="cart_price">
							<p>&#8377; 00,000</p>
						</div><div class="cart_total">
							<p>&#8377; 00,000</p>
						</div>
						<div class="remove_item" id="item4"></div>
						<div class="wishlist_item"></div>
					</div>
				</div><div class="col_30 summery_section onload">
					<h2>Summary</h2>
					<div class="summary_data">
						<p>Subtotal</p><p>&#8377; 00,000</p>
						<p>Discount</p><p>&#8377; 000</p>
						<p>Shipping</p><p>&#8377; 00</p>
						<div class="order_finaltotal">
							<p>Order Total</p><p>&#8377; 00,000</p>
						</div>
					</div>
					<div class="button_wrap">
						<div class="button transition">
							<p>Place Order</p>
						</div><div class="button transition">
							<a href="<?=$baseurl;?>checkout/"><p>Checkout</p></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mask" style="display:block"></div>
		<div class="popup" style="display:block">
			<div class="table">
				<div class="table_cell">
					<h2 class="section_title">Friend Of Urth</h2>
					<h3>Get 10% Discount</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
		</div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>