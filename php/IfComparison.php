<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> This is my first Web Test </title>
</head>
<body>

<?php
  

function getMax($num1, $num2){

    if($num1>$num2){
        return($num1);
    }
    else
    {
        return ($num2);
    }

}

echo getMax(300, 90);
echo "<br>";
echo getMax(290, 90);

?>



</body>

</html>