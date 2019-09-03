<!doctype html>
<html lang="en">
    <head>
        <?php
            include 'head.php';
        ?>
        <title>Login / Register | Urth</title>
        <meta name="title" content="Login / Register | Urth">
        <meta name="description" content="">
        <meta name="keywords" content="">
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
		<div class="wrapper">
			<div class="section">
				<h2>Log In / Register</h2>
				<div class="button_wrap">
					<div class="button gplus_btn">
						<p>Google+</p>
					</div><div class="button fb_btn">
						<p>Facebook</p>
					</div>
				</div>
				<div class="or"><p>Or</p></div>
				<div class="form_section">
					<div class="col_5">
						<form>
							<div class="form_element">
								<input type="text" placeholder="Username">
								<span class="line_effect transition"></span>
								<div class="error">
									<span>Please enter username</span>
								</div>
							</div>
							<div class="form_element">
								<input type="password" placeholder="Enter Password">
								<span class="line_effect transition"></span>
								<div class="error">
									<span>Please enter password</span>
								</div>
							</div>
							<div class="form_element radio_element">
								<input type="checkbox" name="keepsignin" id="keepsignin" value="keepsignin">
								<label for="keepsignin">Keep Me Signed In</label>
								<div class="check"></div>
								<div class="error">
									<span>Incorrect Combination</span>
								</div>
							</div>
							<div class="form_element">
								<input type="submit" value="SIGN IN">
								<div class="error">
									<span>Incorrect Combination</span>
								</div>
							</div>
						</form>
						<p class="forgot_password">Forgot Password?</p>
						<form class="forgotpassword_form">
							<div class="form_element">
								<input type="text" placeholder="Enter Email Address">
								<span class="line_effect transition"></span>
								<div class="error">
									<span>Please enter Email Address</span>
									<span>Please enter valid Email Address</span>
								</div>
							</div>
							<div class="form_element">
								<input type="submit" value="SUBMIT">
								<div class="error">
									<span>Email has been send to your email address</span>
								</div>
							</div>
						</form>
					</div><div class="col_5">
						<form>
							<div class="form_element">
								<input type="text" placeholder="First Name">
								<span class="line_effect transition"></span>
								<div class="error">
									<span>Please enter First Name</span>
								</div>
							</div>
							<div class="form_element">
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
							<div class="form_element">
								<input type="text" placeholder="Phone Number">
								<span class="line_effect transition"></span>
								<div class="error">
									<span>Please enter Phone Number</span>
									<span>Please enter valid Phone Number</span>
								</div>
							</div>
							<div class="form_element">
								<input type="password" placeholder="Password">
								<span class="line_effect transition"></span>
								<div class="error">
									<span>Please enter password</span>
								</div>
							</div>
							<div class="form_element">
								<input type="password" placeholder="Confirm Password">
								<span class="line_effect transition"></span>
								<div class="error">
									<span>Please Confirm password</span>
								</div>
							</div>
							<div class="form_element radio_element">
								<input type="checkbox" name="offersubscription" id="offersubscription" value="offersubscription">
								<label for="offersubscription">Send Me Exclusive Offers &amp; Mores</label>
								<div class="check"></div>
								<div class="error">
									<span>Incorrect Combination</span>
								</div>
							</div>
							<div class="form_element">
								<input type="submit" value="CREATE MY ACCOUNT">
								<div class="error">
									<span>Incorrect Combination</span>
								</div>
							</div>
							<p>By creating account you agree to urth  <a href="">Terms of use</a> and <a href="">Privacy Policy</a>.</p>
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