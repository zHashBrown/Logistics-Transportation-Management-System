<?php
	header("Access-Control-Allow-Origin: *");
	$orderkey=0;
	$number=0;
	$orderkey=$_REQUEST['Orderkey'];
	$number=$_REQUEST['number'];
	$db=new MySQLi("localhost","root","","carriage");
	$sql = "INSERT INTO `receiveorders` 
	select NULL, $orderkey, $number, Name, '已接单'
	from driver
	where number='$number'";
	$result=mysqli_query($db,$sql);
	mysqli_close($db);
	echo 1;
?>