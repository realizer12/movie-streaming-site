<?php
session_start();
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
//위에는 디비 연결을 위한 내 디비 정보


$userid=$_POST[id];
$movienumber=$_POST[movienumberforsocre];
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);



$sql = "select*from starscore where userid='$userid' and movienum='$movienumber'";

// $sql = "select count(*) from test3 where id='$id'";
$Result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($Result);
$score=$rows[score];//등록되어있던 해당 별점의  점수

//DELETE FROM comment WHERE id ='$commentidnumber'";
$result=mysqli_query($conn,"DELETE FROM starscore WHERE userid='$userid' and movienum='$movienumber'");



$result2=mysqli_query($conn,"UPDATE movie SET startimes = startimes-1, totalscore = totalscore-$score  where movienumber ='$movienumber'");
if($result){
  if($result2){
echo "별점 취소 성공!";
mysqli_close($conn);
}else{
  echo "별점 디비삭제 실패";
  mysqli_close($conn);
}

}else {


echo "별점 취소 실패";
mysqli_close($conn);
}



 ?>
