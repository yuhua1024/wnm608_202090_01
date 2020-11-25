<div class="container">
	<h2>Related Recommendation</h2>
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
	</div>
</div>