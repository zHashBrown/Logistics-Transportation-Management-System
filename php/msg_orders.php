<?php
  //造一个mysqli对象，造连接对象
  header("Access-Control-Allow-Origin: *");
  $db=new MySQLi("localhost","root","","carriage");
  //括号里面填的是IP地址域名，用户名，密码，数据库的名字
  //准备一条SQL语句
  $result = mysqli_query($db,"select * from orders order by Publishtime DESC");
  if (!$result) {
      printf("Error: %s\n", mysqli_error($db));
      exit();
  }
  $array= array();
  class Message{
		public $Orderkey;
    public $Cargoname;
	  public $Category;
		public $Weight;
    public $Beginplace;
    public $Endplace;
    public $Pay;
	  public $Status;
	  public $Reqtime;
		public $Publisher;
		public $Numbers;
		public $Publishtime;
		public $Audit;
  }
  while($row = mysqli_fetch_array($result)){
    $m=new Message();
		$m->Orderkey = $row['Orderkey'];
    $m->Cargoname = $row['Cargoname'];
    $m->Category = $row['Category'];
		$m->Weight = $row['Weight'];
	  $m->Beginplace = $row['Begin'];
    $m->Endplace = $row['End'];   
	  $m->Pay = $row['Pay'];
	  $m->Status = $row['Status'];
    $m->Reqtime = $row['Reqtime'];
    $m->Publisher = $row['Publisher'];
    $m->Numbers = $row['Number'];
    $m->Publishtime = $row['Publishtime'];
		$m->Audit= $row['Audit'];
    $array[]=$m;
  }
  $data=json_encode($array);
  echo $data;
?>