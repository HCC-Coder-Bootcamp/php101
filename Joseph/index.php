<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My statement</title>
</head>
<body>
	<?php 

	$myName = 'Joseph';

	$myGender = 'male';

	$myNickname = '左手摇';

	$myBirthday = 'June 18';

	$myStatus = 'still single';

	$selfIntroduction1 = 'Hi there!! My name is ' . $myName . ', but sometimes my friends would like to call me ' . $myNickname . '. I am a male.';

	$selfIntroduction2 = "My birthday is on $myBirthday. I am $myStatus right now.";

	echo $selfIntroduction1;

	echo '<br>';

	echo $selfIntroduction2;

	?>
</body>
</html>