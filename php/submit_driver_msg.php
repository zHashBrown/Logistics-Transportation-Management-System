<?php
  //造一个mysqli对象，造连接对象
  header("Access-Control-Allow-Origin: *");
  $db=new MySQLi("localhost","root","","carriage");
  //括号里面填的是IP地址域名，用户名，密码，数据库的名字
  
  //准备一条SQL语句
  $number=1;
  $Password=2;
  $Name=3;
  $CarType=4;
  $Carnumber=5;
  $TransportType=6;
	$number=$_REQUEST['number'];
  $Password=$_REQUEST['Password'];
  $Name=$_REQUEST['Name'];
	$CarType=$_REQUEST['CarType'];
  $Carnumber=$_REQUEST['Carnumber'];
  $TransportType=$_REQUEST['TransportType'];
  
  $sql = "UPDATE `driver` 
  SET 
  `Password` = '$Password', 
  `Name` = '$Name' ,
  `CarType` = '$CarType' ,
  `Carnumber` = '$Carnumber' ,
  `TransportType` = '$TransportType'
  WHERE `number` = '$number'";
  $result = mysqli_query($db,$sql);
  if (!$result) {
      printf("Error: %s\n", mysqli_error($db));
      exit();
  }
  mysqli_close($db);
?>