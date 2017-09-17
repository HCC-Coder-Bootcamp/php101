<!DOCTYPE html>
<html>
<head>
    <title>document</title>
</head>
<body>
    <h1>hello word</h1>
    <?php
       $myName = 'Tlwei';

       $greeting = 'Welcome home, ' . $myName . '!';

       echo $greeting;
     ?>
     <br>
     <?php
             
       $myName = 'Tlwei';

       $myGender = 'Boy';    

       $selfintroduction = 'Hi, im,' . $myName . ' im a ' . $myGender . ' haha ';
      //double quote 
             //$selfintroduction = "Hi, im $myName im a $myGender haha "; 

       echo $selfintroduction;
     ?>
     <br>
     <?php
             
       $myName = 'Tlwei';

       $myNickname = 'Liwei';

       $myBirthday = '11/18';

       $myCustomemassage = ' haha haha haha';

       $greetingline = 'Hi, im, ' . $myName . ' my nickname is ' . $myNickname . ' my Birthday is ' . $myBirthday . $myCustomemassage;
      //double quote
      //$greetingline = "Hi, im $myName, my nickname is $myNickname my Birthday is $myBirthday $myCustomemassage";

       echo $greetingline;
     ?>
</body>
</html>