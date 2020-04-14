<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 <!-- 메인 페이지에서 회원가입으로 넘어온 정보들이   아래  php구문으로 작동이 진행된다. -->
  <?php
  $mysql_host ='localhost';
  $mysql_user ='root';
  $mysql_password = 'sssddd456852';
  $mysql_db = 'testdb';

  $id=addslashes($_POST["userid"]);
  $password=addslashes($_POST["userpassword"]);
  $email=addslashes($_POST["useremail"]);
   //echo "Mysql 연결됨?? <br>";
   $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);

  if(mysqli_connect_error()){
    echo "Failed to connect to MysQl" .mysqli_connect_error();
    }

   mysqli_query($conn,"INSERT INTO test3 (id,email,password) VALUES('$id','$email','$password')");

   mysqli_close($conn);
    ?>
<!--위의  아이디 생성란이 끝나면 아래 와 같이  form태그로 다시 방금 저장한 아이디값을 전송하여 로그인부분에서 바로 로그인 하도록 만든다. 아래와 같이 쓰면
 post방식으로 값을 보낼수 있어 보안상  아이디값이 노출되지 않는다. -->
 <form  action="mainpage.php" name="form" method="post">
   <input type="hidden" name="idid" id="idid" value="<?php echo $id ?>">
<script type="text/javascript">
  document.form.submit();
</script>
 </form>

  </body>
</html>
