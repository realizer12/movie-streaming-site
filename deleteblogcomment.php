<?php
session_start();
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
//위에는 디비 연결을 위한 내 디비 정보

//보안키 랜덤 문자열 생성을 위한 코드


$commentidnumber=$_POST[commentidnumber1];
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);

$sqlupdate1="DELETE FROM blogcomment WHERE id ='$commentidnumber'";
$result=mysqli_query($conn,$sqlupdate1);
// $sql = "select count(*) from test3 where id='$id'";


if($result){
echo "댓글 삭제 성공!";
mysqli_close($conn);


}else {


echo "댓글삭제 실패";
mysqli_close($conn);
exit();
}



 ?>
