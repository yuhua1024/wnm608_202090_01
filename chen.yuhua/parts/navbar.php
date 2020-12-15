<header class="navbar">
      <div class="container display-flex flex-align-center">
         <div class="flex-none"><img src="img/logo_white.png"></div>
         <div class="flex-stretch"></div> 
         <nav class="nav flex-none pills">
            <ul class="display-flex">
               <li><a href="index.php">Home</a></li>
               <li><a href="product_list.php">Products</a></li>
               <li><a href="about_us.php">About Us</a></li>
               <li><a href="product_cart.php">
                  <span>Cart</span>
                  <span class="badge"><?= makeCartBadge() ?></span>
               </a></li>
            </ul>
         </nav>   
      </div>
   </header>