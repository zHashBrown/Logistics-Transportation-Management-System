<?php
//造一个mysqli对象，造连接对象
header("Access-Control-Allow-Origin: *");
$db=new MySQLi("localhost","root","","carriage");
//括号里面填的是IP地址域名，用户名，密码，数据库的名字
$number=0;
$table=0;
$number=$_REQUEST['telephone'];
$table=$_REQUEST['table'];
//准备一条SQL语句
$sql = "SELECT count(number) r FROM $table  WHERE number = '$number'";
$result = mysqli_query($db,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
$row = mysqli_fetch_array($result);
$end = $row['r'];
echo $end;
?>