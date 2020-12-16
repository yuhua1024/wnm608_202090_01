		<div class="container">
			<div class="card display-flex grid gap">

					<div class="col-sm-6 col-md-6 col-lg-2">
						<form action="product_list.php" method="get">
							<?
			                makeHiddenValues($_GET,[
			                   
			                   "t"=>"products_all"
			                ]);
			                ?>
			                <input type="submit" value="All Products" class="button04" style="width: 100%;">
			            </form>
					</div>
				
					<div class="col-sm-6 col-md-6 col-lg-2">
						<form action="product_list.php" method="get">
							<?
			                makeHiddenValues($_GET,[
			                   "category"=>"Photographed",
			                   "t"=>"products_by_category"
			                ]);
			                ?>
			                <input type="submit" value="Photographed" class="button04" style="width: 100%;">
			            </form>
					</div>

					<div class="col-sm-6 col-md-6 col-lg-2">
						<form action="product_list.php" method="get">
							<?
			                makeHiddenValues($_GET,[
			                   "category"=>"Graphic",
			                   "t"=>"products_by_category"
			                ]);
			                ?>
			                <input type="submit" value="Graphic" class="button04" style="width: 100%;">
			            </form>
					</div>

					<div class="col-sm-6 col-md-6 col-lg-2">
						<form action="product_list.php" method="get">
							<?
			                makeHiddenValues($_GET,[
			                   "category"=>"Handmade",
			                   "t"=>"products_by_category"
			                ]);
			                ?>
			                <input type="submit" value="Handmade" class="button04" style="width: 100%;">
			            </form>
					</div>

					<div class="col-sm-6 col-md-6 col-lg-2">
						<form action="product_list.php" method="get">
							<?
			                makeHiddenValues($_GET,[
			                   "category"=>"Illustration",
			                   "t"=>"products_by_category"
			                ]);
			                ?>
			                <input type="submit" value="Illustration" class="button04" style="width: 100%;">
			            </form>
					</div>

		


				
				<div class="col-sm-12 col-md-12 col-lg-4">
					<form action="product_list.php" method="get">

						<?
		                makeHiddenValues($_GET,[]);
		                ?>
						
		                <div class="form-select filter01 display-flex">
		                	<p class="sortby">Sort by:</p>
		                    <select onchange="checkSort(this)">
		                        <?=makeSortOptions()?>
		                    </select>
		                </div>

		            </form>
				</div>

				<div class="col-lg-2"></div>

				
				<div class="col-sm-12 col-md-12 col-lg-6">
					<form action="product_list.php" method="get">
						<div class="form-control search">
							<div class="hotdog">
								<input type="search" name="s" placeholder="Search"
						         value="<?= @$_GET['s'] ?>">

						         <input type="hidden" name="orderby" value="<?=$_GET['orderby']?>">
						         <input type="hidden" name="orderby_direction" value="<?=$_GET['orderby_direction']?>">
						         <input type="hidden" name="limit" value="<?=$_GET['limit']?>">

						         <input type="hidden" name="t" value="search">
								
								<button type="submit" style="background-color: white; border: none;"><img src="img/icon/search.png" alt="" class="icon"></button>
								
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>