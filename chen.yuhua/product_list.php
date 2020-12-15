<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
include_once "data/api.php";

setDefault('s','');
setDefault('t','products_all');
setDefault('orderby_direction','DESC');
setDefault('orderby','sales_volume');
setDefault('limit','12');



function makeSortOptions() {
   $options = [
   	  ["sales_volume","DESC","Bestselling"],
      ["date_create","DESC","Newst"],
      ["price","DESC","Price high to low"],
      ["price","ASC","Price low to high"]
   ];
   foreach($options as [$orderby,$direction,$title]) {
      echo "
      <option data-orderby='$orderby' data-direction='$direction'
      ".($_GET['orderby']==$orderby && $_GET['orderby_direction']==$direction ? "selected" : "").">
      $title
      </option>
      ";
   }
}

function makeHiddenValues($arr1,$arr2) {
   foreach(array_merge($arr1,$arr2) as $k=>$v) {
      echo "<input type='hidden' name='$k' value='$v'>\n";
   }
}



$result = makeStatement($_GET['t']);
$products = isset($result['error']) ? [] : $result;



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
	<title>Product List</title>

	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<?php include "parts/filter_search.php" ?>

	<?php include "parts/product_list.php" ?>

	<div class="container">
      <div class="card soft white">
         <a href="admin">Product Admin</a>
      </div>
   </div>

	<?php include "parts/footer.php" ?>

</body>
</html>