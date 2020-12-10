<div class="display-flex">
	<div class="tab-group">
		<ul class="tabs">
			<li class="tab active">Description</li>
			<li class="tab">Specification</li>
			<li class="tab">Related Recommendation</li>
		</ul>
		<div class="contents">
			<div class="content active">
				<p><?= $product->description ?></p>
			</div>
				

			<div class="content">
				<p>
					<strong>Type:</strong>Card
					<br>
					<strong>Material:</strong>Material:Paper
					<br>
					<strong>Size:</strong>3.93 X 5.9 inches
					<br>
					<strong>Width:</strong>10.00cm
					<br>
					<strong>Height:</strong>15.00cm
				</p>
			</div>


			<div class="content">
				<div>
					<?

			        recommendSimilar($product->category,$product->id);

			        ?>
		        </div>
			</div>
				
		</div>
	</div>
</div>
