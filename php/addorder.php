<?php
	header("Access-Control-Allow-Origin: *");
	$Cargoname=0;
	$Category=0;
	$Weight=0;
	$Beginplace=0;
	$Endplace=0;
	$Pay=0;
	$Reqtime=0;
	$Numbers=0;
	$Publishtime=0;
	
	$Cargoname=$_REQUEST['Cargoname'];
	$Category=$_REQUEST['goodstype'];
	$Weight=$_REQUEST['Weight'];
	$Beginplace=$_REQUEST['startplace'];
	$Endplace=$_REQUEST['destination'];
	$Pay=$_REQUEST['Pay'];
	$Reqtime=$_REQUEST['Reqtime'];
	
	$Numbers=$_REQUEST['Numbers'];
	$Publishtime=$_REQUEST['Publishtime'];
	
	$db=new MySQLi("localhost","root","","carriage");
	$sql = "INSERT INTO `orders` 
	select NULL, '$Cargoname', $Weight, '$Category', '$Beginplace', '$Endplace', $Pay, '等待接单', '$Reqtime', Name, $Numbers, '$Publishtime', 0 
	from owner 
	where Number='$Numbers'";
	$result=mysqli_query($db,$sql);
	if (!$result) {
	    printf("Error: %s\n", mysqli_error($db));
	    exit();
	}
	mysqli_close($db);
	echo 1;
?>
