<?php
	header("Access-Control-Allow-Origin: *");
	$Orderkey=0;
	$Orderkey=$_REQUEST['orderkeydelete'];
	$db=new MySQLi("localhost","root","","carriage");
	$sql = "delete from orders  
	WHERE Orderkey=$Orderkey ";
	$sql2 = "delete from receiveorders  
	WHERE Orderkey=$Orderkey ";
	$result=mysqli_query($db,$sql);
	$result2=mysqli_query($db,$sql2);
	if (!$result) {
	    printf("Error: %s\n", mysqli_error($db));
	    exit();
	}
	mysqli_close($db);
	echo 1;
?>
