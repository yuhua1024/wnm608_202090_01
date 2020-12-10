<?php

@include_once "../lib/php/functions.php";

function getRequires($props) {
   foreach($props as $prop) {
      if(!isset($_GET[$prop])) return false;
   }
   return true;
}


function makeStatement($type,$params=[]) {

   switch($type) {
      case "products_all":
         return MYSQLIQuery("SELECT *
            FROM `products`
            ORDER BY {$_GET['orderby']} {$_GET['orderby_direction']}
            LIMIT {$_GET['limit']}");
         break;


      case "product_by_id":
         if(!getRequires(['id'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `products`
            WHERE `id` = ".$_GET['id']);
         break;


      case "products_by_category":
         if(!getRequires(['category'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `products`
            WHERE `category` = '{$_GET['category']}'
            ORDER BY {$_GET['orderby']} {$_GET['orderby_direction']}
            LIMIT {$_GET['limit']}
            ");
         break;


      case "price_above":
         if(!getRequires(['price'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `products`
            WHERE `price` > '{$_GET['price']}'
            ORDER BY price DESC
            LIMIT {$_GET['limit']}
            ");
         break;

      case "price_below":
         if(!getRequires(['price'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `products`
            WHERE `price` < '{$_GET['price']}'
            ORDER BY price ASC
            LIMIT {$_GET['limit']}
            ");
         break;






      case "search":
         if(!getRequires(['s'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `products`
            WHERE `name` LIKE '%{$_GET['s']}%'
            ORDER BY sales_volume DESC
            LIMIT {$_GET['limit']}
            ");
         break;


      case "product_insert":
         return MYSQLIQuery("INSERT INTO
            `products`
            (
               `name`,
               `price`,
               `category`,
               `description`,
               `image_other`,
               `image_thumb`,
               `date_create`,
               `date_modify`
            )
            VALUES
            (
               '{$params[0]}',
               '{$params[1]}',
               '{$params[2]}',
               '{$params[3]}',
               '{$params[4]}',
               '{$params[5]}',
               NOW(),
               NOW()
            )
            ");
         break;

      case "product_update":
         return MYSQLIQuery("UPDATE
            `products`
            SET
               `name` = '{$params[0]}',
               `price` = '{$params[1]}',
               `category` = '{$params[2]}',
               `description` = '{$params[3]}',
               `image_other` = '{$params[4]}',
               `image_thumb` = '{$params[5]}'
            WHERE `id` = {$params[6]}
            ");
         break;

      case "product_delete":
         return MYSQLIQuery("DELETE FROM
            `products` WHERE `id` = {$params[0]}
            ");
         break;



      case "products_admin_all":
         return MYSQLIQuery("SELECT *
            FROM `products`
            ORDER BY `date_create` DESC
            ");
         break;






      default: return ["error"=>"No Matched Type"];
   }
}


// if(isset($_GET['t'])) {
//    echo json_encode(
//       makeStatement($_GET['t']),
//       JSON_UNESCAPED_UNICODE |
//       JSON_NUMERIC_CHECK
//    );
// }
