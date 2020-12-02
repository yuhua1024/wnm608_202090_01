<div class="container">
	<div class="grid gap card white soft">
		
		<?php

            echo array_reduce(
	            $products,
	            'makeProductList'
            );

      ?>

	</div>
</div>