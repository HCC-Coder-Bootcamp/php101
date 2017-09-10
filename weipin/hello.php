<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Hello World</h1>
	<?php echo 'Hello PHP';

		echo "<br>\n";

		$myName = "\tElliot";

		$greeting = "Welcome home, $myName !";

		echo $greeting;
	 ?>
	 <?php 

	 	echo '<br>';

	 	$myName = 'Yap' ;

	 	$myGender = 'Male' ;

	 	$selfIntroduction = 'Hello, I am ' . $myName . '<br>' . 'My gender is ' . $myGender;

	 	echo $selfIntroduction;

	  ?>
</body>
</html>