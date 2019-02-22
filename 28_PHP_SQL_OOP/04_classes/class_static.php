<?php
    class Car {


      //static means it is only for the class, and not attached to the instances of it. 
      static $wheels = 4;
      static $speed = 100;
     

      function showSpeed(){
         echo $this->speed;
      }

      //can't do
      // function numberOfWheels() {
      //    echo $this->wheels;
      // }

      //to make a static function:

      function speeder() {
        Car::$speed = 150;
      }
     
   }

   $bwm = new Car("bwm");
   //$bmw->numberOfWheels();


   //to access a static property so it's not attached to any instance but to the class
   echo Car::$wheels . "<br>";

   Car::speeder();
   echo Car::$speed;
   
