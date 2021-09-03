<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 9</title>
</head>
<body>
<h2>Write a PHP function to convert Arabic Numbers to Roman Numerals.</h2>
<form method="post">
<h3>Enter a Number:  </h3>  
<input type="number" name="number1" /><br><br>  
<input  type="submit" name="submit" value="SUBMIT">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $num = $_POST['number1'];
        function numberToRomanRepresentation($num) {
            $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
            $returnValue = '';
            while ($num > 0) {
                foreach ($map as $roman => $int) {
                    if($num >= $int) {
                        $num -= $int;
                        $returnValue .= $roman;
                        break;
                    }
                }
            }
            return $returnValue;
        }
        $flag_val = numberToRomanRepresentation($num);
        echo "$num to $flag_val";

}  
?>  
</body>
</html>