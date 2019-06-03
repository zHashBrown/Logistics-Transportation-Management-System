<?php
//造一个mysqli对象，造连接对象
header("Access-Control-Allow-Origin: *");
$db=new MySQLi("localhost","root","","usermsg");
//括号里面填的是IP地址域名，用户名，密码，数据库的名字
    //准备一条SQL语句
  $result = mysqli_query($db,"select * from usermsg1");
  $array= array();
  class Message{
    public $number;
  }
  while($row = mysqli_fetch_array($result)) {
    $m=new Message();
    $m->number = $row['number'];
    $array[]=$m;
  }
  $data=json_encode($array);
  echo $data;
?>