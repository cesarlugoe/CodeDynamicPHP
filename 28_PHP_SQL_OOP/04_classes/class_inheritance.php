<?php
    class Car {

      var $wheels = 4;
      var $speed = 100;
      var $doors = 4;

      function changeWheels($number) {
         $this->wheels = $number;
      }

      function accelerate($newSpeed) {
         $this->speed = $newSpeed; 
      }

   }

// so plane has all functionality of Car
   class plane extends Car{
      var $wheels = 20;
   }

   $jet = new Plane();

   echo $jet->speed;
   echo "<br>" . $jet->wheels;