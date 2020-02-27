<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> This is my first Web Test </title>
</head>
<body>

<form action="madlib.php" method="get">

    Color: <input type="text" name="color"><br>
    Plural Noun: <input type="text" name="pluralnoun"><br>
    celebrity: <input type="text" name="celebrity"><br>
    <input type="submit">
    
</form>
<br><br>
<?php

    $color = $_GET["color"];
    $pluralnoun = $_GET["pluralnoun"];
    $celebrity = $_GET["celebrity"];


    echo "Roses are $color <br>";
    echo "$pluralnoun are Blue <br>";
    echo "I Love $celebrity <br>";
?>



</body>

</html>