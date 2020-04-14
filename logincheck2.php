<?php
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
//위에는 디비 연결을 위한 내 디비 정보


$id = $_POST[id];
$passwd = $_POST[passwd];
$c1 = $_POST[c1];
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
$sql = "select*from test3 where id='$id'";

// $sql = "select count(*) from test3 where id='$id'";
$Result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($Result);

//넘어온 아이디와 패스워드가  해당 디비에  존재하는 경우
if($id == $rows['id'] && $passwd == $rows['password']){

echo "$id 님  환영합니다.!!";
//디비에 값이 존재하는 경우 넘어온  로그인 유지 여부에따라 세션이 그냥 시작하거나
//세션의 아이디가 저장된 쿠키의 값의  기간을 늘려주어  해당 기간동안 브라우저가 꺼저도 로그인 유지 효과를 낼수 있게 만들었따.
if($c1==0){
session_start();
$_SESSION[id] = $id;

}else if($c1 == 1){

$duration=24*60*60*30;//30일
ini_set('session.gc_maxlifetime',$duration);
session_set_cookie_params($duration);
session_start();

$_SESSION[id] = $id;
}

}
//해당디비에  넘어온 값이 존재하지 않는 경우이다.
else if(!($id == $rows['id'])){
echo "존재 하지 않는 아이디입니다.!";
}else if($id == $rows['id'] && $passwd != $rows['password']){
  echo "비밀번호가 맞지 않습니다.";
}





mysqli_close($conn);

 ?>
