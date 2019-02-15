<?php
   include "db.php";
   

  function fetchAllData($successMessage) {
      $query = "SELECT * FROM users";
      return queryDataBase($query, $successMessage);
  }

  function createUser() {
     $username = strtolower($_POST['username']);
     $password = $_POST['password'];
     $query = "INSERT INTO users(username, password)";
     $query .= "VALUES ('$username', '$password')"; 
     queryDataBase($query, "User Created!");
  }

  function updateUser() {
      $username = strtolower($_POST['username']);
      $password = $_POST['password'];
      $id = $_POST['id'];
      $query = "UPDATE users SET ";
      $query .= "username = '$username', ";
      $query .= "password = '$password' ";
      $query .= "WHERE id = $id ";
      
      queryDataBase($query, "User Updated!");
  }

  function queryDataBase($query, $successMessage) {
     global $connection;
     $result =  mysqli_query($connection, $query);
     if(!$result) {
         die('Query FAILED' . mysqli_error($connection));
      } else {
         echo "$successMessage" ;
      }
      return $result;
  }

  function printIdSelectorOptionsForUpdate() {
      $confimationMessage = " ";
      $data = fetchAllData($confimationMessage);
      while ($row = mysqli_fetch_assoc($data)) {
         $id = $row['id'];
         echo "<option value='$id'>$id</option>";
      }
}

   function printDataBase() {
      $confimationMessage = " ";
      $data = fetchAllData($confimationMessage);
      while ($row = mysqli_fetch_assoc($data)) {
         echo "<pre>";
         print_r($row);
         echo "</pre>"; 
      }   
   }