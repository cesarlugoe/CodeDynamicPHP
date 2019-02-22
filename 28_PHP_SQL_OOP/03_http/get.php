<?php  

   print_r($_GET);
   $id = 10;

?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Page Title</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
   
   <a href="get.php?id=<?php echo $id; ?>"> Click Here</a>

</body>
</html>