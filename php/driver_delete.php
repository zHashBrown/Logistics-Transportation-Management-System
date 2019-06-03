<?php
	header("Access-Control-Allow-Origin: *");
	$orderkey=0;
	$number=0;
	$orderkey=$_REQUEST['Orderkey'];
	$number=$_REQUEST['number'];
	$db=new MySQLi("localhost","root","","carriage");
	$sql = "delete from `receiveorders` 
	where  Orderkey=$orderkey and number=$number ";
	$result=mysqli_query($db,$sql);
	mysqli_close($db);
	echo 1;
?>