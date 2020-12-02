<?php








function selectAmount($amount=1,$total=10) {
   $output = "<select name='product-amount'>";
   for($i=1;$i<=$total;$i++) {
      $output .= "<option ".($i==$amount?'selected':'').">$i</option>";
   }
   $output .= "</select>";
   return $output;
}


function selectColor($color=color1,$total=color4) {
   $output = "<select name='product-color'>";
   for($i=color1;$i<=$total;$i++) {
      $output .= "<option ".($i==$colorcolor?'selected':'').">$i</option>";
   }
   $output .= "</select>";
   return $output;
}



function makeCartList($r,$o) {
$totalfixed = number_format($o->total,2,'.','');
$selectamount = selectAmount($o->amount,10);
$selectcolor = selectColor($o->color,4);
return $r.<<<HTML
<div class="display-flex">
   <div class="flex-none image-thumbs">
      <img src="img/store/$o->image_thumb" style="width: 100px;height: 100px;">
   </div>
   <div class="flex-stretch">
      <strong>$o->name</strong>

      <div>Color:$o->color</div>

      <form action="product_actions.php?action=delete-cart-item" method="post">
         <input type="hidden" name="product-id" value="$o->id">
         <input type="submit" value="Delete" class="button04" style="font-size:0.8em">
      </form>
      
   </div>
   <div class="flex-none">
      <div>&dollar;$totalfixed</div>
      <form action="product_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
         <div class="form-select-light">
            $selectamount
         </div>
         <input type="hidden" name="product-id" value="$o->id">
      </form>
   </div>
</div>
HTML;
}

function makeSingleCartList($r,$o) {
$selectamount = selectAmount($o->amount,10);
return $r.<<<HTML
<div class="display-flex">
   <div class="flex-none image-thumbs">
      <img src="img/store/$o->image_thumb" style="width: 100px;height: 100px;">
   </div>
   <div class="flex-stretch">
      <strong>$o->name</strong>
      <form action="product_actions.php?action=delete-cart-item" method="post">
         <input type="hidden" name="product-id" value="$o->id">
      </form>
   </div>
   <div class="flex-none">
      <div>&dollar;$totalfixed</div>
      <form action="product_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
         <input type="hidden" name="product-id" value="$o->id">
         <div>Amount:$o->amount</div>
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
      <form action="product_actions.php?action=delete-cart-item" method="post">
         <input type="hidden" name="product-id" value="$o->id">
      </form>
   </div>
   <div class="flex-none">
      <div>&dollar;$totalfixed</div>
      <form action="product_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
         <input type="hidden" name="product-id" value="$o->id">
         <div>Amount:$o->amount</div>
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