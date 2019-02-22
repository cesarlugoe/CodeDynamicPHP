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

   $myCar = new Car();
   $myCar->changeWheels(10);
   echo $myCar->wheels;

   $truck = new Car();
   echo $truck->wheels = 18;

   echo $myCar->speed . "<br>";
   $myCar->accelerate(150);
   echo "new Speed " . $myCar->speed;

  
?>