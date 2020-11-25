<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
$cart = purchaseNow();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Purchase</title>

	<?php include "parts/meta.php" ?>
</head>
<body>

	<div class="container">

		<h1>The Order</h1>
		
		<?

         	echo array_reduce($cart,'makeSingleCartList');

        ?>

	</div>

	<?php include "parts/purchase_infor.php" ?>

	<a href="product_actions.php?action=reset-cart"><div class="btn purchase">Present Order</div></a>

</body>
</html>