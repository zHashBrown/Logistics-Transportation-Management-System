<?php
  //造一个mysqli对象，造连接对象
  header("Access-Control-Allow-Origin: *");
  $db=new MySQLi("localhost","root","","carriage");
  //括号里面填的是IP地址域名，用户名，密码，数据库的名字
  
  //准备一条SQL语句
  $number=1;
  $Account=2;
  $Pay=3;
  $charge=4;
  $number=$_REQUEST['number'];
  $Account=$_REQUEST['Account'];
  $charge=$_REQUEST['charge'];
  $Pay = $Account+$charge;
  $sql = "UPDATE `owner` 
  SET 
  `Account` = '$Pay'
  WHERE `number` = '$number'";
  $result = mysqli_query($db,$sql);
  if (!$result) {
      printf("Error: %s\n", mysqli_error($db));
      exit();
  }
  mysqli_close($db);
  echo $result;
?>