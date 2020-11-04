<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product List</title>

	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<?php include "parts/filter_search.php" ?>

	<div class="container">
		
			<div><?php include "parts/cart_selecter.php" ?></div>
			<div><?php include "parts/cart_selecter.php" ?></div>
			<div><?php include "parts/cart_selecter.php" ?></div>
		

		<div class="card display-flex grid gap" >
			<h3>Total: $2.97</h3>
			<a href="purchase.php" class="btn purchase sm-col-2" >Check Out</a>
		</div>


	</div>

	
	<?php include "parts/footer.php" ?>
</body>
</html>