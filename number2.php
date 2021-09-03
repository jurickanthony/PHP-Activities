<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Write a PHP program to compute the sum of the two given integer values. <br> If the two values are the same, then returns triple their sum.</h2>
<form method="post">  
<h3>Enter First Number:  </h3>
<input type="number" name="number1" /><br><br>  
<h3>Enter Second Number:  </h3> 
<input type="number" name="number2" /><br><br>  
<input  type="submit" name="submit" value="SUBMIT">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $sum =  $number1+$number2;     
echo "The sum of $number1 and $number2 is: ".$sum ."<br>";
if($number1==$number2){
    $product = $sum*3;
    echo "SAME INPUTED NUMBER WILL TRIPLE THEIR SUM is: ".$product;
}

}  
?>  
</body>
</html>