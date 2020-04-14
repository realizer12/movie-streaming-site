<?php
session_start();
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);

$title=$_POST['titleofboard1'];//수정된 제목
$content=$_POST['summernotecontent1'];//수정된  내용
$number=$_POST['boardnumber'];//다시 돌아갈때 사용할  게시글 넘버
$pagenum=$_POST['pagenumber'];//다시 돌아갈때 사용할 페이지넘버

echo $number;

$update="UPDATE board SET title ='$title', content='$content' where idnum ='$number'";

$result1=mysqli_query($conn,$update);


if($result1){
  //성공했을경우 알럴트와 함께  해당 게시글의 읽는 페이지로 넘어간다.
  echo '<script>alert("게시글을 성공적 수정 하였습니다.!");</script>';
  echo "<meta http-equiv='refresh' content='0;url=readboardcontent.php?number=$number&pagenum=$pagenum'>";
}else{
  //실패  했을경우 알럴트와 함께  해당게시글의 읽는 페이지로 넘어간다.
  echo '<script>alert("게시글을 수정에 실패 하였습니다.!");</script>';
  echo "<meta http-equiv='refresh' content='0;url=readboardcontent.php?number=$number&pagenum=$pagenum'>";
}

mysqli_close($conn);


?>
