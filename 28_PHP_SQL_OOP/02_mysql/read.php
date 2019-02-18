<?php 
  // Read from my_sql
   include "db.php";
   include "functions.php";
   include "includes/header.php";
?>


   <div class="container">
   <h1 class="text-center">Read</h1>
      <div class="col-m-6">
         <?php
            printDataBase();
         ?>
      </div>
   
   </div>
   
   <?php include "includes/footer.php";?>

