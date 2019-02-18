<?php 
   include "db.php";
   include "validation.php";
   include "functions.php";
   include "includes/header.php";
   //Signup - Create
?>


   <div class="container">
      <div class="col-m-6">
         <h1 class="text-center">Create</h1>
         <form action="create.php" method="post">
            <div class="form-group">
               <label for="username">Username</label>
               <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
               <label for="password">Password</label>
               <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="submit">
         </form>
         <?php
            if(validateForm()) {
               createUser();
            }   
         ?>
      </div>
   </div>  

<?php include "includes/footer.php";?>



