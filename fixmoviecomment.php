<?php
session_start();
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
//위에는 디비 연결을 위한 내 디비 정보

//보안키 랜덤 문자열 생성을 위한 코드

$content=$_POST[content];//수정내용
$commentidnumber=$_POST[commentidnumber];//코멘트를 쓴 작성자
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);

$sqlupdate1="UPDATE moviecomment SET commentxt ='$content' where id ='$commentidnumber'";
$result=mysqli_query($conn,$sqlupdate1);
// $sql = "select count(*) from test3 where id='$id'";


if($result){
echo "댓글 수정 성공!";
mysqli_close($conn);


}else {


echo "댓글수정 실패";
mysqli_close($conn);
exit();
}



 ?>
