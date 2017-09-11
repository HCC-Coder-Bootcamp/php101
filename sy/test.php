<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php 101</title>
</head>
<body>
	<?php 

	$name = 'shuangyee';
	$nickname = 'sy';
	$birthday = '11 June';
	$custom_message = 'give me an angpau maybe';

	$single_quote_greeting = 'Hi , i am '.$name .'. My nickname is '.$nickname .' .'.$birthday . ' is my birthday , you can '.$custom_message.' .';

		echo $single_quote_greeting;

	 ?>
	
	<br>

	 <?php 

	$name = 'shuangyee';
	$nickname = 'sy';
	$birthday = '11 June';
	$custom_message = 'give me an angpau maybe';

	$double_quote_greeting = "Hi , here is $name , you can call me $nickname . My birthday is on $birthday , so you can $custom_message .";

		echo $double_quote_greeting;

	 ?>
</body>
</html>