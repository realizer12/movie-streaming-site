<?php
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
$id = $_POST[iddd];
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
$sql = "select*from test3 where id='$id'";
// $sql = "select count(*) from test3 where id='$id'";
$Result = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($Result);

if($rows == 0){

echo "sucess";

}

else{

  echo "fail";

 }

mysqli_close($conn);

 ?>
