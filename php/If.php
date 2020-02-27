<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> This is my first Web Test </title>
</head>
<body>

<?php
  $isMale = true;
    $isTall = true;
  if($isMale&&$isTall){

    echo "You are tall Male";
  }
  else if($isMale&&!$isTall){

    echo "You are short Male";
  }
  else if(!$isMale&&$isTall){

    echo "You are Tall Female";
  }
  else{
    echo "You are short Female";
  }
?>



</body>

</html>