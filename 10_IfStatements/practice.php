<?php
	
	// Constants
	define("TITLE", "If Statements");
	
	// Custom Variables
	$my_name = Cesar;
	$current_year = 2018;
	$lesson_number = 10;

	$a = 20;
	$b = 50;


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
			
			<h1>Tutorial <?php echo $lesson_number ?>: <small><?php echo TITLE ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			<?php 
				if ($a < $b) {
					echo "Yep! $b is certainly less than $a.";

				}
			?>	
				
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
