<?php
session_start();
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
//위에는 디비 연결을 위한 내 디비 정보
$dddgdd= $_SESSION[id];
$passwd = $_POST[passwdd];

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
$sql = "select*from test3 where id='".$_SESSION[id]."'";

// $sql = "select count(*) from test3 where id='$id'";
$Result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($Result);

if($passwd != $rows['password']){
  echo "비밀번호가 맞지 않습니다.";
}else{
  echo "sucess";
}





mysqli_close($conn);

 ?>
