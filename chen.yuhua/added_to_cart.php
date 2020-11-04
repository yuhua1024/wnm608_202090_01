<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Item</title>

	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft white ">
			<h1>You have added it to your cart!</h1>

			<div class="display-flex product_button">
				<a href="product_item.php" class="btn addtocart">Back to shopping</a>
				<a href="product_cart.php" class="btn purchase">Go to my cart</a>
			</div>
		</div>
	</div>

	
	<?php include "parts/footer.php" ?>
<script src="lib/js/script.js"></script>
</body>
</html>