<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 8</title>
</head>
<body>
<h2>Write a PHP script to calculate the difference between two dates.</h2>
<form method="post"> 
<h3>Enter Start Date:  </h3>
<input type="date" name="number1" /><br><br>  
<h3>Enter End Date:  </h3>
<input type="date" name="number2" /><br><br>  
<input  type="submit" name="submit" value="Difference">  
</form> 
<?php  
    if(isset($_POST['submit']))  
    {  
        $first = $_POST['number1'];  
        $second = $_POST['number2']; 
        $start_date = strtotime($first);
$end_date = strtotime($second);
        echo "Difference between two dates: "
    . ($end_date - $start_date)/86400 ." day's"; 
  
}  
?>  
</body>
</html>