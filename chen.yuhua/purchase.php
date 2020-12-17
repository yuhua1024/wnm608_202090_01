<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
$cart = getCartItems();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Purchase</title>

	<?php include "parts/meta.php" ?>
</head>
<body>

	<div class="container">

		<nav class="nav crumbs">
		   <ul style="padding-top: 1em; padding-left: 0;">
		      <li><a href="product_cart.php">< Back</a></li>
		   </ul>
		</nav>

		<h1>The Order</h1>
		
		<?

         	echo array_reduce($cart,'makePurchaseList');

        ?>

	</div>

		<div class="container">

		<?php include "parts/purchase_infor.php" ?>

		<a href="product_actions.php?action=reset-cart"><div class="btn purchase">Submit Order</div></a>

	</div>

</body>
</html>