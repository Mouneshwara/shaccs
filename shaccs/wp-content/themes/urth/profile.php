<!doctype html>
<html lang="en">
    <head>
        <?php
            include 'head.php';
        ?>
        <title>Profile | My Account | Urth</title>
        <meta name="title" content="Profile | My Account | Urth">
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
					<p><a href="">Home</a> / <a href="">My Account</a> / <a href="">Profile</a></p>
				</div>
				<div class="tabs onload">
					<ul>
						<li>
							<p><span>Hi, John</span></p>
						</li><li>
							<p><a href="<?=$baseurl;?>profile/"><span class="active_accountpage">Profile</span></a></p>
						</li><li>
							<p><a href="<?=$baseurl;?>order-history"><span>Order History</span></a></p>
						</li><li>
							<p><a href="<?=$baseurl;?>wishlist"><span>Wishlist</span></a></p>
						</li><li>
							<p><a href="<?=$baseurl;?>friend-of-urth/"><span>Friend Of Urth</span></a></p>
						</li>
					</ul>
				</div>
				<div class="tabs_data onload">
					<h3>Account Details</h3>
					<div class="accountform_section">
						<form>
							<div class="form_element col_5">
								<span class="label">Email</span>
								<input type="text" value="johnsmith@gmail.com">
								<span class="line_effect transition"></span>
								<div class="error">
									<span>Please enter Email Address</span>
									<span>Please enter valid Email Address</span>
								</div>
							</div><div class="form_element col_5 right_form_element">
								<span class="label">Passsword</span>
								<input type="password" value="123456">
								<span class="line_effect transition"></span>
								<div class="error">
									<span>Please enter Email Address</span>
									<span>Please enter valid Email Address</span>
								</div>
							</div>
							<p class="change_password"><a href="<?=$baseurl;?>change-password/"><span>Change Password</span></a></p>
							<h3>General Information</h3>
							<div class="form_element col_5">
								<input type="text" placeholder="First Name">
								<span class="line_effect transition"></span>
								<div class="error">
									<span>Please enter First Name</span>
								</div>
							</div><div class="form_element col_5 right_form_element">
								<input type="text" placeholder="Last Name">
								<span class="line_effect transition"></span>
								<div class="error">
									<span>Please enter Last Name</span>
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
							<div class="form_element col_5">
								<input type="text" placeholder="Phone Number">
								<span class="line_effect transition"></span>
								<div class="error">
									<span>Please enter Phone Number</span>
									<span>Please enter valid Phone Number</span>
								</div>
							</div><div class="form_element col_5 right_form_element">
								<input type="text" placeholder="Date Of Birth">
								<span class="line_effect transition"></span>
								<div class="error">
									<span>Please select Date Of Birth</span>
								</div>
							</div>
							<div class="form_element col_5">
								<input type="text" placeholder="City">
								<span class="line_effect transition"></span>
								<div class="error">
									<span>Please enter City</span>
								</div>
							</div><div class="form_element col_5 right_form_element">
								<input type="text" placeholder="State">
								<span class="line_effect transition"></span>
								<div class="error">
									<span>Please enter State</span>
								</div>
							</div>
							<div class="form_element radio_element col_5">
								<div class="form_element col_5">
									<input type="radio" name="gender" id="male" value="male">
									<label for="male">Male</label>
									<div class="check"></div>
								</div><div class="form_element col_5">
									<input type="radio" name="gender" id="female" value="female">
									<label for="female">Female</label>
									<div class="check"></div>
								</div>
								<div class="error">
									<span></span>
								</div>
							</div>
							<div class="form_element button_elements">
								<input type="button" value="CANCEL"><input type="submit" value="SAVE">
								<div class="error">
									<span></span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>