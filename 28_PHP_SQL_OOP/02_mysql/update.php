<?php 
  // Read from my_sql
   include "db.php";
   include "functions.php";
   include "validation.php";
   include "includes/header.php";
?>

   <div class="container">
      <div class="col-m-6">
         <h1 class="text-center">Update User</h1>
         <form action="update.php" method="post">
               <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" >
               </div>
               <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" >
               </div>
               <div class="form-group">
                  <select name="id" id="">
                     <?php
                       printIdSelectorOptions();
                     ?>    
                  </select>
            
               </div>
               <input class="btn btn-primary" type="submit" name="submit" value="update">
         </form>
         <?php
            if(validateForm()) {
               updateUser();
            }
         ?>           
      </div>
   </div>
   
 <?php include "includes/footer.php";?>
