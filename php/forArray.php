<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> This is my first Web Test </title>
</head>
<body>

<?php
  
  $luckyNumbers = Array(2,35,64,86,53,32,46,5777,24);
    
  echo "$luckyNumbers[3]<br>";

  for($i=1; $i <=5; $i++)
    {
        echo "$i <br>";

    }

    for($i=0; $i <= count($luckyNumbers); $i++)
    {
        echo "$luckyNumbers[$i]<br>";


    }
    


    
?>



</body>

</html>