<?php

	// Constants
	define("TITLE", "Arrays");

	// Variables
	$my_name = Cesar;
	$current_year = 2018;
	$lesson_number = 9;
	
	// Arrays
	$age_group = array ("teenager", "adult", "child");

	$moustaches = array (

							array (
								"name" => "HandleBar",
								"colour" => "black"
							),	
							array (
								"name" => "Fu Manchu",
								"colour" => "brown"
							),	
							array (
								"name" => "Salvador Dali",
								"colour" => "blonde"
							)		
				);	
	$gentlemen = array (

							array (
								"name" => "Carter",
								"country" => "Canada"
							),
							array (
								"name" => "Rodrigo",
								"country" => "Uruguay"
							),
							array (
								"name" => "Giovanni",
								"country" => "Italy"
							)
	)
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <?php echo TITLE ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3><?php echo $gentlemen[0]["name"];?> from <?php echo $gentlemen[0]["country"]; ?></h3>
				<p> 
					<strong><?php echo $gentlemen[0]["name"]; ?></strong> is quite the <strong><?php echo $age_group[1];?></strong>! 
					 He sports a solid <strong><?php echo $moustaches[0]["name"];?></strong>
					 that is <strong><?php echo $moustaches[0]["colour"];?></strong> colour.
				</p>
				
				<h3><?php echo $gentlemen[1]["name"];?> from <?php echo $gentlemen[1]["country"]; ?></h3>
				<p>
					<strong><?php echo $gentlemen[1]["name"];?></strong> is rather a dapper <strong><?php echo $age_group[0]?></strong>! 
					He proudly wears a <strong><?php echo $moustaches[1]["name"];?></strong> that is colored gentle 
					<strong><?php echo $moustaches[1]["colour"]; ?></strong>.
				</p>
				
				<h3><?php echo $gentlemen[2]["name"];?> from <?php echo $gentlemen[2]["country"]; ?></h3>
				<p> <strong><?php echo $gentlemen[2]["name"];?></strong> might seem too young for a 'stache because he is a <strong><?php echo $age_group[2];?></strong>.
                 But he proudly displays his <strong><?php echo $moustaches[2]["name"]?></strong> at school! Although, it's a little hard to see because it's light 
					  <strong><?php echo $moustaches[2]["colour"]; ?></strong>.
				</p>
				
			</div><!-- end sandsbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<div class="navs cf">
				<a href="" class="button prev">Previous Lecture</a>
				<a href="" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo $current_year?> - <?php echo $my_name ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
