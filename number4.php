<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Write a function to check whether a number is prime or not.</h2>
<form method="post"> 
<h3>Enter a Number: </h3>  
<input type="number" name="number1" /><br><br>  
<input  type="submit" name="submit" value="SUBMIT">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $num = $_POST['number1'];
        function check_prime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
$flag_val = check_prime($num);
if ($flag_val == 1)
   echo "$num is a prime number";
else
   echo "$num is a non-prime number";
}  
?>  
</body>
</html>