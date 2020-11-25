<?php

include_once "lib/php/functions.php";

$product = MYSQLIQuery("SELECT * FROM products WHERE id = {$_GET['id']}")[0];

$thumbs = explode(",",$product->image_other);

$thumbs_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='img/store/$o'>";
});

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Postcards: <?= $product->name ?></title>

	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft white ">

			<?php include "parts/product_item_title.php" ?>

			<?php include "parts/product_item_description.php" ?>
		</div>
	</div>

	
	<?php include "parts/footer.php" ?>
<script src="js/store.js"></script>
</body>
</html>