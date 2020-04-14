<?php

$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
$password_new=$_POST[userpassword_for_forgot];
$dddgdd= $_POST[iddidd];

$sql = "select*from test3 where id='$dddgdd'";


$Result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($Result);
//아래 부분은  이미지가 수정되었을경우에  기존에  수정되기전  이미지를 지우기 위한  코드이다.

mysqli_query($conn,"UPDATE test3 SET password = '$password_new' where id='$dddgdd'");



mysqli_close($conn);

echo "<meta http-equiv='refresh' content='0;url=mainpage.php'>";

?>
