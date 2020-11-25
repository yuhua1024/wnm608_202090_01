<div class="container">
	<h2 style="text-align: center;">Most Popular</h2>
	<div class="grid gap card white soft">
	
		<?php

            echo array_reduce(
               MYSQLIQuery("
                  SELECT *
                  FROM products
                  ORDER BY sales_volume DESC
                  LIMIT 4
               "),
               'makeProductList'
            );

        ?>


        <a href="product_list.php" class="col-sm-12" style="text-align: right;margin-right: 15px;font-size:larger;">See More >>></a>

	</div>
</div>