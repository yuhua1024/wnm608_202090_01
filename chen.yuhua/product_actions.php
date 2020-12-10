<?php

include_once "lib/php/functions.php";

switch($_GET['action']) {
   case "add-to-cart":
      print_p([$_GET,$_POST,$_SESSION]); 
      //$product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = ".$_POST['product-id'])[0];
      addToCart($_POST);
      header("location:product_added_to_cart.php?id={$_POST['product-id']}");
      break;

    case "update-cart-item":
      $p = cartItemById($_POST['product-id']);
      $p->amount = $_POST['product-amount'];
      header("location:product_cart.php");
      break;

    case "delete-cart-item":
      $_SESSION['cart'] = array_filter($_SESSION['cart'],function($o){
         return $o->id!=$_POST['product-id'];
      });
      header("location:product_cart.php");
      break;
    case "reset-cart":
      resetCart();
      header("location:confirmation.php");
      break;

   default: die("Incorrect Action");
}