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
	<title>Purchase</title>

	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft white confirmation-box">
			<h1>Thanks For Your Purchasing!</h1>

		</div>
	</div>
	
	<div class="container">
		<div class="card">
			
			<?php include "parts/related_recommendation.php" ?>
		</div>
	</div>

	<?php include "parts/footer.php" ?>

</body>
</html>