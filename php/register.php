<?php
	header("Access-Control-Allow-Origin: *");
	$telephone=0;
	$password=0;
	$telephone=$_REQUEST['telephone'];
	$password=$_REQUEST['password'];
	$table=$_REQUEST['table'];
	$db=new MySQLi("localhost","root","","carriage");
	$sql="INSERT INTO $table(number,password,Account) VALUES('$telephone', '$password', 0);";
	$result=mysqli_query($db,$sql);
	mysqli_close($db);
?>