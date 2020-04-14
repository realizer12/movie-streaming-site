<?php
session_start();
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
//위에는 디비 연결을 위한 내 디비 정보




$content=$_POST[content];
$articlenumber=$_POST[articlenum];
$commentwriter=$_POST[commentwriter];
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);


$max_thread_result = mysqli_query($conn,"SELECT max(grp) FROM comment");
$max_thread_fetch= mysqli_fetch_row($max_thread_result);
$max_thread=floor($max_thread_fetch[0]/1000)*1000+1000;

//보안키 랜덤 문자열 생성을 위한 코드


// $sql = "select count(*) from test3 where id='$id'";

$result=mysqli_query($conn,"INSERT INTO comment (commentwt,grp,seq,lvl,wirter,articlenum,ddate) VALUES('$content','$max_thread',0,0,'$commentwriter','$articlenumber',UNIX_TIMESTAMP())");

if($result){
echo "댓글 등록 성공!";
//echo(json_encode(array("mode" => $_REQUEST['mode'], "name" => $name, "email" => $email)));

mysqli_close($conn);


}else {


echo "댓글등록 실패";
mysqli_close($conn);
}



 ?>
