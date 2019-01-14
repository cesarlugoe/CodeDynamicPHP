<?php
	
	// Constants
	define("TITLE", "Ironack Exercises");
	
	// Custom Variables
   $my_name = Cesar;
   $current_year = 2019;

   // Function max of two numbers
   function maxOfTwoNumbers() {
      $a = 10;
      $b = 20;

      echo "a = $a , b = $b <br>";

      if (a > b ) {
         echo "$a is a higher number the $b";
      } else {
         echo "$b is a higher number the $a <br><br>";
      }
   }

   //Find longest word
   function longestWord() {

      $wordArray = array (
         'mystery',
         'brother',
         'aviator',
         'crocodile',
         'pearl',
         'orchard',
         'crackpot',
      );
      foreach ($wordArray as $word) {
         echo "$word,&nbsp";
      };

      if (count($wordArray) === 0) {
         echo "no words in the array <br><br>";
      };

      $largestlength = 0;
      $largestWord;

      foreach ($wordArray as $word) {
         if (strlen($word) > $largestlength) {
            $largestWord = $word;
         };
      };
      echo "<br><br>The largest word is $largestWord <br><br>";

   };
  

   // calculating a sum
   function sumArray() {
      $numbers = array (6, 12, 1, 18, 13, 16, 2, 1, 8, 10);

      $reducer = function($acumulator, $currentValue) {
         return $acumulator + $currentValue;
      };

      if (count($numbers) === 0) {
         echo "no numbers in the array";
      };
      foreach ($numbers as $number) {
         echo "$number,&nbsp";
      };
      echo "<br>";
      echo array_reduce($numbers, $reducer);

   };
   
   function calculateAverage($numbersAvg) {
      //$numbersAvg = array (2, 6, 9, 10, 7, 4, 1, 9);

      $reducer = function($acumulator, $currentValue) {
         return $acumulator + $currentValue;
      };

      if (count($numbersAvg) === 0) {
         echo "no numbers in the array";
      };

      foreach ($numbersAvg as $number) {
         echo "$number,&nbsp";
      };

      $average = array_reduce($numbersAvg, $reducer) / count($numbersAvg);
      echo "<br>";
      echo "The average number of the array is: $average";

   }

   function avgWordLengthInArray() {
      $wordArray = array(
         'seat',
         'correspond',
         'linen',
         'motif',
         'hole',
         'smell',
         'smart',
         'chaos',
         'fuel',
         'palace',
      );
      $wordsLength = array();

      if (!$wordArray) {
         return undefined;
      }

      foreach ($wordArray as $word) {
         array_push($wordsLength, strlen($word));
      }
      $averageLength = calculateAverage($wordsLength);

      return $averageLength;
   }


   function uniquifyArray($array) {
      if (!$array) {
         return undefined;
      }

      $unifidedArray = array();
      foreach ($array as $word) {
         if (!in_array($word, $unifidedArray)) {
            array_push($unifidedArray, $word);
         }
      }
      print_r($unifidedArray);

   }


   function doesWordExistInArray($arrayOfWords, $word) {
      if (!$arrayOfWords) {
          echo 'the array is empty';
          return;
      }

      foreach ($arrayOfWords as $wordInArray) {
         if ($wordInArray === $word) {
            echo 'the word exists in the array';
            return;
         }
      }

      echo 'the word doesn\'t exist in the array';
   }

   function howManyTimesWordInArray($repetitiveArray, $word) {
      $howManyTimes = 0;

      if (!$repetitiveArray) {
         echo "the array is empty";
         return;
      };

      foreach($repetitiveArray as $wordInArray) {
         if ($word === $wordInArray){
            $howManyTimes += 1;
         }
      }
      echo "The word apears $howManyTimes times in the array";
   }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <!-- TITLE --></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				1. Function max of two numbers <br><br>
            <div class="exercise-answer">
               <?php 
                  maxOfTwoNumbers();
               ?>
            </div>
            
            2. Find Longest Word <br><br>
            <div class="exercise-answer">
               <?php 
                  longestWord();
               ?>
             </div>  

             3. Calculating a Sum <br><br>

             <div class="exercise-answer">
               <?php
                 sumArray();
               ?>
             </div>
             <br><br>

             4. Calculate the Average<br><br>

             <div class="exercise-answer">
             <?php
               $newArray = array (2, 6, 9, 10, 7, 4, 1, 9);
              calculateAverage($newArray);
             ?> 
             </div>
             <br><br>

             5. Average word length
             <div class="exercise-answer">
             <?php
               avgWordLengthInArray();
             ?>  
             </div>
             <br><br>

            6. Make a given array unique
             <div class="exercise-answer">
            <?php
               $repetitiveArray = array(
                  'crab',
                  'poison',
                  'contagious',
                  'simple',
                  'bring',
                  'sharp',
                  'playground',
                  'poison',
                  'communion',
                  'simple',
                  'bring'
               );

               uniquifyArray($repetitiveArray);
            ?>   
             </div>
             <br><br>

             7. Find Element in array

             <div class="exercise-answer">
            <?php
             $arrayOfWords = array (
               'machine',
               'subset',
               'trouble',
               'starting',
               'matter',
               'eating',
               'truth',
               'disobedience',
             );



             doesWordExistInArray($arrayOfWords, 'trouble');
             ?>
             </div>
             <br><br>

             8. How many times in array
             <div class="exercise-answer">
             <?php
               $repetitiveArray = array(
                  'machine',
                  'matter',
                  'subset',
                  'trouble',
                  'starting',
                  'matter',
                  'eating',
                  'matter',
                  'truth',
                  'disobedience',
                  'matter',
               );
              
               howManyTimesWordInArray($repetitiveArray, 'matter');
             ?>
             </div>

             <div class="exercise-answer">
             
             </div>
            


			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<!-- YEAR --> - <!-- NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
