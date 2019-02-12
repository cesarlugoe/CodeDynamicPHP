<?php
   if (isset($_POST['submit'])) {
      $username = strtolower($_POST['username']);
      $password = $_POST['password'];

         // seeding an array as a database

         $name = ["edwin", "carlos", "cesar", "jesus", "peter", "maria", "jane"];

         $minimumNumberOfCharacters = 4;
         $maximumNumberOfCharacters = 10;

         if(strlen($username) < $minimumNumberOfCharacters) {
            echo "Username has to be longer that $minimumNumberOfCharacters characters ";
         }

         if(strlen($username) > $maximumNumberOfCharacters) {
            echo "Username can't be longer than $maximumNumberOfCharacters characters";
         }

         if (!in_array($username, $name)) {
            echo "Sorry username or password incorrect";
         } else {
            echo "Welcome $username";
         }
   }

?>


