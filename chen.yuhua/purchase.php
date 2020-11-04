<!DOCTYPE html>
<html lang="en">
<head>
	<title>Purchase</title>

	<?php include "parts/meta.php" ?>
</head>
<body>

	<div class="container">

		<h1>The Order</h1>
		
		<div><?php include "parts/purchase_item.php" ?></div>
		<div><?php include "parts/purchase_item.php" ?></div>

	</div>

	<?php include "parts/purchase_infor.php" ?>

	<a href="confirmation.php"><div class="btn purchase">Present Order</div></a>

</body>
</html>