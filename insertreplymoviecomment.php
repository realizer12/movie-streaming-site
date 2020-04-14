<?php
session_start();
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);


$content=$_POST[content];
$parent_thread=$_POST[parent_grp];//부모글의  댓글 고유 번호
//$parent_depth=$_POST['parent_depth'];

$dddgdsss= $_SESSION[id];
$sql7 = "select*from moviecomment where grp='$parent_thread'";

// $sql = "select count(*) from test3 where id='$id'";
$Result7 = mysqli_query($conn,$sql7);
$rows7 = mysqli_fetch_array($Result7);
$articlenumber=$rows7[movienumber];//부모글의 기사번호를  가져온다.  이렇게되면 아티클넘버는 계속해서 돌림으로 받음으로  엇갈릴 일이 없음.
$depth=$rows7[lvl]+1;//댓글 깊이
$replyparent=$rows7[writer];//부모댓글의 작성자
$prev_parent_thread = floor($_POST[parent_grp]/1000)*1000+1000;//2000나1
$max_thread_result = mysqli_query($conn,"SELECT max(grp) FROM moviecomment where grp < '$prev_parent_thread'");
$max_thread_fetch= mysqli_fetch_row($max_thread_result);
$max_thread=($max_thread_fetch[0]*1)+1;//결국  1000일경우 2000보다 작은  가장 큰수들의 +1해준다.

$seq=1;

$sqlupdate1="UPDATE moviecomment SET seq ='$seq' where grp ='$parent_thread'";//부모글의  seq가 1로 바뀌면  나중에 삭제해도 삭된 글이라고 뜸.
mysqli_query($conn,$sqlupdate1);
if($depth<2){
//그냥 부모글의 댓글의 경우에는  누구의 글의 대한  댓글인지 관련해서 알려줄 필요가 없다.
$result=mysqli_query($conn,"INSERT INTO moviecomment (commentxt,grp,seq,lvl,writer,movienumber,wdate) VALUES('$content','$max_thread',0,'$depth','$dddgdsss','$articlenumber',UNIX_TIMESTAMP())");
}else if($depth >= 2){
$result=mysqli_query($conn,"INSERT INTO moviecomment (commentxt,grp,seq,lvl,writer,movienumber,wdate,replyparent) VALUES('$content','$max_thread',0,'$depth','$dddgdsss','$articlenumber',UNIX_TIMESTAMP(),'$replyparent')");
//대댓글 부터는 누구의 댓글의 댓글인지  넣는 replycomment란을 추가시킨다.
}


if($result){
  echo "답글 추가 성공!";
  mysqli_close($conn);
}else{
  echo "답글 추가 실패!";
  mysqli_close($conn);
  exit();
}

?>
