<?php

include "../lib/php/functions.php";

$users = file_get_json("users.json");






function showUserPage($user) {

$classes = implode(", ", $user->classes);

echo <<<HTML
<nav>
  
      <a href="{$_SERVER['PHP_SELF']}" > < Back </a>
  
</nav>
<div>
   <h2>$user->name</h2>
   <div class="infor_form">
      <strong>Type</strong>
      <input type="text" name="type" value="$user->type">
   </div>
   <div class="infor_form">
      <strong>Email</strong>
      <input type="text" value="$user->email">
   </div>
   <div class="infor_form">
      <strong>Classes</strong>
      <input type="text" value="$classes">
   </div>


   <div>
    <input type="submit" name="submit" value="Submit" class="button04">
  </div>

  
</div>
HTML;
}





?><!DOCTYPE html>
<html lang="en">
<head>
   <title>User Administrator</title>

   <?php include "../parts/meta.php"; ?>
</head>
<body>

   <header class="navbar">
      <div class="container display-flex">
         <div class="flex-none">
            <h1>Users Admin</h1>
         </div>
         <div class="flex-stretch"></div>
         <!-- nav.nav.flex-none>ul>li>a[href=#]>{List} -->
         <nav class="nav flex-none">
            <ul>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
            </ul>
         </nav>
      </div>
   </header>

   <div class="container">
      <div class="card soft white">

         <?php


         if(isset($_GET['id'])) {

            showUserPage($users[$_GET['id']]);

         } else {

         ?>

         <h2>User List</h2>

         <ul>
         <?php

         for($i=0; $i<count($users); $i++) {
            echo "<li>
            <a href='{$_SERVER['PHP_SELF']}?id=$i'>{$users[$i]->name}</a>
            </li>";
         }

         ?>
         </ul>

         <?php } ?>
      </div>
   </div>
   
</body>
</html>