<?php
  session_start();
  $mysql_host ='localhost';
  $mysql_user ='root';
  $mysql_password = 'sssddd456852';
  $mysql_db = 'testdb';
  $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
  $movietitle=$_POST["movietitleinput"];//영화제목;
  $moviesummary=$_POST["moviesummary"];//영화 소개내용;
  $moviegenre=$_POST["moviegenre"];
  //$_FILES["movieposterimg"]["name"]   영화 포스터
  //$_FILES["videoupload"]["name"]영화 비디오

  $uploadOK=1;//1이면 성공
  $imgtarget_dir = "movieposter/";//이미지 저장경로
  $videotarget_dir="movievideofile/";//비디오 저장경로

  $imgtarget_file=$imgtarget_dir.basename($_FILES["movieposterimg"]["name"]);//포스터 이미지 파일
  $videotarget_file=$videotarget_dir.basename($_FILES["videoupload"]["name"]);// 영화 비디오 파일



$imageFileType =pathinfo($imgtarget_file,PATHINFO_EXTENSION);//이미지 경로정보 파일타입
 $videoFileType =pathinfo($videotarget_file,PATHINFO_EXTENSION);//비디오 경로정보 파일타입

 $imgfilename=$_FILES["movieposterimg"]["name"];//이미지 파일이름
 $videofilename=$_FILES["videoupload"]["name"];//비디오 파일이름

 //만약에  같은 파일일의  이미지가 있을 경우에는  아래와 같이
 //현재 시간을 파일이름에 추가한다.
 while(file_exists($imgtarget_file)){
   $i++;
 $imgtarget_file=$imgtarget_dir.time().basename($_FILES["movieposterimg"]["name"]);//포스터 이미지 중복이름이면  시간 플러스

 }
 while(file_exists($videotarget_file)){
 $i++;
   $videotarget_file=$videotarget_dir.time().basename($_FILES["videoupload"]["name"]);//비디오 이미지중복이름이면 시간 플러스
 }

 if($_FILES['movieposterimg']['size'] > 500000){//5메가 바이트 이상
 echo "이미지 파일이 너무 큽니다!!</br>";
 $uploadOK =0;

 }



 if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" )
 {
 echo " jpg & jpeg & png파일만  업로드 가능합니다.";
   $uploadOK =0;

 }else{
 if($videoFileType != "mp4" && $videoFileType != "ogg" && $videoFileType != "webm" )
 {
 echo " mp4 & ogg & webm 파일만  업로드 가능합니다.";
   $uploadOK =0;

 }

}

 if($uploadOK==0){

   echo "업로드 실패 하였습니다.";
    exit();
 }else{

   if (move_uploaded_file($_FILES["movieposterimg"]["tmp_name"], $imgtarget_file)) {
     if(move_uploaded_file($_FILES["videoupload"]["tmp_name"], $videotarget_file)){
   mysqli_query($conn,"INSERT INTO movie (movietitle,summary,posterpath,videopath,uploaddate,genre) VALUES('$movietitle','$moviesummary','$imgtarget_file','$videotarget_file',UNIX_TIMESTAMP(),'$moviegenre')");

   mysqli_close($conn);
    echo "업로드 성공하였습니다";
  }else{

    echo "업로드 실패하였습니다.";
     exit();
  }
  }else{

    echo "업로드 실패하였습니다.";
     exit();
  }
 }

?>
