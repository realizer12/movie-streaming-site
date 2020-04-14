<?php
session_start();
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);

$title=$_POST['titleofboard'];
$content=$_POST['summernotecontent'];
$dddgdss= $_SESSION[id];



$max_thread_result = mysqli_query($conn,"SELECT max(thread) FROM board");

$max_thread_fetch= mysqli_fetch_row($max_thread_result);

$max_thread=ceil($max_thread_fetch[0]/1000)*1000+1000;

$result=mysqli_query($conn,"INSERT INTO board (id,title,content,wdate,view,thread,depth) VALUES('$dddgdss','$title','$content',UNIX_TIMESTAMP(),0,$max_thread,0)");




if($result){
  //성공했을경우
  echo '<script>alert("게시글을 성공적으로 업로드 하였습니다.!");</script>';
  echo "<meta http-equiv='refresh' content='0;url=usersuggestboard.php'>";
}else{
  //실패  했을경우
  echo '<script>alert("게시글을 업로드에 실패 하였습니다.!");</script>';
  echo "<meta http-equiv='refresh' content='0;url=usersuggestboard.php'>";
}

mysqli_close($conn);


?>
