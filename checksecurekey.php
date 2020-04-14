<?php
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
//위에는 디비 연결을 위한 내 디비 정보

//보안키 랜덤 문자열 생성을 위한 코드

$findidemail=$_POST[findidemail234];
$useriddd=$_POST[useridforcheck];
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
$sql = "select*from test3 where id='$useriddd'";

// $sql = "select count(*) from test3 where id='$id'";
$Result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($Result);


if(!($rows['securekey'] == $findidemail)){
echo "본인확인키가 틀립니다.";
mysqli_close($conn);
return false;

}else if($rows['securekey'] == $findidemail){
mysqli_query($conn,"UPDATE test3 SET securekey = NULL where id='$useriddd'");


echo "본인확인키 인증 성공!!";
mysqli_close($conn);
}



 ?>
