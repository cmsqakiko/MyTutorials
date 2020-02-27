<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> This is my first Web Test </title>
</head>
<body>




<form action="calculator.php" method="post">
    First Number: <input type="number" step="0.001" name="num1"> 
    <br>
    Second Number:<input type="number" step="0.001"  name="num2">
    <br>
    Operator: <input type="Textbox" name="op"><br>

    <input type="submit">

</form>

<?php
    /*step="0.001 is the allowed decimal for the text box or anything*/
$num1 = $_POST["num1"];

$num2 = $_POST["num2"];

$op = $_POST["op"];

if($op == "+")
{
    echo $num1 + $num2;
}
else if($op == "-")
{
    echo $num1 - $num2;
}
else if($op == "/")
{
    echo $num1 / $num2;
}
else if($op == "*")
{
    echo $num1 * $num2;
}
else{
    echo "Invalid Operator";
}

?>



</body>

</html> 