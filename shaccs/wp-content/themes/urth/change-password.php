<!doctype html>
<html lang="en">
    <head>
        <?php
            include 'head.php';
        ?>
        <title>Change Password | Urth</title>
        <meta name="title" content="Change Password | Urth">
        <meta name="description" content="">
        <meta name="keywords" content="">
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
		<div class="wrapper">
			<div class="section">
				<div class="breadcrumb">
					<p><a href="">Home</a> / <a href="">My Account</a> / <a href="">Profile</a> / <a href="">Change Password</a></p>
				</div>
				<h2>Change Password</h2>
				<div class="tabs_data">
					<form>
						<div class="form_element">
							<input type="password" placeholder="Enter Current Password">
							<span class="line_effect transition"></span>
							<div class="error">
								<span>Please current enter password</span>
							</div>
						</div>
						<div class="form_element">
							<input type="password" placeholder="Enter New Password">
							<span class="line_effect transition"></span>
							<div class="error">
								<span>Please new enter password</span>
							</div>
						</div>
						<div class="form_element">
							<input type="password" placeholder="Confirm Password">
							<span class="line_effect transition"></span>
							<div class="error">
								<span>Please Confirm password</span>
							</div>
						</div>
						<div class="form_element">
							<input type="submit" value="SUBMIT">
							<div class="error">
								<span></span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>