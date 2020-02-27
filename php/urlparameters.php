<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> This is my first Web Test </title>
</head>
<body>

<form action="urlparameters.php" method="post">

     Name: <input type="password" name="password"><br>
    <input type="submit">
    
</form>
<br><br>
<?php
    /*methot get is not secured compared to method post
    information given will not be shown in url
    */
    
    echo $_POST["password"];
?>



</body>

</html>