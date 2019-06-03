<?php
	header("Access-Control-Allow-Origin: *");
	$Orderkey=0;
	$Cargoname=0;
	$Category=0;
	$Weight=0;
	$Beginplace=0;
	$Endplace=0;
	$Pay=0;
	$Reqtime=0;
	
	
	$Orderkey=$_REQUEST['Orderkey'];
	$Cargoname=$_REQUEST['editCargoname'];
	$Category=$_REQUEST['editgoodstype'];
	$Weight=$_REQUEST['editWeight'];
	$Beginplace=$_REQUEST['editstartplace'];
	$Endplace=$_REQUEST['editdestination'];
	$Pay=$_REQUEST['editPay'];
	$Reqtime=$_REQUEST['editReqtime'];

	$db=new MySQLi("localhost","root","","carriage");

	$sql = "UPDATE orders 
	SET 
	Cargoname = '$Cargoname', 
	Category = '$Category', 
	Weight = $Weight, 
	Begin = '$Beginplace', 
	End = '$Endplace', 
	Pay = $Pay, 
	Reqtime = '$Reqtime',
	Audit = 0	
	WHERE Orderkey = $Orderkey ";
	
	$result=mysqli_query($db,$sql);
	if (!$result) {
	    printf("Error: %s\n", mysqli_error($db));
	    exit();
	}
	mysqli_close($db);
	echo 1;
?>
