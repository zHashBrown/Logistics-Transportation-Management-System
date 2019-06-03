<?php
	header("Access-Control-Allow-Origin: *");
	$Orderkey=0;
	$drivernumber=0;
	$Pay=0;
	$Number=0;
	
	$Orderkey=$_REQUEST['Orderkey'];
	$drivernumber=$_REQUEST['drivernumber'];
	$Pay=$_REQUEST['Pay'];
	$Number=$_REQUEST['Numbers'];
	$db=new MySQLi("localhost","root","","carriage");
	
	$sql = "Update orders set Status = '选定司机' where Orderkey = $Orderkey";
	
	$sql2 = "delete from receiveorders  
	WHERE Orderkey=$Orderkey 
	and Number!=$drivernumber";
	
	$sql3 = "Update receiveorders set Status = '选定司机' where Orderkey = $Orderkey";
	
	
	$sql4 = "Update owner set Account = Account-$Pay where Number = $Number";
	
	$result=mysqli_query($db,$sql);
	$result2=mysqli_query($db,$sql2);
	$result3=mysqli_query($db,$sql3);
	$result4=mysqli_query($db,$sql4);
	if (!$result4) {
	    printf("Error: %s\n", mysqli_error($db));
	    exit();
	}
	mysqli_close($db);
	echo 1;
?>
