<header class="navbar">
      <div class="container display-flex flex-align-center">
         <div class="flex-none"><img src="img/logo_white.png"></div>
         <div class="flex-stretch"></div> 
         <nav class="nav flex-none">
            <ur class="display-flex">
               <li><a href="index.php">Home</a></li>
               <li><a href="product_list.php">Products</a></li>
               <li><a href="about_us.php">About Us</a></li>
               <li><a href="product_cart.php">
                  <div class="display-flex">
                     <span>Cart</span>
                     <span><div class="badge"><?= makeCartBadge() ?></div></span>
                  </div>
            </a></li>
            </ur>
         </nav>   
      </div>
   </header>