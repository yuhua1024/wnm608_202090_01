<?php



function selectAmount($amount=1,$total=10) {
   $output = "<select name='product-amount'>";
   for($i=1;$i<=$total;$i++) {
      $output .= "<option ".($i==$amount?'selected':'').">$i</option>";
   }
   $output .= "</select>";
   return $output;
}


/*function selectColor($color,$total=4) {
   $output = "<select name='product-color'>";
   for($i=0;$i<=$total;$i++) {
      $output .= "<option ".($i==$color?'selected':'').">$i</option>";
   }
   $output .= "</select>";
   return $output;
}*/



function makeCartList($r,$o) {
$totalfixed = number_format($o->total,2,'.','');
$selectamount = selectAmount($o->amount,10);
//$selectcolor = selectColor($o->chosen_color,4);
return $r.<<<HTML
<div class="display-flex" style="margin-top: 1em;">
   <div class="flex-none image-thumbs">
      <img src="img/store/$o->image_thumb" style="width: 100px;height: 100px;">
   </div>
   <div class="flex-stretch">
      <div style="padding-top: 0.5em;"><strong>$o->name</strong></div>

      <div style="padding-top: 0.5em;">Color:$o->chosen_color</div>

      <form action="product_actions.php?action=delete-cart-item" method="post" style="padding-top: 0.5em;">
         <input type="hidden" name="product-id" value="$o->id">
         <input type="submit" value="Delete" class="button04" style="font-size:0.8em">
      </form>
      
   </div>
   <div class="flex-none">
      <div>&dollar;$totalfixed</div>
      <form action="product_actions.php?action=update-cart-item" method="post" onchange="this.submit()" style="padding-top: 0.5em;">
         <div class="form-select-light">
            $selectamount
         </div>
         <input type="hidden" name="product-id" value="$o->id">
      </form>
   </div>
</div>
HTML;
}


function makePurchaseList($r,$o) {
$totalfixed = number_format($o->total,2,'.','');
$selectamount = selectAmount($o->amount,10);
return $r.<<<HTML
<div class="display-flex">
   <div class="flex-none image-thumbs">
      <img src="img/store/$o->image_thumb" style="width: 100px;height: 100px;">
   </div>
   <div class="flex-stretch">
      <strong>$o->name</strong>
      <div style="padding-top: 0.5em;">Color:$o->chosen_color</div>
      <form action="product_actions.php?action=delete-cart-item" method="post">
         <input type="hidden" name="product-id" value="$o->id">
      </form>
   </div>
   <div class="flex-none">
      <div>&dollar;$totalfixed</div>
      <form action="product_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
         <input type="hidden" name="product-id" value="$o->id">
         <div style="padding-top: 0.5em;">Amount:$o->amount</div>
      </form>
   </div>
</div>
HTML;
}

function cartTotals() {

$cart = getCartItems();

$cartprice = array_reduce($cart,function($r,$o){return $r+$o->total;},0);
$pricefixed = number_format($cartprice,2,'.','');
$tax = number_format($cartprice*0.0725,2,'.','');
$taxed = number_format($cartprice*1.0725,2,'.','');

return <<<HTML
<div class="card-section display-flex">
   <div class="flex-stretch"><strong>Sub Total</strong></div>
   <div class="flex-none">&dollar;$cartprice</div>
</div>
<div class="card-section display-flex">
   <div class="flex-stretch"><strong>Taxes</strong></div>
   <div class="flex-none">&dollar;$tax</div>
</div>
<div class="card-section display-flex">
   <div class="flex-stretch"><strong>Total</strong></div>
   <div class="flex-none">&dollar;$taxed</div>
</div>
<div class="card-section">
   <a href="purchase.php" class="btn purchase">Checkout</a>
</div>
HTML;
}


function makeAdminList($r,$o) {
return $r.<<<HTML
<div class="display-flex card white flat soft">
   <div class="flex-none image-thumbs-admin">
      <img src="img/store/$o->image_thumb">
   </div>
   <div class="flex-stretch" style="padding:1em">
      <div><strong>$o->name</strong></div>
      <div>$o->category</div>
   </div>
   <div class="flex-none">
      <div class="card-section"><a href="admin/?id=$o->id" class="form-button">Edit</a></div>
      <div class="card-section"><a href="product_item.php?id=$o->id" class="form-button">View</a></div>
   </div>
</div>
HTML;
}


function makeRecommend($a) {
$products = array_reduce($a,'makeProductList');
echo <<<HTML
<div class="grid gap productlist">$products</div>
HTML;
}


function recommendSimilar($cat,$id=0,$limit=3) {
   $result = MYSQLIQuery("
         SELECT *
         FROM products
         WHERE
            `category`='$cat' AND
            `id` <> $id
         ORDER BY rand()
         LIMIT $limit
      ");
   makeRecommend($result);
} 

function recommendCategory($cat,$limit=3) {
   $result = MYSQLIQuery("
         SELECT *
         FROM products
         WHERE
            `category`='$cat'
         ORDER BY `date_create` DESC
         LIMIT $limit
      ");
   makeRecommend($result);
}
