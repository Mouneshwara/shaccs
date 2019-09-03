<!doctype html>
<html lang="en">
    <head>
        <?php
            include 'head.php';
        ?>
        <title>Order History | My Account | Urth</title>
        <meta name="title" content="Order History | My Account | Urth">
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
					<p><a href="">Home</a> / <a href="">My Account</a> / <a href="">Order History</a></p>
				</div>
				<div class="tabs onload">
					<ul>
						<li>
							<p><span>Hi, John</span></p>
						</li><li>
							<p><a href="<?=$baseurl;?>profile/"><span>Profile</span></a></p>
						</li><li>
							<p><a href="<?=$baseurl;?>order-history"><span class="active_accountpage">Order History</span></a></p>
						</li><li>
							<p><a href="<?=$baseurl;?>wishlist"><span>Wishlist</span></a></p>
						</li><li>
							<p><a href="<?=$baseurl;?>friend-of-urth/"><span>Friend Of Urth</span></a></p>
						</li>
					</ul>
				</div>
				<div class="tabs_data onload">
					<h3>Current Orders</h3>
					<div class="orders_header active_order" id="order_1">
						<div class="col_2">
							<p>Order Id</p>
							<p>0123456789</p>
						</div><div class="col_2">
							<p>Total Amount</p>
							<p>&#8377; 00,000</p>
						</div><div class="col_2">
							<p>Date</p>
							<p>21/01/2018</p>
						</div><div class="col_2">
							<p>Order Status</p>
							<p>Pending</p>
						</div><div class="col_2">
							<p><a href="<?=$baseurl;?>">Download Invoice</a></p>
						</div>
						<div class="acc_btn">
							<span class="transition"></span><span></span>
						</div>
					</div>
					<div class="orders_data order_1" style="display:block;">
						<div class="col_5 ordered_product">
							<div class="col_5 order_image">
								<img src="<?=$baseurl;?>images/products/product1.jpg" alt="">
							</div><div class="col_5 product_data">
								<p>BOX TROUSERS</p>
								<p><span>Quantity :</span> 1</p>
								<p><span>Color :</span> <span class="cart_productcolor" style="background-color:#000;"></span></p>
								<p><span>Size :</span> S</p>
								<p><span>Price :</span> &#8377; 00,000</p>
							</div>
						</div><div class="col_5 ordered_product">
							<div class="col_5 order_image">
								<img src="<?=$baseurl;?>images/products/product1.jpg" alt="">
							</div><div class="col_5 product_data">
								<p>BOX TROUSERS</p>
								<p><span>Quantity :</span> 1</p>
								<p><span>Color :</span> <span class="cart_productcolor" style="background-color:#000;"></span></p>
								<p><span>Size :</span> S</p>
								<p><span>Price :</span> &#8377; 00,000</p>
							</div>
						</div><div class="col_5 ordered_product">
							<div class="col_5 order_image">
								<img src="<?=$baseurl;?>images/products/product1.jpg" alt="">
							</div><div class="col_5 product_data">
								<p>BOX TROUSERS</p>
								<p><span>Quantity :</span> 1</p>
								<p><span>Color :</span> <span class="cart_productcolor" style="background-color:#000;"></span></p>
								<p><span>Size :</span> S</p>
								<p><span>Price :</span> &#8377; 00,000</p>
							</div>
						</div><div class="col_5 ordered_product">
							<div class="col_5 order_image">
								<img src="<?=$baseurl;?>images/products/product1.jpg" alt="">
							</div><div class="col_5 product_data">
								<p>BOX TROUSERS</p>
								<p><span>Quantity :</span> 1</p>
								<p><span>Color :</span> <span class="cart_productcolor" style="background-color:#000;"></span></p>
								<p><span>Size :</span> S</p>
								<p><span>Price :</span> &#8377; 00,000</p>
							</div>
						</div>
					</div>
					<h3>Previous Orders</h3>
					<div class="orders_header" id="order_2">
						<div class="col_2">
							<p>Order Id</p>
							<p>0123456789</p>
						</div><div class="col_2">
							<p>Total Amount</p>
							<p>&#8377; 00,000</p>
						</div><div class="col_2">
							<p>Date</p>
							<p>21/01/2018</p>
						</div><div class="col_2">
							<p>Order Status</p>
							<p>Pending</p>
						</div><div class="col_2">
							<p><a href="<?=$baseurl;?>">Download Invoice</a></p>
						</div>
						<div class="acc_btn">
							<span class="transition"></span><span></span>
						</div>
					</div>
					<div class="orders_data order_2">
						<div class="col_5 ordered_product">
							<div class="col_5 order_image">
								<img src="<?=$baseurl;?>images/products/product1.jpg" alt="">
							</div><div class="col_5 product_data">
								<p>BOX TROUSERS</p>
								<p><span>Quantity :</span> 1</p>
								<p><span>Color :</span> <span class="cart_productcolor" style="background-color:#000;"></span></p>
								<p><span>Size :</span> S</p>
								<p><span>Price :</span> &#8377; 00,000</p>
							</div>
						</div><div class="col_5 ordered_product">
							<div class="col_5 order_image">
								<img src="<?=$baseurl;?>images/products/product1.jpg" alt="">
							</div><div class="col_5 product_data">
								<p>BOX TROUSERS</p>
								<p><span>Quantity :</span> 1</p>
								<p><span>Color :</span> <span class="cart_productcolor" style="background-color:#000;"></span></p>
								<p><span>Size :</span> S</p>
								<p><span>Price :</span> &#8377; 00,000</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>