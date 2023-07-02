<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Cover -->
	<main>
		<div class="hero">
			<a href="shop.php" class="btn1">View all products
</a>
		</div>
		<!-- Main -->
		<div class="wrapper">
						<h1>Featured Collection<h1>
						
			</div>



		<div id="content" class="container"><!-- container Starts -->

		<div class="row"><!-- row Starts -->

		<?php

		getPro();
?>

		</div><!-- row Ends -->

		</div><!-- container Ends -->
		<!-- FOOTER -->
		<footer class="page-footer">

	<div class="footer-nav">
		<div class="container clearfix">

			<div class="footer-nav__col footer-nav__col--info">
				<div class="footer-nav__heading">Information</div>
				<ul class="footer-nav__list">
				<li class="footer-nav__item">
						<a href="about.php" class="footer-nav__link">About Us</a>
					</li>
					<li class="footer-nav__item">
						<a href="shop.php" class="footer-nav__link">Cakes</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Customer service</a>
					</li>
					<li class="footer-nav__item">
						<a href="terms.php" class="footer-nav__link">View Terms</a>
					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Site map</a>
					</li>
				</ul>
			</div>

			<div class="footer-nav__col footer-nav__col--account">
				<div class="footer-nav__heading">Your account</div>
				<ul class="footer-nav__list">
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Sign in</a>

					</li>
					<li class="footer-nav__item">
						<a href="#" class="footer-nav__link">Register</a>
					</li>
					<li class="footer-nav__item">
						<a href="cart.php" class="footer-nav__link">View cart</a>
					</li>
					<li class="footer-nav__item">
						<a href="customer/my_account.php?my_orders" class="footer-nav__link">View your orders</a>
					</li>
					<li class="footer-nav__item">
						<a href="customer/my_account.php?edit_account" class="footer-nav__link">Update information</a>
					</li>
				</ul>
			</div>


			<div class="footer-nav__col footer-nav__col--contacts">
				<div class="footer-nav__heading">Contact details</div>
				<address class="address">
				<br>
				<div class="phone">
					Facebook Page:
					<a href="https://www.facebook.com/profile.php?id=100064140520017">Sweet V's Custom Cakes and Cupcakes</a>
				</div>
			</address>
				<div class="phone">
					Telephone:
					<a class="phone__number" href="tel:0123456789">0945 684 4016</a>
				</div>
				<div class="email">
					Email:
					<a href="mailto:support@yourwebsite.com" class="email__addr">support@yourwebsite.com</a>
				</div>
			</div>

		</div>
	</div>

	

	<div class="page-footer__subline">
		<div class="container clearfix">

			<div class="developer">
			
			</div>

			<div class="designby">
					Developed by Group 4
			</div>
		</div>
	</div>
</footer>

</body>

</html>
