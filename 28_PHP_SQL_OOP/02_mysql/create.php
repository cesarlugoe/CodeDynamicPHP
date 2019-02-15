<?php 
   include "db.php";
   include "validation.php";
   include "functions.php";
   //Signup - Create
?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Page Title</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container">
      <div class="col-m-6">
         <form action="create.php" method="post">
            <div class="form-group">
               <label for="username">Username</label>
               <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
               <label for="password">Password</label>
               <input type="text" name="password" class="form-control">
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
   
</body>
</html>



