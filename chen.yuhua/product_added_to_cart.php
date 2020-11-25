<?php

include_once "lib/php/functions.php";
$product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = ".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Added Product</title>

	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft white ">
			<h1>You have added <?= $product->name ?> to your cart!</h1>
			
			<p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart.</p>

			<div class="display-flex product_button">
				<a href="product_list.php" class="btn addtocart">Back to shopping</a>
				<a href="product_cart.php" class="btn purchase">Go to my cart</a>
			</div>
		</div>
	</div>

	
	<?php include "parts/footer.php" ?>
<script src="lib/js/script.js"></script>
</body>
</html>