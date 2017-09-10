<?php 
    // name, nickname, birthday, custom message
    $name = 'Khoo Yong Jun';
    $nickname = 'Jun';
    $birthday = '14th November 1995';
    $singleQuote = 'This is ' . $name . '.<br>' . 'My nickname is ' . $nickname . '.<br>' . 'My birthday is on ' . $birthday . '.<br>';
    $doubleQuote = "This is $name.<br>My nickname is $nickname.<br>My birthday is on $birthday.<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php101</title>
</head>
<body>
    <div>
        <h1>Single Quote outcome:</h1>
        <span>
            <?php 
                echo $singleQuote;
            ?>
        </span>
    </div>
    <div>
        <h1>Double Quote outcome:</h1>
        <span>
            <?php
                echo $doubleQuote;
            ?>
        </span>
    </div>
</body>
</html>