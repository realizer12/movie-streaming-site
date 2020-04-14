<?php
session_start();
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
$configure_page=$_GET[configure_page];
$dddgdd= $_SESSION[id];

$sql = "select*from test3 where id='".$_SESSION[id]."'";


$Result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($Result);
//아래 부분은  이미지가 수정되었을경우에  기존에  수정되기전  이미지를 지우기 위한  코드이다.
unlink($rows['imagepath']);
mysqli_query($conn,"UPDATE test3 SET imagepath = DEFAULT where id='$dddgdd'");



mysqli_close($conn);
if($configure_page==0){
echo "<meta http-equiv='refresh' content='0;url=mainpage.php'>";
}else if($configure_page==1){
echo "<meta http-equiv='refresh' content='0;url=fixmyinfo.php'>";
}else if($configure_page==2){
echo "<meta http-equiv='refresh' content='0;url=usersuggestboard.php'>";
}else if($configure_page==3){
echo "<meta http-equiv='refresh' content='0;url=WriteNoticeBoardContent.php'>";
}
?>
