<!doctype html>
<html lang="en">
    <head>
        <?php
            include 'head.php';
        ?>
        <title>Checkout | Urth</title>
        <meta name="title" content="Checkout | Urth">
        <meta name="description" content="">
        <meta name="keywords" content="">
    </head>
    <body class="checkout_body">
		<div class="checkout_logo">
			<a href="<?=$baseurl;?>"><img src="<?=$baseurl;?>images/logo.png" alt=""></a>
		</div>
		<div class="checkout_wrapper">
			<div class="checkout_tabs">
				<div class="col_3 transition active_step">
					<a href="<?=$baseurl;?>checkout/"><span><label>1</label></span></a>
					<h3>customer Information</h3>
				</div><div class="col_3 transition">
					<span><label>2</label></span>
					<h3>Payment Method</h3>
				</div>
			</div>
			<div class="checkout_section">
				<div class="col_5 main_col5">
					<form>
						<div class="checkout_steps checkout_step1">
							<div class="sameshipping_address">
								<div class="form_element col_5">
									<input type="text" value="John">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter first name</span>
									</div>
								</div><div class="form_element col_5 right_form_element">
									<input type="text" value="Smith">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter last name</span>
									</div>
								</div>
								<div class="form_element">
									<input type="text" value="johnsmith@gmail.com">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter Email Address</span>
										<span>Please enter valid Email Address</span>
									</div>
								</div>
								<div class="form_element">
									<input type="text" value="919800000000">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter Phone Number</span>
										<span>Please enter valid Phone Number</span>
									</div>
								</div>
								<div class="form_element col_5">
									<input type="text" placeholder="Address Line 1">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter address line 1</span>
									</div>
								</div><div class="form_element col_5 right_form_element">
									<input type="text" placeholder="Address Line 2">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter address line 2</span>
									</div>
								</div>
								<div class="form_element col_5">
									<input type="text" placeholder="Country">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter Country</span>
									</div>
								</div><div class="form_element col_5 right_form_element">
									<input type="text" placeholder="State">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter State</span>
									</div>
								</div>
								<div class="form_element col_5">
									<input type="text" placeholder="City">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter City</span>
									</div>
								</div><div class="form_element col_5 right_form_element">
									<input type="text" placeholder="Zip/Postal Code">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter Zip/Postal Code</span>
									</div>
								</div>
							</div>
							<div class="diffshipping_address">
								<div class="form_element col_5">
									<input type="text" placeholder="First Name">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter first name</span>
									</div>
								</div><div class="form_element col_5 right_form_element">
									<input type="text" placeholder="Last Name">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter last name</span>
									</div>
								</div>
								<div class="form_element">
									<input type="text" placeholder="Email Address">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter Email Address</span>
										<span>Please enter valid Email Address</span>
									</div>
								</div>
								<div class="form_element">
									<input type="text" placeholder="Phone Number">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter Phone Number</span>
										<span>Please enter valid Phone Number</span>
									</div>
								</div>
								<div class="form_element col_5">
									<input type="text" placeholder="Address Line 1">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter address line 1</span>
									</div>
								</div><div class="form_element col_5 right_form_element">
									<input type="text" placeholder="Address Line 2">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter address line 2</span>
									</div>
								</div>
								<div class="form_element col_5">
									<input type="text" placeholder="Country">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter Country</span>
									</div>
								</div><div class="form_element col_5 right_form_element">
									<input type="text" placeholder="State">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter State</span>
									</div>
								</div>
								<div class="form_element col_5">
									<input type="text" placeholder="City">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter City</span>
									</div>
								</div><div class="form_element col_5 right_form_element">
									<input type="text" placeholder="Zip/Postal Code">
									<span class="line_effect transition"></span>
									<div class="error">
										<span>Please enter Zip/Postal Code</span>
									</div>
								</div>
							</div>
							<div class="form_element radio_element">
								<input type="checkbox" name="sameaddress" id="sameaddress" value="sameaddress" checked>
								<label for="sameaddress">My shipping and billing information is the same</label>
								<div class="check"></div>
								<div class="error">
									<span>Incorrect Combination</span>
								</div>
							</div>
							<div class="form_element">
								<input type="button" value="PROCEED TO PAYMENT" id="checkout_step2" class="checkout_click">
								<div class="error">
									<span></span>
								</div>
							</div>
						</div>
						<div class="checkout_steps checkout_step2">
							<div class="form_element">
								<input type="radio" name="paymenymethod" id="onlinepayment" value="onlinepayment" checked>
								<label for="onlinepayment">Online Payment</label>
								<div class="check"></div>
							</div>
							<div class="form_element">
								<input type="radio" name="paymenymethod" id="cod" value="cod">
								<label for="cod">COD</label>
								<div class="check"></div>
							</div>
							<div class="error">
								<span></span>
							</div>
							<div class="form_element">
								<input type="button" value="PROCEED TO PAY">
								<div class="error">
									<span></span>
								</div>
							</div>
						</div>
					</form>
				</div><div class="col_5 main_col5">
					<h2>Order Summary</h2>
					<div class="cart_data">
						<div class="cart_item">
							<div class="cart_productimage">
								<img src="<?=$baseurl;?>images/products/product1.jpg" alt="">
							</div><div class="cart_productdata">
								<p>BOX TROUSERS</p>
								<p><span>Size :</span> S</p>
								<p><span>Color :</span> <span class="cart_productcolor" style="background-color:#000;"></span></p>
							</div>
						</div><div class="cart_quantity" id="cart_product2">
							<p>Quantity</p>
							<div class="quantity_ticker dec">
								<p>-</p>
							</div><div class="quantity_ticker main_quantity">
								<input type="text" value="1">
							</div><div class="quantity_ticker inc">
								<p>+</p>
							</div>
						</div><div class="cart_price">
							<p>Price</p>
							<p>&#8377; 00,000</p>
						</div>
					</div>
					<div class="cart_data">
						<div class="cart_item">
							<div class="cart_productimage">
								<img src="<?=$baseurl;?>images/products/product1.jpg" alt="">
							</div><div class="cart_productdata">
								<p>BOX TROUSERS</p>
								<p><span>Size :</span> S</p>
								<p><span>Color :</span> <span class="cart_productcolor" style="background-color:#000;"></span></p>
							</div>
						</div><div class="cart_quantity" id="cart_product2">
							<p>Quantity</p>
							<div class="quantity_ticker dec">
								<p>-</p>
							</div><div class="quantity_ticker main_quantity">
								<input type="text" value="1">
							</div><div class="quantity_ticker inc">
								<p>+</p>
							</div>
						</div><div class="cart_price">
							<p>Price</p>
							<p>&#8377; 00,000</p>
						</div>
					</div>
					<div class="discount_block">
						<form>
							<div class="form_element">
								<input type="text" placeholder="Enter Discount Code"><input type="submit" value="APPLY">
							</div>
						</form>
					</div>
					<div class="summary_data">
						<p>Subtotal</p><p>&#8377; 00,000</p>
						<p>Discount</p><p>&#8377; 000</p>
						<p>Shipping</p><p>&#8377; 00</p>
						<div class="form_element radio_element col_5">
							<input type="checkbox" name="walletamount" id="walletamount" value="walletamount" checked>
							<label for="walletamount">Use Wallet Amount</label>
							<div class="check"></div>
						</div><div class="col_5 right_text">
							<p>&#8377; 00</p>
						</div>
						<div class="order_finaltotal">
							<p>Order Total</p><p>&#8377; 00,000</p>
						</div>
					</div>
					<p>Read our <a href="">Shipping</a> and <a href="">Return Policy</a>.</p>
				</div>	
			</div>
		</div>
        <?php
            include 'foot.php';
        ?>
    </body>
</html>