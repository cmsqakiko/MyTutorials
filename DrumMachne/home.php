<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> This is my first Web Test </title>
</head>
<body>
<?php

/*
This is to test the capabilities of PHP
*/
$varname = "variable";
$varname2 = "variable Name";
$varnum = 13;
$var = false;
null;

echo ("Hello World");                           /*Print something */
echo "<br>";                                    /* next pharagraph */
/*or*/
echo "Hello World";
echo "<br>";
echo strtolower($varname);      s                   /*pull up variable nad to lower case*/
echo "<br>";
echo strtoupper($varname);                      /*pull up variable nad to upper case*/
echo "<br>";
echo strlen($varname);                             /*pull up variable and how long index is*/
echo "<br>";
echo $varname[1];                               /*Index Position*/
echo "<br>";
$varname[0] = "M";                               /*Change character in index*/
echo $varname;
$varname[0] = "V";  
echo "<br>";
echo $varname;
echo "<br>";
echo str_replace("variable","dar",$varname2);            /*change string*/
echo "<br>";
echo substr($varname2,9);                       /*grab a sub string*/
echo "<br>";
echo substr($varname2,9,2);                     /*grab a sub string with length*/




/*                                                                                                                                                                                      

Numbers

?>
</body>

</html>