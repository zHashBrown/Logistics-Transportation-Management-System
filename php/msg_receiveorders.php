<?php
  //造一个mysqli对象，造连接对象
  header("Access-Control-Allow-Origin: *");
  $db=new MySQLi("localhost","root","","carriage");
  //括号里面填的是IP地址域名，用户名，密码，数据库的名字
  //准备一条SQL语句
  $result = mysqli_query($db,"select * from receiveorders");
  if (!$result) {
      printf("Error: %s\n", mysqli_error($db));
      exit();
  }
  $array= array();
  class Message{
    public $Orderkey;
	  public $Name;
    public $Numbers;
		public $Status;
  }
  while($row = mysqli_fetch_array($result)){
    $m=new Message();
    $m->Orderkey = $row['Orderkey'];
    $m->Numbers = $row['Number'];
    $m->Name = $row['Name']; 
    $m->Status = $row['Status'];
    $array[]=$m;
  }
  $data=json_encode($array);
  echo $data;
?>