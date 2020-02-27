<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> This is my first Web Test </title>
</head>
<body>


<!--
ANY COMMENTS HERE
-->
<form action="assosiativeArray.php" method="POST">
    <input type="text" name="student">
    <input type="submit">


</form>

<?php


  
$grades = array("Jim"=>"b+","kiko"=>"S+","mella"=>"A+","janot"=>"F+","oscar"=>"C+");
echo $grades["kiko"];
/*Jim, kiko mella janot and oscar are called keys.
while B+, S+,A+,F+ ..... are called values
keys has to be unique while value can be different
*/
echo "<br>";

$grades["Jim"] = "F";
echo $grades["Jim"];
?>

<br>
Grade of 
<?php
echo $_POST["student"];
echo " is";
echo "<br>";
echo $grades[$_POST["student"]];

?>


</body>

</html>