<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--바로 아래 링크 부분은 스타일시트로  내가 만들어놓은  css파일임.  -->
  <link rel="stylesheet" type="text/css" href="mystyle.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!--아래 링크는  구글 api중 배달의 민족의 한나체를 받아옴.  -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/hanna.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  /*아래부분은 몸통부분과  h테그를 사용하는 부분에서 글로 써지는 부분을 한나체로 통일한다.*/
  body,h1,h2,h3,h4,h5,h6 {font-family: 'Hanna', serif }
  #jb-footer {
        background-color: #777;
        padding: 10px;


        text-align: center;
        color: white;
        border: 1px solid #1d0606;
    }
    #jb-middle {
          background-color: #fffbfb;
          margin-top: -20px;
          color: black;
          min-height:900px;
          height: 100%;
          border: 1px solid #1d0606;
      }

      #moviuploadcontainer{

     margin-top: 13px;
     margin-left: 270px;
     width:1500px;
     height:1500px;
     margin-bottom: 10px;
/* border: 1px solid #1d0606; */
      }
      #moviuploadtitle{
        margin-left: 5px;
        margin-top:50px;
        width:100%;
/* border: 1px solid #1d0606; */

       }
      #movieuploadformcontainer{

        width:1350px;
        height:1300px;
        border: 1px solid #1d0606;
        background-color: rgba(149, 147, 140, 0.26);
       }
      #movieuploadform{
        margin-left: 70px;
        margin-top: 50px;
        width:1300px;
        height:1250px;
/* border: 1px solid #1d0606; */
      }
  </style>
  <title>메인화면</title>
</head>

<body>

<!-- 로그인 사이드 바 부분에 대한  넵태그이다.  이안에  로그인및  회원 정보에 관한 내용이 들어갈 예정-->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:350px; border: 3px solid #160505;" id="mySidebar">

<!-- 로그인 사이드바 부분의 대한  동작을 나타내는  (닫히고 열림) 자바 스크립트 부분이다. -->
  <script language="javascript">
   //아래 변수는  아이디의 중복여부를 알아내어  나중에 submint할때 해당 함수에서 사용하기 위한 변수이다.
  var idck = 0;

  //아래 변수는 이메일의 중복여부를 알아내어 나중에 submit할때  해당 함수에서 사용하기 위한 변수이다.
  var emailck = 0;


  //아래 w3_open and  w3_close는  로그인 을 하기위한 사이드 네이게시션바이다.
  //로그인 하기를 누르면  네이게이션 바가 나오고 사라지기를  설정해놓았다.
  //그리고 로그인하전에  로그인창을 닫으면  작성한 내용이 모두 지워지도록 설정하였다.  reset()사용.
  function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
  }
  function w3_close() {
      document.getElementById('mySidebar').style.display = 'none';
      document.getElementById('loginform_tag').reset();
  }

//아래  열고 닥기 두가지  함수는  회원가입창에 대한  코드이다.
  function makeidform_open() {
    document.getElementById('id01').style.display='block';
  }

//회원가입창을 취소를 눌러 닫을 경우에는  회원가입창에 있던 내용을 모두 지워지도록 진행하였다.
  function makeidform_close() {
    document.getElementById('id01').style.display='none';
    document.getElementById('makeidform_tag').reset();
    document.getElementById('userid_label').innerHTML='<b>아이디</b>';
    document.getElementById('userid_label').style.color='black';
    document.getElementById('useremail_label').innerHTML='<b>이메일</b>';
    document.getElementById('useremail_label').style.color='black';
    document.getElementById('userpassword_label').innerHTML='<b>비밀번호</b>';
    document.getElementById('userpassword_label').style.color='black';
    document.getElementById('userpassword_repeat_label').innerHTML='<b>비밀번호 확인</b>';
    document.getElementById('userpassword_repeat_label').style.color='black';
  }

  function uploadimage_open() {
    document.getElementById('imageup').style.display='block';
  }

  function uploadimage_close() {
    document.getElementById('imageup').style.display='none';
    document.getElementById('imageupload12').value="";
    $("#holder").empty();
  }


  function imguploadajax() {
   if(document.getElementById('imageupload12').value==""){

   alert("프로필없음.")
    return false;
  }
  }

  // 아래 함수부터는 회원가입창의  유효성 검사를 위한  코드이다.
  //입력된 정보가  사이트에서 원하는 정보에 벗어날 경우 빨간줄을  클라이언트에게 보여준다.//////////////////////////////////////////////////////////////////////
  function checkmakeidform() {

      var password_label=document.getElementById('userpassword_label');
      var password= document.getElementById('userpassword').value;
      var checkpassword= document.getElementById('userpassword_repeat').value;

    //비밀번호에  먼가  쓰였을때
    if(password!=""){
      //비밀번호에 먼가 쓰이고  형식이 맞을떄
    if(/^[a-zA-Z0-9]{4,12}$/.test(password)){

      document.getElementById('userpassword_label').innerHTML='<b>알맞는 비밀번호 형식입니다!</b>';
      document.getElementById('userpassword_label').style.color='green';

    //비밀번호 형식이 맞을경우에는  패스워드  패스워드 체크 부분에서  의  체크 하는 코드가 실행된다.
    if(checkpassword!=""){
      if(password!=checkpassword){
         if(checkpassword!=""){
         document.getElementById('userpassword_repeat_label').innerHTML='<b>비밀번호가 불일치합니다!</b>';
         document.getElementById('userpassword_repeat_label').style.color='red';
       }
       }else if(password==checkpassword){
         document.getElementById('userpassword_repeat_label').innerHTML='<b>비밀번호가 일치합니다!</b>';
         document.getElementById('userpassword_repeat_label').style.color='green';
       }


     }else if(checkpassword==""){

       document.getElementById('userpassword_repeat_label').innerHTML='<b>비밀번호가 불일치합니다!</b>';
       document.getElementById('userpassword_repeat_label').style.color='red';

    }

    }
    //비밀번호 형식이 안맞을때
    else if(!(/^[a-zA-Z0-9]{4,12}$/.test(password))) {
      document.getElementById('userpassword_label').innerHTML='<b>비밀번호 형식을 맞추세요!</b>';
      document.getElementById('userpassword_label').style.color='red';

    }

}//여기까지 패스워드가  무언가  쓰여있는 경우의 끝
//비밀번호 패스워드가  아무것도 써잊지 않는 경우
else if(password==""){

  if(password!=checkpassword){
     if(checkpassword!=""){
     document.getElementById('userpassword_label').innerHTML='<b>비밀번호 형식을 맞추세요!</b>';
     document.getElementById('userpassword_label').style.color='red';
     document.getElementById('userpassword_repeat_label').innerHTML='<b>비밀번호가 불일치합니다!</b>';
     document.getElementById('userpassword_repeat_label').style.color='red';
   }
   }
}//패스워드  가 아무것도 써잊지 않는 경우  끝

//이메일 관련 유효식이다.
var email= document.getElementById('useremail').value;
var re2 = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
if(email!=""){
  //이메일 형식이  안 맞을때
if(!(re2.test(email))){
  document.getElementById('useremail_label').innerHTML='<b>이메일 형식을 맞추세요!</b>';
  document.getElementById('useremail_label').style.color='red';

}
//이메일 형식이 맞을때
else if(re2.test(email)){
  $.ajax({
      type: 'POST',
      url: 'checkemail.php',
      data:{'emailddd':document.getElementById('useremail').value},
      success: function(data){
 // 결과 텍스트를 받아서  해당 라벨을 바꿔준다.
     if(data == "sucess"){
       document.getElementById('useremail_label').innerHTML='<b>사용가능한 이메일입니다.</b>';
       document.getElementById('useremail_label').style.color='green';
       emailck=1;
     }else {
       document.getElementById('useremail_label').innerHTML='<b>중복된 이메일입니다.</b>';
       document.getElementById('useremail_label').style.color='red';
       emailck=0;
       }
      }
      });

}//이메일 형식이 맞을때 끝;
}else if(email==""){
   if(userid!=""){
  document.getElementById('useremail_label').innerHTML='<b>이메일</b>';
  document.getElementById('useremail_label').style.color='black';
}
}
//이메일 관련 유효식  끝


//아이디 관련 유효식 시작
var userid=document.getElementById('userid').value;
var re1=/^[a-zA-Z0-9]{4,12}$/;

if(userid!=""){
  //아이디 형식이 안 맞을때
if(!(re1.test(userid))){
  document.getElementById('userid_label').innerHTML='<b>아이디 형식을 맞추세요!</b>';
  document.getElementById('userid_label').style.color='red';

}
//아이디 형식이  맞을때
else if(re1.test(userid)){


 $.ajax({
     type: 'POST',
     url: 'checkid.php',
     data:{'iddd':document.getElementById('userid').value},
     success: function(data){
// 결과 텍스트받아서  해당 레벨을 바꿔준다.
    if(data=="sucess"){
      document.getElementById('userid_label').innerHTML='<b>사용가능한 아이디입니다.</b>';
      document.getElementById('userid_label').style.color='green';
      idck=1;
    }else{
      document.getElementById('userid_label').innerHTML='<b>중복된 아이디입니다.</b>';
      document.getElementById('userid_label').style.color='red';
      idck=0;
      }
     }
     });

}//아이디 형식이 맞을때  끝;

}else if(userid==""){
  document.getElementById('userid_label').innerHTML='<b>아이디 형식을 맞추세요!</b>';
  document.getElementById('userid_label').style.color='red';

}




}
//여기까지  비빈번호 정규식으로  유효성 검사하는 함수///////////////////////////////////////////////////////////////////////////////



function finalconfrim_of_register_id() {

 var re1 = /^[a-zA-Z0-9]{4,12}$/;
 var re2 = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
 var userid=document.getElementById('userid');
 var useremail=document.getElementById('useremail');
 var userpassword=document.getElementById('userpassword');
 var userpassword_repeat=document.getElementById('userpassword_repeat');
 var userid_label=document.getElementById('userid_label');

 //아래의 경우  아이디의 형식이  맞지 않은 경우에   회원가입 버튼을 누르면  진행되는 코드이다.
 if(!(re1.test(makeidform_tag.userid.value))){
   alert('회원가입 정보를 정확히 입력해주세요!');
   return false;
  }

 //아래의 경우  아이디의 중복확인 절차 중  중복된 아이디로  나왔는데 회원가입 버튼을 누르게 되면 진행되는 코드이다.
 if(idck==0){
  alert('회원가입 정보를 정확히 입력해주세요!');
  return false;
  }

 //아래의 경우  비빌번호의  형식이 맞지 않은 경우에  회원가입 버튼을 누르면 진행되는 코드이다.
 if(!(re1.test(makeidform_tag.userpassword.value))){
   alert('회원가입 정보를 정확히 입력해주세요!');
   return false;
   }

 //아래의 경우 비밀번호와  비밀번호 확인 칸의  값이 서로 다를 경우에 회원가입 버튼을 누르면 진행되는 코드이다.
 if(makeidform_tag.userpassword.value!= makeidform_tag.userpassword_repeat.value){
  alert('회원가입 정보를 정확히 입력해주세요!');
  return false;
  }

  //아래의 경우 이메일의 정규식이 맞지 않은 경우에  회원 가입 버튼을 누르면 진행되는 코드이다.
  if(!(re2.test(makeidform_tag.useremail.value))){
    alert('회원가입 정보를 정확히 입력해주세요!');
    return false;
   }

  //아래의 경우 이메일의 중복확인이  중복되어있다고 할경우 회언가입 버튼을 누르면 진행되는 코드이다.
  if(emailck==0){
    alert('회원가입 정보를 정확히 입력해주세요!');
    return false;
  }

}//회원가입 버튼을 눌렀을경우 진행되는 함수 끝


//로그인 창에서 로그인 버튼을 누르면 일어나는 코드이다./////////////////////////////////////////////////////////////////////////////////////////////
function logincheckdd22() {
var id_for_login = document.getElementById('inputuserid').value;
var password_for_login = document.getElementById('inputpassword').value;
var c1 = document.loginform_tag.c1.checked;
if(c1){
  //체크가 되었을때 1
  c1 = 1;
}else{
  //로그인 유지 체크가 되어있지 않을때 0

  c1 = 0;
}


if(password_for_login != "" &&  id_for_login != "")  {
var loginck = 0;
    var form_data ={
      'id': document.getElementById('inputuserid').value,
      'passwd':document.getElementById('inputpassword').value,
      'c1': c1
    };
$.ajax({

         type: 'POST',
         url: 'logincheck2.php',
         data: form_data,
         dataType: 'html',
         //원래  ajax같은 경우에는 비동기 기능이어서 아래 sucess함수가
         //진행이되면서  그다음 코드도 진행되므로 loginck가 결국 끝날떄까지 ajax코드가 완료될때까지
         //바뀌지 않느다. 그래서  ajax코드에  async:false를 넣어서 비동기형식을 동기형식으로 바꾸었따.
         async:false,
 success: function(data){
    // 결과 텍스트를 경고창으로 보여준다.
     alert(data);
   if(data == document.getElementById('inputuserid').value+" 님  환영합니다.!!"){

         //로그인 할때 해당 아이디 가 맞으면 다음과 같이 진행한다.
          loginck = 1;
   }else{
        //로그인 할때 해당 아이디가 맞지 않으면 다음과 같이 진행한다.
         loginck = 0;

   }
  }//sucess 함수
});//ajax 끝
//loginck가 0이므로 정보가 맞지 않아서  로그인으로 넘어가지 않는다.
if(loginck == 0){
  return false;
}
}//이프문 끝
}



  </script>
<!-- 아래는 로그인 메뉴 를 닫기위한 코드이다. -->
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button" style=" font-size:25px;width:346px;    border: 3px solid #160505;" >창 닫음</a>

<!-- 아래부분은  로그인시  회원의 프로필 사진이 들어가는 공간이다. -->

<!--여기까지  프로필 사진 관련 코드 끝  -->
<?php
//세션로그인이 시작되고  로그인이 되지않았을경우에는 아래와 같은 코드가 진행된다.
//로그인이 되고 안되고는 로그인 세션에  아이디가 담겨있는지 여부로  판단을 한다.
session_start();
 if(!isset($_SESSION[id])){

 ?>
<!--아래 부분은   로그인 을 휘한  아이디와  비밀번호를 치는 칸이다.  -->
<div class="loginform">
      <h1 style="font-size: 35px; margin-left: 120px;margin-bottom:-40px;">로그인</h1>
  <form class="loginform_tag" id="loginform_tag" name="loginform_tag" onsubmit="return logincheckdd22();" method="post">
<!-- 아래 부분은  맨처음 사이드바가 나오면 로그인 또는  회원가입을 할수있는 버튼들의  모임 태그이다.  -->
<br>
     <label  style="font-size: 18px; margin-left: 20px; " for="inputuserid"><b>아이디</b></label>
     <br>
     <input id="inputuserid" type="text" placeholder=" 가입하신 아이디를 입력하세요" name="inputuserid" value="<?php echo $_POST["idid"] ?>" required>
     <br>
     <label  style="font-size: 18px; margin-left: 20px;" for="inputpassword"><b>비밀번호</b></label>
     <br>
     <input id="inputpassword" type="password" placeholder=" 비밀번호 입력하세요!" name="inputpassword" required>
     <br>
     <input style="margin-top:15px; margin-left: 20px; width:20px; height:20px;" type=checkbox id="c1" name="c1" value="1"><label  for="c1" style="font-size:15px;"><b> 로그인 유지</b></label>
     <br><a href="SendIdToEmail.php"   style="cursor:pointer; margin-left: 20px;color:red;font-size:18px;">아이디 </a>/<a  href="SendIdToEmail.php?page=2" style="color:red; cursor:pointer; font-size:18px;"> 비밀번호 </a><span style="font-size:15px;">를 잊으셨나요?</span>
<!--로그인 또는 회원가입 버튼  -->
     <div class="btnforloginandregister" style="margin-top:10px;">
     <button onclick="" type="submit" style="width:30%; font-size: 20px;">로그인</button>
     <button onclick="makeidform_open()" type="button" style="width:30%; font-size: 20px;">회원가입</button>

  </div>

  </form>

</div>
<!--여기까지  로그인  회원정보 쓰는 부분임.  -->

<!--아래는  회원가입을 위한 코드이다.  -->
<div  id="id01" class="modal">


      <div class="containerforregister"  style="margin-top:-10px;" >
        <br>
        <h1 style="font-size: 35px; margin-left: 270px;margin-bottom:-40px;">회원가입</h1>
        <div class="makeidform">

          <!--form태그의 내용을 insert_idinfo_into_db.php 파일로  보낸다.  -->
          <form id="makeidform_tag" oninput="checkmakeidform()"  onsubmit="return finalconfrim_of_register_id();" action="insert_idinfo_into_db.php" method="post">
          <br>
              <label id="userid_label"  style="font-size: 18px;" for="userid"><b>아이디</b></label>
              <br>
              <input id="userid" type="text" placeholder=" 아이디는 4~12자의 영문 대소문자와 숫자로만 입력하세요!" title="아이디는 4~12자의 영문 대소문자와 숫자로만 입력" name="userid" required>
              <br>
              <label id="useremail_label" style="font-size: 18px;" for="useremail"><b>이메일</b></label>
              <br>
              <input id="useremail" type="email" placeholder=" 실제 사용하는 메일을 입력하세요!" title="이메일 형식을 입력" name="useremail" required>
               <br>
              <label id="userpassword_label" style="font-size: 18px;" for="userpassword" ><b>비밀번호</b></label>
              <br>
              <input id="userpassword" type="password" placeholder=" 비밀번호는 4-12자의 영문 대소문자와 숫자로만 입력하세요!"   title="패스워드는 4~12자의 영문 대소문자와 숫자로만 입력" name="userpassword" required>
              <br>
              <label id="userpassword_repeat_label" style="font-size: 18px;" for="userpassword_repeat"><b>비밀번호 확인</b></label>
              <br>
              <input id="userpassword_repeat" type="password" placeholder=" 다시한번 비밀번호를 입하세요!" title="위 비밀번호 한번더 입력" name="userpassword_repeat" required>

      <div class="makeidcontainerbtn">
        <button type="submit" id="makeidsubmitbtn" name="makeidsubmitbtn" onclick="" class="makeidsubmitbtn">회원가입</button>
        <button type="button" id="cancelbtn" name="cancelbtn" onclick="makeidform_close()" class="cancelbtn">취소</button>
      </div>
    </form>
  </div>
  </div>

</div>


<!--여기까지  회원가입 버튼 클릭시  일어나는일  -->
<?php }
//여기 아래부터는  로그인세션에  아이디값이 들어가 있을경우이다./////////////////////////////////////////////////////////////////////
else{

  $useridd = $_SESSION[id];
  //위에는 세션 아이디
  $mysql_host ='localhost';
  $mysql_user ='root';
  $mysql_password = 'sssddd456852';
  $mysql_db = 'testdb';
  //위에는 디비 연결을 위한 내 디비 정보


  $id = $_POST[id];
  $passwd = $_POST[passwd];
  $c1 = $_POST[c1];
  $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
  $sql = "select*from test3 where id='".$_SESSION[id]."'";

  // $sql = "select count(*) from test3 where id='$id'";
  $Result = mysqli_query($conn,$sql);
  $rows = mysqli_fetch_array($Result);

  ?>
<!--로그인을 한후 로그인에대한 프로필이미지가 들어가는 div태그임.   -->
 <div class="profileimagemain" style="margin-left:75px; margin-bottom:-20px; margin-top:30px; height:180px; width:180px;">
  <?php if($rows['imagepath']== NULL) {?>
  <img src="webimage/noprofileman.jpg"  style=" width:100%; height:100%;" >
  <?php }else{ ?>
  <img src="<?php echo $rows['imagepath'] ?>" alt="no_profile" style=" width:100%; height:100%;" >
  <?php } ?>
  <div class="camera"><img src="webimage/camera.png" onclick="uploadimage_open()"
  alt="no_profile" style="margin-left:15px; margin-top: 10px; width:80%; height:132px; cursor: pointer" >
  <span style="font-size:20px; align-self: baseline;margin-left:30px;">프로필 사진 편집</span>
  </div>
<span style="font-size:20px;">회원 프로필 사진입니다.</span>
</div>
<!--프로필 이미지 들어가는 div태그 끝  -->

<!--여기 아래 부분은 회원가입을 한후 사이드 메뉴에 나오는 회원 정보들의 관한 내용이다.  -->
<br><br>
<div style="margin-left:5px;">
  <span style="font-size:20px;  margin-left:20px;">회원 아이디: <?php echo $_SESSION[id]; ?> </span><br>
   <a style="font-size:20px; margin-left:20px; color:blue;" href="fixmyinfo.php">내 정보 수정 </a> <br>
  <span style="font-size:20px; margin-left:20px;">현재 보유한 코인: </span><a style="font-size:20px; color:blue; " href="changemyinfo.php"> <?php  echo $rows['coin']; ?> point </a>
  </br>
   <button type="button" style="margin-left:20px; margin-top:10px; width:120px;" id="logout" name="logout" onclick="location.href='logoutid.php'">로그아웃</button>
  <!--로그인후 회원정보 끝 -->
</div>


<div  id="imageup" class="modal">


      <div class="containerforregister"  style="margin-top:-10px;" >
        <form action="uploadimage_query.php" onsubmit="return imguploadajax();" method="POST" enctype="multipart/form-data">
          <div class="preview_profile_img" style="margin-left:130px; ">
            <br>
            <p style="color:red; font-size:35px; margin-top:-5px; margin-bottom:25px;"id="status" ><b>프로필 이미지를 업로드 하세요!</b></p>
            <input type="file" style="margin-bottom:-15px;"name="imageupload12" id="imageupload12"><br>
            <span >이미지 미리 보기</span>
            <div style="width:180px; height:180px; margin-bottom: 10px;border: 1px solid #1d0606;"id="holder"></div>
          </div>
          <input type="hidden" id="configure_page" name="configure_page" value="0">
          <div class="makeidcontainerbtn" style="margin-top:35px;margin-left:200px;">
            <button type="submit" id="upload_img_button" name="upload_img_button" onclick="" class="makeidsubmitbtn">프로필사진 업로드</button>
            <button type="button" id="no_profile_img" name="no_profile_img" onclick="location.href='uploadprofile_basic.php?configure_page=0'" style="margin-right:7px;" class="cancelbtn">프로필 없음</button>
            <button type="button" id="cancelbtn" name="cancelbtn" onclick="uploadimage_close()" class="cancelbtn">취소</button>
          </div>
        </form>

  </div>

  <script>
      var upload = document.getElementsByTagName('input')[0],
          holder = document.getElementById('holder'),
          state = document.getElementById('status');

      upload.onchange = function (e) {
        e.preventDefault();

        var file = upload.files[0],
          reader = new FileReader();
          reader.onload = function (event) {
          var img = new Image();
          img.src = event.target.result;
          //note: no onload required since we've got the dataurl...I think! :)
          img.width= 180;
          img.height= 180;
          holder.innerHTML = '';
          holder.appendChild(img);
          };
          reader.readAsDataURL(file);

          return false;
          };
  </script>
  </div>

</div>



<?php }

mysqli_close($conn); ?>
<!--로그인이 되었을 경우  사이드 네비게션바의 경우 코드  끝  -->

</nav>
<!-- 로그인 사이드 바 부분에 대한  넵태그이다.  이안에  로그인및  회원 정보에 관한 내용이 들어갈 예정의 끝-->



<nav class="navbar navbar-inverse" style="color: white; height:30px; background:white;">
  <ul class="nav navbar-nav" style="color:black; height:30px; background:white;">
    <!--로그인 창의 대한 버튼역활을 하는  div태그임  -->
    <li class="w3-button " style="height:48px;font-size: 20px;  margin-right:100px;"onclick="w3_open()">

      <!--아래 부분은 회원정보또는 로그인 관련 사이드바가 나오게 하는 div태그에서  로그인할경우와 아닌경우  를 나우어서
      보이는 글씨가 달라지도록하였따.  -->
      <?php
      if(!isset($_SESSION[id])){
      ?>
       로그인 하기
      <?php } else{?>
        <?php if($rows['imagepath']== NULL) {?>
        <img src="webimage/noprofileman.jpg"  style=" width:35px; height:35px;" >
        <?php }else{ ?>
        <img src="<?php echo $rows['imagepath'] ?>" alt="no_profile" style=" width:35px; height:35px;" >
        <?php } ?>   <?php echo $_SESSION[id] ?>님  정보 보기
      <?php } ?>
    </li>
    <!--로그인 창의 대한 버튼역활을 하는  div태그임  끝-->
    <li class="w3-button " onclick="location.href='mainpage.php'"style="margin-left: 200px;height:48px;font-size: 20px">
    메인화면
    </li>
    <li class="w3-button "onclick="location.href='onairmovie.php'"  style="margin-left: 100px;height:48px;font-size: 20px">
      현재 상영작 예매하기
    </li>
    <li class="w3-button " onclick="location.href='watchmovie.php'" style="margin-left: 100px;height:48px;font-size: 20px">
      개봉한 영화  다시보기
    </li>
    <li class="w3-button "onclick="location.href='movieblog.php'"  style="margin-left: 100px; height:48px;font-size: 20px">
      영화 후기 블로그
    </li>
    <li class="w3-button " onclick="location.href='usersuggestboard.php'" style="margin-left: 100px; height:48px;font-size: 20px">
      Q & A 게시판
    </li>
  </ul>


</nav>
<div id="jb-middle">
<!--메인화면의 중앙 부분입니다.  -->
<?php
$useridd = $_SESSION[id];
//위에는 세션 아이디
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
//위에는 디비 연결을 위한 내 디비 정보


$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);

$movienumberforfix=$_GET[movienumber];
$sqlfix = "select*from movie where movienumber='$movienumberforfix'";

// $sql = "select count(*) from test3 where id='$id'";
$Resultfix = mysqli_query($conn,$sqlfix);
$rowsfix = mysqli_fetch_array($Resultfix);
$genre=$rowsfix[genre];
 ?>

<div id="moviuploadcontainer">
<!--영화  업로드하는   컨테이너이다. 일단  주변 테두리를  해놓음. -->
<div id="moviuploadtitle">
  <font style="font-size:60px;">영화 업로드 수정</font></br>
  <font style="font-size:30px;">업로드된 내용을 수정하세요!</font>
</div>

<div id="movieuploadformcontainer">

  <div id="movieuploadform">
  <!--영화 업로드 폼들이 들어가는 div태그이다.  -->
<script type="text/javascript">
function movieupposterloadbutton() {
       document.getElementById('movieposterimg').click();

       }

   //영화 포스터 올리고 미리보기 윈한 자바 스크립트 이다.
     $(function() {
         $("#movieposterimg").on('change', function(){
             readURL(this);
         });
     });

     function readURL(input) {
         if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function (e) {
                 $('#psterimagepreview').attr('src', e.target.result);
             }

         //수정 부분에서는 알럴트를 사용해야됨.  alert("프로필수정 버튼을 눌러야  포스터이미지가 정상적으로 변경됩니다.");
           reader.readAsDataURL(input.files[0]);
         }
     }



     function uploadmoviewithajax() {
       var gggg=0;
      var title=document.getElementById('movietitleinput');//영화 제목 인풋태그
      var movieposterimg=document.getElementById('movieposterimg');//영화 이미지 파일 인풋태그
      var movievideofile=document.getElementById('videoupload');//영화 비디오파일 인풋태그
      var moviesummary=document.getElementById('moviesummary');//영화 요약 인풋태그
      var moviegenre=document.getElementById('moviegenre');
      if(title.value==""){
        alert("영화 제목을 써주세요!");
        return false;
        }else if(moviegenre.value == -1){

        alert("영화의 장르를 선택하세요!");
        return false;
        }else if(moviesummary.value==""){
        alert("간단한 영화 소개를 써주세요!");
        return false;
        }else{
        var form = $('#uploademovieform')[0];//폼데이터의 값들을 모두보냄
        var formData = new FormData(form);

        $(document).ajaxStart(function() {
          // show loader on start
          if(movievideofile.value !=""){
          $("#uploadpregressbar").css("display","block");
        }
        }).ajaxSuccess(function() {
          // hide loader on success
          $("#uploadpregressbar").css("display","none");
        });

         $.ajax({


               type: 'POST',
               url: 'fixmovie.php',
               data: formData,
               processData: false,
               contentType: false,


               xhr: function () {
                                 var xhr = new window.XMLHttpRequest();
                                 xhr.upload.addEventListener("progress", function (evt) {
                                     if (evt.lengthComputable) {

                                         var percentComplete = evt.loaded / evt.total;
                                         percentComplete = parseInt(percentComplete * 100);
                                         $('.myprogress').text(percentComplete + '%');
                                         $('.myprogress').css('width', percentComplete + '%');
                                       }

                                 }, false);
                                 return xhr;
                             }
                           ,
          success:function(data){
          // 결과 텍스트를 경고창으로 보여준다.
           alert(data);
           if(data=="수정에 성공하였습니다"){
            location.href="watchmovie.php";

            }else{

              location.reload();
           }
         }//sucess 함수

      });//ajax 끝
     }//else 끝
    }//함수끝

</script>
<!-- 영화가 파일이 업로드될때 나오는  업로드바 -->
<div class="modal" id="uploadpregressbar" style="display:none;">
  <div id="show_pregressbar" class="progress"style="width:100%; height:200px; margin-top: 180px;color:white; background-color:black">
    <font style="font-size:50px;">현재 영화 영상 파일을 수정 중입니다.! 잠시만 기다려주세요!</font><br>
    <div class="progress-bar progress-bar-success myprogress" id="progressbar" role="progressbar" style="color:black; font-size:20px; width:0%; height:100px;">0%</div>
  </div>
</div>
<form id="uploademovieform" name="uploademovieform"  method="post" enctype="multipart/form-data">
  <input type="hidden" id="movienumbertosendfix" name="movienumbertosendfix" value="<?php echo $_GET[movienumber]; ?>">
    <label for="movietitleinput" style="font-size:30px;">1.&nbsp; 영화 제목: &nbsp;</label>
    <input type="text" id="movietitleinput" name="movietitleinput"  style="width:500px; border: 2px solid #1d0606; font-size:22px;" placeholder=" 영화 제목을 입력하세요!" value="<?php echo $rowsfix[movietitle] ?>">
    <br>
    <br>
    <br>
    <font style="font-size:30px;"><b>2.&nbsp; 영화 장르 선택: &nbsp;</b></font>
<script>
$(document).ready(function(){

  $("select option[value='<?php echo $genre ?>']").attr("selected", true);
});

</script>

    <select style="font-size:20px; margin-top: -10px; width:150px; height:33px;"name="moviegenre"id="moviegenre">
        <option value="-1">&nbsp;-/-</option>
        <option value="0">&nbsp;코미디</option>
        <option value="1">&nbsp;액션</option>
        <option value="2">&nbsp;SF</option>
        <option value="3">&nbsp;공포</option>
        <option value="4">&nbsp;애니</option>
        <option value="5">&nbsp;드라마</option>
        <option value="6">&nbsp;판타지</option>
        <option value="7">&nbsp;멜로</option>
    </select>
    <input type="file" name="movieposterimg" id="movieposterimg" style="visibility:hidden" value="">
    <br>
    <font style="font-size:30px;"><b>3.&nbsp; 영화 포스터 업로드</b></font>
    <div style="width:180px; height:250px; margin-left: 40px; margin-top: 10px; margin-bottom: 5px;border: 2px solid #1d0606;"id="posterimageholder">
     <img src="<?php echo $rowsfix[posterpath] ?>" id="psterimagepreview" style="width:176px; height:246px;" alt="">
    </div>
    <button type="button" style="width:180px; margin-left: 40px; font-size:20px;"name="uploadmovieposterbutton" id="uploadmovieposterbutton" onclick="movieupposterloadbutton();" >영화 포스터 업로드</button>
    <br>
    <br>
    <label for="videoupload" style="font-size:25px; margin-top:30px;">4.&nbsp; 영화 영상파일 업로드 &nbsp;&nbsp;*(mp4, ogg, webM)*</label>
    <br>
     <font style="margin-top: 10px;font-size:21px;margin-left:40px; "><b>현재  등록되어 있는 비디오 파일: </b><font style="font-size:17px;margin-left:10px;"> <?php
     $partomoviepath = explode("movievideofile/",$rowsfix[videopath]);

     $partmoviepath=$partomoviepath[1];

      echo  $partmoviepath ?></font></font><br>
      <font style="margin-top: 10px;font-size:30px;margin-left:40px; color:red; "><b>영화파일 수정시 아래에 새로운 영화파일을 넣어주세요! </b></font>

      <input type="file" name="videoupload" id="videoupload" style="font-size:20px; margin-left:40px; "  value="">
    <br>
    <label for="moviesummary"style="font-size:25px; margin-top:30px;">5.&nbsp; 영화 간단 소개</label>
    <br>
    <textarea name="moviesummary" id="moviesummary" maxlength="500" placeholder=" 영화 소개글은 최대 500자 까지입니다." style="margin-left: 50px;border: 2px solid #1d0606;font-size: 20px;height:300px;  resize:none; width:1100px;"><?php echo $rowsfix[summary] ?></textarea>
    <br>
    <div  style="margin-left:-60px; margin-top:30px;">
      <button type="button"  onclick="return uploadmoviewithajax();"style="width:120px; margin-left: 550px;font-size:18px;">영화 업로드</button>&nbsp;&nbsp;
      <button type="button"  onclick="history.back(-1)"style="width:120px; font-size:18px;">취소</button>
    </div>
  </form>

  <!-- 영화 업로드 폼들이 들어가는 div태그 끝 -->
  </div>

</div>

<!-- 아래는 영화 업로드 컨테이너의  div태그 마지막 -->
</div>
</div>
<!--메인  화면의 중앙 부분   div태그 끝.  -->



<div id ="jb-footer" style="">
  <p>   오픈 API | 이용약관 | 개인정보취급방침 | 청소년보호정책 | 권리침해신고 | 고객센터 | E-mail수집거부정책
        <br/> Copyright ©  Corp. All rights reserved.</p>
</div>

</body>
</html>
