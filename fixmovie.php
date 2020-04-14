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
  $movienumber=$_POST["movienumbertosendfix"];//수정하는 영화의 번호




  //기존의 묶여있던 포스터및  비디오들이  수정되면 사라지게 하기위해 영화  구분  용
  $sql = "select*from movie where movienumber='$movienumber'";

  // $sql = "select count(*) from test3 where id='$id'";
  $Result = mysqli_query($conn,$sql);
  $rows = mysqli_fetch_array($Result);





  //$_FILES["movieposterimg"]["name"]   영화 포스터
  //$_FILES["videoupload"]["name"]영화 비디오
if($_FILES["movieposterimg"]["name"] != ""){//포스터 수정이 있는 경우
  if($_FILES["videoupload"]["name"] !=""){//비디오 수정이 있는경우 포스터 수정도 함께
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

    unlink($rows['posterpath']);// 기존의 포스터를  저장경로에서 없앰.
    unlink($rows['videopath']);//기존의 비디오를 저장경로에서 없ㅇ앰.
   mysqli_query($conn,"UPDATE movie SET movietitle ='$movietitle',summary ='$moviesummary',posterpath ='$imgtarget_file',videopath = '$videotarget_file',genre = '$moviegenre' where movienumber='$movienumber'");
   mysqli_close($conn);
    echo "수정에 성공하였습니다";
  }else{

    echo "업로드 실패하였습니다.";
     exit();
  }
  }else{

    echo "업로드 실패하였습니다.";
     exit();
  }
 }
}//비디오수정이있는  경우 포스터수정과 함께 끝
else if($_FILES["videoupload"]["name"] ==""){//비디오수정은 없고 포스터 수정만 있는 경우

  $uploadOK=1;//1이면 성공
  $imgtarget_dir = "movieposter/";//이미지 저장경로


  $imgtarget_file=$imgtarget_dir.basename($_FILES["movieposterimg"]["name"]);//포스터 이미지 파일




$imageFileType =pathinfo($imgtarget_file,PATHINFO_EXTENSION);//이미지 경로정보 파일타입


 $imgfilename=$_FILES["movieposterimg"]["name"];//이미지 파일이름


 //만약에  같은 파일일의  이미지가 있을 경우에는  아래와 같이
 //현재 시간을 파일이름에 추가한다.
 while(file_exists($imgtarget_file)){
   $i++;
 $imgtarget_file=$imgtarget_dir.time().basename($_FILES["movieposterimg"]["name"]);//포스터 이미지 중복이름이면  시간 플러스

 }

 if($_FILES['movieposterimg']['size'] > 500000){//5메가 바이트 이상
 echo "이미지 파일이 너무 큽니다!!</br>";
 $uploadOK =0;

 }



 if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" )
 {
 echo " jpg & jpeg & png파일만  업로드 가능합니다.";
   $uploadOK =0;

 }

 if($uploadOK==0){

   echo "업로드 실패 하였습니다.";
    exit();
 }else{

   if (move_uploaded_file($_FILES["movieposterimg"]["tmp_name"], $imgtarget_file)) {

    unlink($rows['posterpath']);// 기존의 포스터를  저장경로에서 없앰.
    mysqli_query($conn,"UPDATE movie SET movietitle ='$movietitle',summary ='$moviesummary',posterpath ='$imgtarget_file',genre = '$moviegenre' where movienumber='$movienumber'");
    mysqli_close($conn);
    echo "수정에 성공하였습니다";

  }else{

    echo "업로드 실패하였습니다.";
     exit();
  }
 }

}//비디오수정은 없고 포스터 수정만 있는 경우 끝
}//포스터수정이 있는 경우 끝
else if($_FILES["movieposterimg"]["name"] == ""){//포스터 수정이 없는경우
if($_FILES["videoupload"]["name"] !=""){//포스터수정은 없고 비디오 수정은 있는 경우

  $uploadOK=1;//1이면 성공

  $videotarget_dir="movievideofile/";//비디오 저장경로


  $videotarget_file=$videotarget_dir.basename($_FILES["videoupload"]["name"]);// 영화 비디오 파일




  $videoFileType =pathinfo($videotarget_file,PATHINFO_EXTENSION);//비디오 경로정보 파일타입


  $videofilename=$_FILES["videoupload"]["name"];//비디오 파일이름


  while(file_exists($videotarget_file)){
  $i++;
   $videotarget_file=$videotarget_dir.time().basename($_FILES["videoupload"]["name"]);//비디오 이미지중복이름이면 시간 플러스
  }






  if($videoFileType != "mp4" && $videoFileType != "ogg" && $videoFileType != "webm" )
  {
  echo " mp4 & ogg & webm 파일만  업로드 가능합니다.";
   $uploadOK =0;

  }



  if($uploadOK==0){

   echo "업로드 실패 하였습니다.";
    exit();
  }else{


     if(move_uploaded_file($_FILES["videoupload"]["tmp_name"], $videotarget_file)){


    unlink($rows['videopath']);//기존의 비디오를 저장경로에서 없ㅇ앰.
   mysqli_query($conn,"UPDATE movie SET movietitle ='$movietitle',summary ='$moviesummary',videopath = '$videotarget_file',genre = '$moviegenre' where movienumber='$movienumber'");
   mysqli_close($conn);
    echo "수정에 성공하였습니다";
  }else{

    echo "업로드 실패하였습니다.";
     exit();
  }

  }






}//포스터수정은 없고 비디오 수정은 있는 경우 끝
else if($_FILES["videoupload"]["name"] ==""){//포스터수정은 없고 비디오 수정도 없는 경우이다.

  mysqli_query($conn,"UPDATE movie SET movietitle ='$movietitle',summary ='$moviesummary',genre = '$moviegenre' where movienumber='$movienumber'");
  mysqli_close($conn);
  echo "수정에 성공하였습니다";

}

}//포스터수정이 없는 경우 끝
?>
