<?php 
  // Read from my_sql
   include "db.php";
   include "functions.php";
   include "validation.php";
   include "includes/header.php";
?>


   <div class="container">
      <div class="col-m-6">
         <h1 class="text-center">Delete User</h1>
         <form action="delete.php" method="post">
               <div class="form-group">
                  <select name="id" id="">
                     <?php
                       printIdSelectorOptions();
                     ?>    
                  </select>
            
               </div>
               <input class="btn btn-primary" type="submit" name="submit" value="Delete">
         </form>        
         <?php
            if (isset($_POST['submit'])) {
               deleteUser();
            }
         ?>
      </div>
   </div>
   
   <?php include "includes/footer.php";?>