<?php

session_start();


$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
//위에는 디비 연결을 위한 내 디비 정보




$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
$ddddd = $_POST[deletednumber];

$total_count="SELECT id FROM blogcomment WHERE articlenum = $ddddd ";//현재 페이지의  댓글의 개수 가 몇개인지알아보기위한 쿼리 문이다.
$result_count=mysqli_query($conn,$total_count);//질문을 보냄
$count = mysqli_num_rows($result_count);//해당 답들의  개수를 보기위한 식
$titlement="삭제된 게시글입니다.";
$idment="작성자미상";

$sql1 = "DELETE FROM movieblog WHERE idnum ='$ddddd'";
$Result1 = mysqli_query($conn,$sql1);

if($Result1){
  //성공했을경우 알럴트와 함께  해당 게시글의 읽는 페이지로 넘어간다.
  echo '<script>alert("게시글을 성공적으로 삭제 하였습니다.!");</script>';
  echo "<meta http-equiv='refresh' content='0;url=movieblog.php'>";
}else{
  //실패  했을경우 알럴트와 함께  해당게시글의 읽는 페이지로 넘어간다.
  echo '<script>alert("게시글을 삭제에 실패 하였습니다.!");</script>';
  echo "<meta http-equiv='refresh' content='0;url=movieblog.php'>";
}

mysqli_close($conn);

 ?>
