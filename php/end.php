<?php
	header("Access-Control-Allow-Origin: *");
	$Orderkey=0;
	$Number=0;
	$Pay=0;	
	$Pay=$_REQUEST['Pay'];
	$Number=$_REQUEST['Numbers'];
	$Orderkey=$_REQUEST['Orderkey'];
	$db=new MySQLi("localhost","root","","carriage");
	$sql = "Update orders set Status = '确认收货' where Orderkey = $Orderkey";
	
	$sql2 = "Update driver set Account = Account+$Pay where Number = $Number";
	$result=mysqli_query($db,$sql);
	$result2=mysqli_query($db,$sql2);
	if (!$result) {
	    printf("Error: %s\n", mysqli_error($db));
	    exit();
	}
	mysqli_close($db);
	echo 1;
?>
