<?php
    class Car {

      var $wheels = 4;
      var $speed = 100;
      var $doors = 4;

      //it gets call everytime you instansiate the class
      function __construct($name) {
         echo "<br> new car " . $name ;
      }

     
   }

   $bwm = new Car("bwm");
   $mercedes = new Car("mercedes");

