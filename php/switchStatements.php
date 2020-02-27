<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> This is my first Web Test </title>
</head>
<body>




<form action="switchStatements.php" method="post">
    What was your Grade?
        <input type="text" name="grade">
        <input type="submit">
        


</form>





<?php
  $grade =$_POST["grade"];


    switch($grade){


        case "A/a":
            echo "You did Amazing";
        break;
        case "B":
            echo "You did pretty Good";
        break;
        case "C,c":
            echo "You did Amazing";
        break;
        
        default:
        echo "invalid Grade";
    }

?>



</body>

</html>