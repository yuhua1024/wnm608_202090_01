<?php

include_once "lib/php/functions.php";


$product = MYSQLIQuery("SELECT * FROM products WHERE id = {$_GET['id']}")[0];

?>

	<div class="display-flex grid gap">
		
		<div class="product-item-image col-sm-12 col-lg-5">
			<div class="image-main"><img src="img/store/<?= $product->image_main ?>" alt=""></div>
			<div class="image-thumbs"><?= $thumbs_elements ?></div>
		</div>

		<div class="product-item-text col-sm-12 col-lg-7 card-section">
			<form class="card flat" method="post" action="product_actions.php?action=add-to-cart">
				<input type="hidden" name="product-id" value="<?= $product->id ?>">
				<div>
					<h2><?= $product->name ?></h2>
				
					<h3>Price: $<?= $product->price ?>/Piece</h3>
				
				</div>
          <div class="display-flex card-section">
    				<div class="col-sm-3">
              <label for="product-amount">Amount</label>
              <div class="form-select">
                <select name="product-amount" id="product-amount">
                  <!-- option[value=$]*10>{$} -->
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>
            </div>

            <div class="col-sm-3">
              <label for="product-color">Color</label>
              <div class="form-select">
                <select name="product-color" id="product-color">
                  <option value="red">Red</option>
                  <option value="green">Green</option>
                  <option value="blue">Blue</option>
                 </select>
              </div>
            </div>
        </div>

				<div class="card-section display-flex">
					<input type="submit" class="btn addtocart" value="Add To Cart">
					<a href="purchasenow.php" class="btn purchase">Purchase Now</a>
				</div>
				
			</form>
		</div>

	</div>
