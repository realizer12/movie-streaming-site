<?php
session_start();
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
//위에는 디비 연결을 위한 내 디비 정보

$score=$_POST[score];
$userid=$_POST[id];
$movienumber=$_POST[movienumberforsocre];
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);

$result=mysqli_query($conn,"INSERT INTO starscore (movienum,userid,score) VALUES('$movienumber','$userid','$score')");
$result2=mysqli_query($conn,"UPDATE movie SET startimes = startimes+1, totalscore = totalscore+$score  where movienumber ='$movienumber'");
if($result){
  if($result2){
echo "별점 등록 성공!";
mysqli_close($conn);
}else{
  echo "별점 디비등록 실패";
  mysqli_close($conn);
}

}else {


echo "별점 등록 실패";
mysqli_close($conn);
}



 ?>
