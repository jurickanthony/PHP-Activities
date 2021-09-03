<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 5</title>
</head>
<body>
<form method="post"> 
<h2>Write a PHP function that checks whether a string is all lowercase.</h2> 
<h3>Enter a String:  </h3>
<input type="text" name="text" /><br><br>  
<input  type="submit" name="submit" value="SUBMIT">  
</form> 
<?php  
    if(isset($_POST['submit']))  
    {  
        $string1 = $_POST['text'];  
        if (ctype_lower($string1)) {
            echo $string1.' is all lowercase letters.';
        } else {
            echo $string1.' is not all lowercase letters.';
        }

}  
?>   
</body>
</html>