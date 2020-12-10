 
<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
$cart = getCartItems();

//print_p($cart);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product List</title>

	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft white">
        	<h2>Product Cart</h2>
		
			<?

         		echo array_reduce($cart,'makeCartList');

        	?>

		</div>

		<div class="card" >
			
			<div>
               <?= cartTotals() ?>
            </div>
		</div>


	</div>

	
	<?php include "parts/footer.php" ?>
</body>
</html>