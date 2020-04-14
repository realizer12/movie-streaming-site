<?php

session_start();


$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
//위에는 디비 연결을 위한 내 디비 정보


$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
$ddddd = $_POST[movienumberfordelete];//영화 번호

//아래부분은 연결된 파일들 unlink를 하기위한 찾기  부분
$sql22 = "select*from movie where movienumber='$ddddd'";
$Result22 = mysqli_query($conn,$sql22);
$rows22 = mysqli_fetch_array($Result22);

unlink($rows22['videopath']);
unlink($rows22['posterpath']);
$sql1 = "DELETE FROM movie WHERE movienumber ='$ddddd'";
$Result1 = mysqli_query($conn,$sql1);

if($Result1){
  //성공했을경우 알럴트와 함께  해당 게시글의 읽는 페이지로 넘어간다.
  echo '<script>alert("영화를 성공적으로 삭제 하였습니다.!");</script>';
  echo "<meta http-equiv='refresh' content='0;url=watchmovie.php'>";
}else{
  //실패  했을경우 알럴트와 함께  해당게시글의 읽는 페이지로 넘어간다.
  echo '<script>alert("게시글을 삭제에 실패 하였습니다.!");</script>';
  echo "<meta http-equiv='refresh' content='0;url=movieintroduce.php?movienumber=$ddddd'>";
}

mysqli_close($conn);

 ?>
