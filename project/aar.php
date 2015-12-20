<!DOCTYPE HTML>
<html>
<head>
<title>Alloy Jacket Website | Home </title>
</head>
<body>
<?php
$nm=$_GET["name"];
$cardno=$_GET["password"];
$sno=$_GET["sample"];
mysql_connect("localhost","root","");
mysql_select_db("sam");
mysql_query("insert into pam values('$nm','$cardno','$sno')");

?>
</body>
</html>
