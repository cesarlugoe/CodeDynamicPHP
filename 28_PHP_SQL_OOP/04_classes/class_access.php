<?php
    class Car {

      //public: it the same as var, available to all program
      //protected: available inside the class declaration (functions) and subclasses (functions)
      //private: vailable only to this class/ even if it's extended

      public $wheels = 4;
      protected $speed = 100;
      private $doors = 4;
      var $color = red;

      function showSpeed(){
         echo $this->speed;
      }
     
   }

   $bwm = new Car("bwm");
   $bwm->showSpeed();

   //Can't do : echo $bmw->speed;
  
