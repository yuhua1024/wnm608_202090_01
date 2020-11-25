<div class="container">
	<div class="grid gap card white soft">
		
		<?php

            echo array_reduce(
               MYSQLIQuery("
                  SELECT *
                  FROM products
                  ORDER BY sales_volume DESC
                  LIMIT 16
               "),
               'makeProductList'
            );

        ?>

	</div>
</div>