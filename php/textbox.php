<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> This is my first Web Test </title>
</head>
<body>



<form action="textbox.php" method="get">
    Username 
    <br>
    <input type="text" name="Username">
    <br>
    
    <br>
    Age: 
    <br>
    <input type="number" name="age">
    <input type="submit">
</form>
<br>
Your Name is
<?php

echo $_GET["Username"];
?>
<br>
<?php

echo "Your Age is";

echo $_GET["age"];
?>







</body>

</html> 