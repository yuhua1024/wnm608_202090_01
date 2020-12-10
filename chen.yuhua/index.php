<?php

include_once "lib/php/functions.php";


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
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="view-window" style="background-image: url(img/postcards_001.jpg);">
	</div>

	<div class="container">
		<div class="card text-align-center">
			<h2>ABOUT US</h2>
			<p>This is a website selling many kinds of postcards. Some of the postcards are photography, some are illustrated, and some are collage. The photography and collage are created by myself. We provides customers the opportunity to choose postcards entirely on your own preferences, not necessarily in sets, although they are in sets originally.</p>
		</div>
	</div>

	<?php include "parts/category.php" ?>

	<?php include "parts/mostpopular.php" ?>

	<?php include "parts/newarrival.php" ?>

	<?php include "parts/footer.php" ?>
</body>
</html>