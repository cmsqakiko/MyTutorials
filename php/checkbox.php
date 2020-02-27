<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> This is my first Web Test </title>
</head>
<body>



<form action="checkbox.php" method="post">
    Apples<input type="checkbox" name="fruits[]" value="apples"><br>
    oranges<input type="checkbox" name="fruits[]" value="orange"><br>
    mango<input type="checkbox" name="fruits[]" value="mango"><br>
    pears<input type="checkbox" name="fruits[]" value="pear"><br>
    <input type="submit">


</form>
<?php
  $fruits = $_POST["fruits"];

  echo $fruits[0]; 
  echo "<br>";                     /*first box that has been checked*/
  echo $fruits[1];
  echo "<br>";
  echo $fruits[2];
  echo "<br>";
  echo $fruits[3];
?>



</body>

</html> 