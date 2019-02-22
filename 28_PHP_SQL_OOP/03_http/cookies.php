<?php

   $name = "cookieName";
   $value = 100;
   $expiration = time() + (60*60*24*7);
   setcookie($name, $value, $expiration);
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Page Title</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
   <?php
     if(isset($_COOKIE["cookieName"])) {
      $someOne = $_COOKIE["cookieName"];
     } else {
        $someOne = "";
     }

     echo $someOne;
   ?>   


</body>
</html>