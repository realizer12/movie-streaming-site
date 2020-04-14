
<?php
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
//위에는 디비 연결을 위한 내 디비 정보
$findidemail=$_POST[findidemail12];

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
$sql = "select*from test3 where email='$findidemail'";

// $sql = "select count(*) from test3 where id='$id'";
$Result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($Result);


if(!($rows['email'] == $findidemail)){
echo "해당 메일은  등록되지 않은 메일입니다";
return false;
}else if($rows['email'] == $findidemail){

echo "메일을 보냈습니다.";

}
$to = $findidemail; //상대 메일주소
$subject = 'movie_site 요청하신 회원님의 아이디 입니다.'; //제목
$message = $rows['id']; //본문
$headers = 'From: movie@example.com' . "\r\n" .
'Reply-To: movie@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion(); //헤더설정

$result= mail($to, $subject, $message, $headers); //메일송신


mysqli_close($conn);
 ?>
