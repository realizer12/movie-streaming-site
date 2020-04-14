  <?php
    session_start();
    $mysql_host ='localhost';
    $mysql_user ='root';
    $mysql_password = 'sssddd456852';
    $mysql_db = 'testdb';
    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
    $configure_page=$_POST[configure_page];
    $dddgdd= $_SESSION[id];

    $sql = "select*from test3 where id='".$_SESSION[id]."'";

    // $sql = "select count(*) from test3 where id='$id'";
    $Result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_array($Result);



    $target_dir = "upload_profile/";
    $tartget_file=$target_dir.basename($_FILES["imageupload12"]["name"]);
    $uploadOK=1;
    $imageFileType =pathinfo($tartget_file,PATHINFO_EXTENSION);
    $filename=$_FILES["imageupload12"]["name"];

    if(isset($_POST[upload_img_button])){
      $check = getimagesize($_FILES["imageupload12"]["tmp_name"]);

      if($check !== false){
         //echo "File is an image -" . $check["mime"].".";
        $uploadOK =1;

      }else{
       echo "이미지 파일이 아닙니다.!</br>";
       $uploadOK =0;

      }
}
//만약에  같은 파일일의  이미지가 있을 경우에는  아래와 같이
//현재 시간을 파일이름에 추가한다.
while(file_exists($tartget_file)){
  $i++;
$tartget_file=$target_dir.time().basename($_FILES["imageupload12"]["name"]);

}



if($_FILES["imageupload12"]["size"]>500000){
echo "파일이 너무 큽니다!!</br>";
$uploadOK =0;
}else{

}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" )
{
echo " jpg & jpeg & png파일만  업로드 가능합니다.</br>";
  $uploadOK =0;
}else{

}
if($uploadOK==0){

  echo "</br>업로드 실패 하였습니다.";
}else{

if(move_uploaded_file($_FILES["imageupload12"]["tmp_name"], $tartget_file)){

  //수정전에  이미지는  디렉토리에서 사라진다.
  unlink($rows['imagepath']);
  mysqli_query($conn,"UPDATE test3 SET imagepath = '$tartget_file' where id='$dddgdd'");

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
}else {
    echo "없로드 실패하였습니다.";

    }

}
  ?>
