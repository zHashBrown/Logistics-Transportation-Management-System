<?php
  //造一个mysqli对象，造连接对象
  header("Access-Control-Allow-Origin: *");
  $db=new MySQLi("localhost","root","","carriage");
  //括号里面填的是IP地址域名，用户名，密码，数据库的名字
  
  //准备一条SQL语句
  $number=1;
  $Password=2;
  $Name=3;
  $Address=4;
  $Cargo=5;
  $number=$_REQUEST['number'];
  $Password=$_REQUEST['Password'];
  $Name=$_REQUEST['Name'];  
  $Address=$_REQUEST['Address'];
  $Cargo=$_REQUEST['Cargo'];

  $sql = "UPDATE `owner` 
  SET 
  `Password` = '$Password', 
  `Name` = '$Name' ,
  `Address` = '$Address' ,
  `Cargo` = '$Cargo'
  WHERE `number` = '$number'";
  $result = mysqli_query($db,$sql);
  if (!$result) {
      printf("Error: %s\n", mysqli_error($db));
      exit();
  }
  mysqli_close($db);
?>