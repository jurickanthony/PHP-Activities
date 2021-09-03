<!DOCTYPE html>
<html>
<body>
<h2>Write a PHP program to sort a list of elements using Bubble sort</h2>
<?php
$cars = array("ISUZU", "CHEVROLET", "FERRARI");
echo "Original Array :\n";
echo implode(', ',$cars );
echo "<br>";
sort($cars);
$finalCars = array();
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    array_push($finalCars,$cars[$x]);


}
echo "\nSorted Array\n: ";
  echo implode(', ',$finalCars );
?>

</body>
</html>