<?php
//造一个mysqli对象，造连接对象
header("Access-Control-Allow-Origin: *");
$db=new MySQLi("localhost","root","","carriage");
//括号里面填的是IP地址域名，用户名，密码，数据库的名字
	$orderkey=0;
	$number=0;
	$orderkey=$_REQUEST['Orderkey'];
	$number=$_REQUEST['number'];
//准备一条SQL语句
$sql = "SELECT count(*) r FROM receiveorders WHERE number = $number and Orderkey=$orderkey";
$result = mysqli_query($db,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
$row = mysqli_fetch_array($result);
$end = $row['r'];
echo $end;
?>