<?php
	
	// Constants
	define("TITLE", "String operations");

	// Custom Variables
	$my_name = Cesar;
	$current_year = 2018;
	$lesson_number = 17;

	$a = "Hola ";
	$b = "mis Amigos!";


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_number?>: <small><?php echo TITLE ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Concatenation Operator <code>.</code></h3>
				<?php
					// your code here
					$c = $a . $b;
					echo $c;
				?>
				
				<h3>Concatenating Assignment Operator <code>.=</code></h3>
				<?php
					// your code here
					$a = "Hola ";
					$a .= "mis Amigos!";

					echo $a;
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
