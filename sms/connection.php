<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
<?php

$servername	="localhost";
$username	="root";
$password	="";
$databasename	="mydetail";

//create connection
$conn	=mysqli_connect($servername,$username,$password,$databasename);
// check connection

if(!$conn){
	
	die ("Connection Declined" .mysqli_connect_error());
}



?>

</body>
</html>