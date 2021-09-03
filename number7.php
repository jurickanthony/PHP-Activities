<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 7</title>
</head>
<body>
<h2>Create a simple 'birthday countdown' script, the script will count the number of days <br> between current day and birthday. </h2>
<form method="post">   
</form> 
<?php
$target_days = mktime(0,0,0,06,13,2022);//my birthday
$today = time();
$diff_days = ($target_days - $today);
$days = (int)($diff_days/86400);
print "Days till next birthday: $days days!"."\n";
?> 
</body>
</html>