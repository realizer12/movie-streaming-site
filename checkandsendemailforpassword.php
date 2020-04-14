<?php
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
//위에는 디비 연결을 위한 내 디비 정보
$findidemail=$_POST[findidemail123];

//보안키 랜덤 문자열 생성을 위한 코드
function genRandom($length = 5) {
        $char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $char .= 'abcdefghijklmnopqrstuvwxyz';
        $char .= '0123456789';
        $result = '';
        for($i = 0; $i <= $length; $i++) {
            $result .= $char[mt_rand(0, strlen($char))];
        }
        return($result);
    }

$securekey=genRandom();
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
$sql = "select*from test3 where id='$findidemail'";

// $sql = "select count(*) from test3 where id='$id'";
$Result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($Result);
//보안을 위해  이메일을  사용자에게 보여줄때 explode함수를 사용해서 이메일의 @부분을 기준으로 나눴다.
$partofemail = explode("@",$rows['email']);
//이메일의 경우 골벵이를 기준으로 0 그리고 
$partemail=$partofemail[0];

if(!($rows['id'] == $findidemail)){
echo "해당 아이디는 등록되어 있지 않습니다.";
mysqli_close($conn);
return false;
}else if($rows['id'] == $findidemail){
mysqli_query($conn,"UPDATE test3 SET securekey = '$securekey' where id='$findidemail'");

//어느 이메일인지  가려놔서  보안적으로  좀더 신경을 썼다.
echo "가입당시 등록한\n$partemail@xxxxx.com 로\n메일을 보냈습니다.";


$to = $rows['email']; //상대 메일주소
$subject = 'movie_site 비밀번호 찾기용 보안코드 입니다.'; //제목
$message = $securekey; //본문
$headers = 'From: movie@example.com' . "\r\n" .
'Reply-To: movie@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion(); //헤더설정

$result= mail($to, $subject, $message, $headers); //메일송신



mysqli_close($conn);
}
 ?>
