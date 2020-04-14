<?php

session_start();

$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
//위에는 디비 연결을 위한 내 디비 정보
$passwordfordelete=$_POST[userpassword2];
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
$ddddd = $_SESSION[id];

$sql = "select*from test3 where id='".$_SESSION[id]."'";
$Result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($Result);

if( $passwordfordelete == $rows['password']){
  unlink($rows['imagepath']);
  $sql1 = "DELETE FROM test3 WHERE id='$ddddd'";
  $Result1 = mysqli_query($conn,$sql1);
  $changed_id="탈퇴회원";
  $idinnumboard=$_SESSION[id];
  //작성자 값만  바꿔주워  구별할수 있도록 하였다.
  //탈퇴회원이 쓴  글은 작성자가없므로  관리자만 볼수 있다.
   mysqli_query($conn,"UPDATE board SET id = '$changed_id' where id='$idinnumboard'");
  //쿠키에  연결되어있는 변수들을 모두 지워줌.
session_unset();

//세션을 이용하면  쿠키에 아이디값이 저장되어있는데
//로그아웃할떄 이것을 안지워주면 세션 쿠키  유효기간을  30일로 늘린  로그인 상태 유지 경우에는
// 로그아웃을 해도 쿠키가 남아있어 로그인상태 유지 하지 않음으로 로그인을 해도 이전 쿠키가 적용되
//웹브라우저가 다 꺼져도 계속 로그인 상태가 유지됨 그러므로 아래와 같이 쿠키를 지워줌.
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

session_destroy();

mysqli_close($conn);
echo "<meta http-equiv='refresh' content='0;url=mainpage.php'>";
}else if( !($passwordfordelete == $rows['password'])){
echo $passwordfordelete;
mysqli_close($conn);
}

 ?>
