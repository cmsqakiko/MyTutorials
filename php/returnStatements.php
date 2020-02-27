<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> This is my first Web Test </title>
</head>
<body>

<?php
    function cube($num){
        
        return $num = $num * $num * $num;
               /*return is an ending of function,,, anything next to return will not 
               be sent outside the function*/
               

    }

$cubeResult = cube(4);

echo $cubeResult;



?>




</body>

</html>