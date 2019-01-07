<?php
	
	// Constants
	define("TITLE", "For Loop");
	
	// Custom Variables
	$myName	= "Brad Hussey";
	$lessonNum	= 20;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Final Example</h2>
			<p>Make sure to view the source code in your editor!</p>	
			
			<div class="sandbox">
				
				<?php
				 
					for ($a=0; $a<=20; $a++) {
					
						echo "Number: $a <br>";
					
					}

					function getCount($str) {
						$vowelsCount = 0;
						
						// enter your magic here
						str_split($str);
						
						for ($i = 0; $i <= count($str); $i++) {
							if ( in_array("a", $str[i]) || in_array("e", $str[i]) || in_array("i", $str[i]) ) {
							  //$vowelsCount++; 
							  echo $vowelsCount;
							}
							if ( in_array("o", $str[i]) || in_array("u", $str[i]) ) {
							  $vowelsCount += 1;
							}
						 }
						
						return $vowelsCount;
					 }
				 
				?>
				
			</div><!-- end sandbox -->
			
			<a href="practice.php" class="button">Check out your example</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $myName; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
