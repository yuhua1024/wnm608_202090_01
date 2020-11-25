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
			<h2>This is a heading 2</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ipsum similique culpa beatae iste nostrum fugiat itaque et voluptate. Quo, alias accusantium. Saepe dignissimos architecto, maiores. Dicta laudantium illum quasi explicabo ut a debitis labore fugit neque alias qui dolorum dignissimos provident nam, dolore maiores in deserunt voluptatibus quod! Aliquam.</p>
		</div>
	</div>

	<?php include "parts/category.php" ?>

	<?php include "parts/mostpopular.php" ?>

	<?php include "parts/newarrival.php" ?>

	<?php include "parts/footer.php" ?>
</body>
</html>