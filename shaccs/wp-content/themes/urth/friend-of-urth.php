<!doctype html>
<html lang="en">
    <head>
        <?php
            include 'head.php';
        ?>
        <title>Friend Of Urth | My Account | Urth</title>
        <meta name="title" content="Friend Of Urth | My Account | Urth">
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
					<p><a href="">Home</a> / <a href="">My Account</a> / <a href="">Friend Of Urth</a></p>
				</div>
				<div class="tabs onload">
					<ul>
						<li>
							<p><span>Hi, John</span></p>
						</li><li>
							<p><a href="<?=$baseurl;?>profile/"><span>Profile</span></a></p>
						</li><li>
							<p><a href="<?=$baseurl;?>order-history"><span>Order History</span></a></p>
						</li><li>
							<p><a href="<?=$baseurl;?>wishlist"><span>Wishlist</span></a></p>
						</li><li>
							<p><a href="<?=$baseurl;?>friend-of-urth/"><span class="active_accountpage">Friend Of Urth</span></a></p>
						</li>
					</ul>
				</div>
				<div class="tabs_data onload">
					<h3>Wallet Amount: <span>&#8377; 0,000</span></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					<div class="rewards">
						<div class="col_3 earned_reward">
							<img src="<?=$baseurl;?>images/friend-of-urth/bronze.png" alt="">
							<p>Bronze</p>
						</div><div class="col_3">
							<img src="<?=$baseurl;?>images/friend-of-urth/silver.png" alt="">
							<p>Silver</p>
						</div><div class="col_3">
							<img src="<?=$baseurl;?>images/friend-of-urth/gold.png" alt="">
							<p>Gold</p>s
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