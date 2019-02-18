<?php
   include "db.php";
   
  function createUser() {
     $username = strtolower(protectFieldValue('username'));
     $password = protectFieldValue('password');
     $password = encryptPassword($password);
     $query = "INSERT INTO users(username, password)";
     $query .= "VALUES ('$username', '$password')"; 
     queryDataBase($query, "User Created!");
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

  function updateUser() {
      $username = strtolower(protectFieldValue('username'));
      $password = protectFieldValue('password');
      $password = encryptPassword($password);
      $id = $_POST['id'];
      $query = "UPDATE users SET ";
      $query .= "username = '$username', ";
      $query .= "password = '$password' ";
      $query .= "WHERE id = $id ";
      
      queryDataBase($query, "User Updated!");
  }

  function protectFieldValue($fieldName) {
      global $connection;
      $fieldValue = $_POST["$fieldName"];
      return mysqli_real_escape_string($connection, $fieldValue);
  }

  function encryptPassword($password) {
     $hashFormat = "$2y$10$";
     $salt = "iusesomecrazystrings22";
     $hashFormatAndSalt = $hashFormat . $salt;
     $password = crypt($password, $hashFormatAndSalt);
     return $password;
  }

  function deleteUser() {
      $id = $_POST['id'];
      $query = "DELETE FROM users ";
      $query .= "WHERE id = $id ";
      
      queryDataBase($query, "User Deleted!");
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

  function printIdSelectorOptions() {
      $confimationMessage = " ";
      $data = fetchAllData($confimationMessage);
      while ($row = mysqli_fetch_assoc($data)) {
         $id = $row['id'];
         echo "<option value='$id'>$id</option>";
      }
   }

   function fetchAllData($successMessage) {
      $query = "SELECT * FROM users";
      return queryDataBase($query, $successMessage);
   }

   