<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

function makeProductList($r,$o) {
return $r.<<<HTML

<div class="col-sm-6 col-md-6 col-lg-3">
	<a href="product_item.php?id=$o->id">
		<figure class="product-item">
			<div class="product-image">
				<img src="img/store/$o->image_thumb" alt="">
			</div>
			<figcaption class="product-description">
				<div class="product-title">$o->name</div>
				<div class="product-price">&dollar;$o->price/piece</div>
			</figcaption>
			<div class="button04">Shop Now</a>
		</figure>
	</a>
</div>
HTML;
}


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