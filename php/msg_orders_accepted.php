<?php
  //造一个mysqli对象，造连接对象
  header("Access-Control-Allow-Origin: *");
  $db=new MySQLi("localhost","root","","carriage");
  //括号里面填的是IP地址域名，用户名，密码，数据库的名字
  //准备一条SQL语句 
  $Numbers=0;
  $Numbers=$_REQUEST['Numbers'];
  $sql = "select orders.Orderkey, Cargoname, Category, Begin, End, Pay, Reqtime, driver.Name, driver.Number, Carnumber, TransportType, CarType, orders.Status
  from receiveorders, orders, driver 
  where orders.Number='$Numbers' 
  and receiveorders.Orderkey=orders.Orderkey 
  and receiveorders.Number=driver.Number";
  $result = mysqli_query($db,$sql);
  if (!$result) {
      printf("Error: %s\n", mysqli_error($db));
      exit();
  }
  $array= array();
    class Message{
	public $Orderkey;
    public $Cargoname;
	public $Category;
    public $Beginplace;
    public $Endplace;
    public $Pay;
	public $Reqtime;
	public $Drivername;
	public $Drivernumber;
	public $Carid;
	public $TransportType;
	public $CarType;
	public $Status;
  }
  while($row = mysqli_fetch_array($result)){
    $m=new Message();
	$m->Orderkey = $row['Orderkey'];
    $m->Cargoname = $row['Cargoname'];
    $m->Category = $row['Category'];
	$m->Beginplace = $row['Begin'];
    $m->Endplace = $row['End'];   
	$m->Pay = $row['Pay'];
    $m->Reqtime = $row['Reqtime'];
    $m->Drivername = $row['Name'];
    $m->Drivernumber = $row['Number'];
    $m->Carid = $row['Carnumber'];
	$m->TransportType= $row['TransportType'];
	$m->CarType= $row['CarType'];
	$m->Status= $row['Status'];
    $array[]=$m;
  }
  $data=json_encode($array);
  echo $data;
?>