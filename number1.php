<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 1</title>
</head>
<body>
<h2> Create a simple HTML form and accept the user name and display the name through PHP echo statement.</h2>
   <form method='POST'>
   <h3>Please input your name:</h3>
 <input type="text" name="name">
 <input type="submit" value="Submit Name" name="submit">
 </form>
<?php
//Retrieve name from query string and store to a local variable
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    echo "<h3> Hello   " .$name." </h3>";
}
?>
</body>
</html>