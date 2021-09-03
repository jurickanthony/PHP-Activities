<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 6</title>
</head>
<body>
<form method="post">
<h2>Write a PHP function that checks whether a passed string is a palindrome</h2>
<h3>Enter a String:</h3>
<input type="text" name="text" /><br><br>
<input  type="submit" name="submit" value="SUBMIT">
</form>
<?php
if (isset($_POST['submit'])) {
    $string = $_POST['text'];
    function check_palindrome($string)
    {
        if ($string == strrev($string)) {
            return 1;
        } else {
            return 0;
        }

    }
   
    $flag_val = check_palindrome($string);
    if ($flag_val == 1)
       echo "$string is a palindrome";
    else
       echo "$string is a not a palindrome";
}

?>



</body>
</html>