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
    #moviecommentcontainer{
     width: 1550px;
     min-height: 180px;
     height: 100%;
   border: 2px solid #1d0606;
   margin-top: 10px;
   margin-left: 200px;
   margin-bottom: 20px;
    }
    #totalmoviecomment{
     width:1450px;
     min-height:100px;
     height: 100%;
     margin-left: 50px;
     z-index: 1;
      border-bottom:  1px solid #969393;
    }
    #showmoviecommentcount{
      font-size: 20px;

      height: 35px;
      border-bottom: 1px solid #a49e9e;
    }
    #moviecomment{
     width:1480px;
     height:100px;
     margin-left: 30px;
     margin-top: 20px;
    margin-bottom: 20px;
    border: 2px solid #1d0606;
    }
    #jb-middle {
          background-color: #fffbfb;
          margin-top: -20px;
          color: black;
          min-height:900px;
          height: 100%;
          border: 1px solid #1d0606;
      }

      #movilistcontainer{

     margin-top: 13px;
     margin-left: 200px;
     width:1500px;
     min-height:1300px;
     height: 100%;
     margin-bottom: 10px;
     /* border: 1px solid #1d0606; */
      }
      #moviecontent{
        margin-top: 20px;
        width:1550px;
        margin-left: 200px;
        min-height:720px;'

        height: 100%;
        border: 2px solid #1d0606;
      }
      #movietypelist{
       border: 1px solid #1d0606;
       margin-left: 90px;
       font-size: 20px;
       width:1313px;
       height:50px;
      }
      #movilisttitle{
        margin-left: 91px;
        margin-top:30px;
        width:900px;
        /* border: 1px solid #1d0606; */

      }

    .grid-container {
      display: grid;
      grid-template: 400px 400px 400px  / 250px 250px 250px 250px 250px ;
      grid-gap: 10px;
      margin-top: 10px;
      margin-left: 90px;
      width:1313px;
      border: 1px solid #1d0606;

      padding: 10px;
    }
    .grid-container>div {
      background-color: rgba(168, 159, 159, 0.8);
      text-align: center;
      border: 1px solid #1d0606;
      font-size: 30px;
    }

    .replycomment{

      width:900px;
      height:100px;
      margin-left: 41px;
      margin-top: 20px;
      margin-bottom: 30px;
      border: 2px solid #1d0606;
    }
    .fixcommet{
    border-top:2px solid #000000;
    border-left:2px solid #000000;
    border-bottom:2px solid #000000;
    resize:none;
    margin-left:-2px;
    width:900px;
    height:100px;
    font-size:20px;
     margin-top:-2px;:

    }
    .fixcomcontainer{
        display: none;
            width:1000px;
            height:100px;
            margin-left: 10px;
            margin-top: 20px;
            margin-bottom: 0px;
            border: 2px solid #1d0606;

    }
    .fixbutton{
     width:99px;
    height:96px;
    font-size: 15px;
    color:white;
    margin-left: -1px;
    margin-top: 0px;
    float: right;
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
   <?php if($rows[coin]==0){ ?>
  <span style="font-size:20px; margin-left:20px;">영화 이용권: </span><a style="font-size:20px; color:blue; " href="buyuseticket.php"> 이용권이  없습니다!</a>
  <?php }else{ ?>
  <span style="font-size:20px; margin-left:20px;">영화 이용권: </span><font style="font-size:20px; color:blue; " > <?php echo date("Y-m-d",$rows[usedate]); ?>일 까지 이용가능 </font>
  <?php } ?>
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



<?php } ?>
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
        echo '<script>alert("영화 정보보기는\\n로그인후 이용가능합니다.!");</script>';
        //로그인이 안되어 게시판 페이리ㅗ 들어가지 못하는 경우  접속을 시작한 부분으로 다시 돌아간다.
        echo "<script>history.back();</script>";
        exit();
          // 좋다고 생각함
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



<?php


$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
$movienumber=$_GET[movienumber];
$sqlmovie = "select*from movie where movienumber='$movienumber'";
$Resultmovie = mysqli_query($conn,$sqlmovie);
$rowsmovie = mysqli_fetch_array($Resultmovie);
?>
<div id="jb-middle">
  <br>
<font style="font-size:60px; margin-left:200px;">영화 상세정보</font>
<script type="text/javascript">
  function moviedelete() {
    var deletenotice;
    deletenotice = confirm("정말 본 영화를 지우시겠습니까??");
    if(deletenotice){

    }else{


      return false;
    }
  }
</script>
<!--메인화면의 중앙 부분입니다.  -->
<form  style="margin-top:-45px;" action="movieinfo_delete.php" method="post">
  <input type="hidden" name="movienumberfordelete" id="movienumberfordelete" value="<?php echo $rowsmovie[movienumber]; ?>">
<?php if($_SESSION[id]=="admin"){ ?>
<button type="button" onclick="location.href='fixmovieuploaded.php?movienumber=<?php echo $_GET[movienumber] ?>'" style="width:100px; margin-left: 1424px;margin-right:10px; font-size:20px;"name="button">영화수정</button>
<button type="submit" onclick="return moviedelete();"name="button"style="width:100px; font-size:20px;">영화삭제</button>
<button type="button" onclick="location.href='watchmovie.php'"name="button"style="width:100px;margin-left: 7px;font-size:20px;">영화목록</button>
<?php }else{
  //여기서는  관리자가 아닌  이용자들과 로그인이 안되었을경우에 보이는 버튼이다. 목록버튼만 보임.?>
<button type="button" onclick="location.href='watchmovie.php'"name="button"style=" width:100px;margin-left: 1650px;font-size:20px;">영화목록</button>
<?php } ?>
</form>

<div id="moviecontent" style="background-color:rgba(217, 213, 210, 1); margin-top:3px;">
<div id="movieposter" style="width:300px;  margin-top:50px; margin-left:30px; height:400px;border: 2px solid #1d0606;">

<img src="<?php echo $rowsmovie[posterpath]; ?>" style="width:100%; height:100%" alt="이미지x">
<p style="margin-left: 350px;font-size:30px; margin-top:-400px; width:900px;">영화제목: &nbsp;<font style="font-size:27px;"><?php echo $rowsmovie[movietitle]; ?></font></p>
<font style="font-size:30px; margin-left:350px; width:900px; margin-top:40px; float:left">영화 장르: &nbsp;<font style="font-size:27px;">
<?php if($rowsmovie[genre]==0){ ?>
  코미디
<?php }else if($rowsmovie[genre]==1){ ?>
  액션
<?php }else if($rowsmovie[genre]==2){ ?>
  SF
<?php }else if($rowsmovie[genre]==3){ ?>
  공포
<?php }else if($rowsmovie[genre]==4){ ?>
  애니
<?php }else if($rowsmovie[genre]==5){ ?>
  드라마
<?php }else if($rowsmovie[genre]==6){ ?>
  판타지
<?php }else if($rowsmovie[genre]==7){ ?>
  멜로
<?php } ?>
</font></font></br>

<font style="font-size:30px; margin-left:350px; width:950px; margin-top:40px; float:left">
  사이트내 영화 별점 점수:
<font style="font-size:27px;">
<!-- //위와 같이  별점의  총합의 따라서  보여지는 별의  개수가 달라지도록 설정하였다. -->
<?php if($rowsmovie[startimes] > 0){ //0보다 크면 아래와 같이 점수가 보이도록한다.

  $checkint=strlen(round($rowsmovie[totalscore]/$rowsmovie[startimes],1));//strlen함수는 자릿수를 구하는 함수인데 이걸 사용한 이유는 평범하게 하면  소수가 존재하는 수들은 0.0 이런식으로 나오는데  정수만 인  수들은 정수로 나와서
  //통일성이 떨어진다고 생각했기 때문이다.
if($checkint==1){
?>
&nbsp; <?php echo round($rowsmovie[totalscore]/$rowsmovie[startimes],1);  //라운드를 이용하여서 반올림 형태로 점수가 등록되도록 하였다. 라운드 함수뒤에 1은 쑤 첫째자리전을  반올림한다는 뜻임.?>.0/5.0점
<font style="margin-left:20px; font-size:20px;">( <b style="color:red;"><?php echo $rowsmovie[startimes]; ?></b>명 참여 )</font>
<?php }else{ ?>
&nbsp; <?php echo round($rowsmovie[totalscore]/$rowsmovie[startimes],1);  //라운드를 이용하여서 반올림 형태로 점수가 등록되도록 하였다. 라운드 함수뒤에 1은 쑤 첫째자리전을  반올림한다는 뜻임.?>/5.0점
<font style="margin-left:20px; font-size:20px;">( <b style="color:red;"><?php echo $rowsmovie[startimes]; ?></b>명 참여 )</font>
<?php } ?>
<?php }else{ //0보다 작은 경우 즉  아무 평가가 없는 경우 nan으로 위처럼하면 나와서 아래와 같이 점수를 집적 써주었다 ?>
&nbsp; <font style="color:red; font-size:20px;">최초의 별점 참여자가 되보세요!&nbsp;&nbsp;&nbsp;&nbsp;별점은 영화를 볼때 참여할수 있습니다. </font>
<?php }  ?>

</font>
</font>
<font for="moviesummary" style="margin-left:350px;width:900px; font-size:30px;margin-top:50px; float:left">- 영화 간단 소개 -</font><br>
<div id="moviesummary" style="background-color:rgba(251, 244, 247, 1); border: 1px solid #1d0606; font-size:23px; overflow-y: auto;height:300px; margin-top: 230px;width:1130px;margin-left:350px;">

<textarea id="summarytextareatag"style="display: none; margin-left:10px; width:100%; height:100%;"><?php echo $rowsmovie[summary] ?></textarea>
<p style="margin-left:10px;"id="summaryptag"></p>
</div>
</div>
<script type="text/javascript">
var str = $("#summarytextareatag").val();

str = str.replace(/(?:\r\n|\r|\n)/g, '<br />');//서머리 가 들어간곳에서  애초에  저장할때  들어간  띄어끄기 부분을 가지고 오기 위해서 넣은 코드이다.
//이게 없으면 그냥 모든줄이 붙어서 나옴. 띄어쓰기라든지 칸띄우기가 없음.

$("#summaryptag").html(str);
</script>

<script type="text/javascript">
  function logincheckforwatchmovie() {
    alert("이용권을 구매하고 이용해주세요!");
    location.href='buyuseticket.php';//이용권 구매하는 페이지로 이동한다.
  }
</script>
<?php if($rows[coin]==0) {?>
<button type="button" onclick="logincheckforwatchmovie()" style="width:300px; margin-top:20px; margin-left:30px; background-color:red; font-size:20px;"name="button">영화 보기가기</button>

<?php }else{ ?>
<button type="button" onclick="location.href='streamingvideo.php?movienumber=<?php echo $rowsmovie[movienumber]; ?>'" style="width:300px; margin-top:20px; margin-left:30px; background-color:red; font-size:20px;"name="button"># 영화 보기가기</button>
<?php } ?>

</div>
<!--여기까지 moviecontent div태그 입니다.  -->
<div style="margin-top:20px;">
  <font style="font-size:40px; margin-left:200px; ">영화 아고라</font><br>
  <font style="font-size:19px; margin-left:200px; ">본 영화 관련  의견을 나눠보세요!</font>
</div>
<div id="moviecommentcontainer">

  <?php


  $mysql_host ='localhost';
  $mysql_user ='root';
  $mysql_password = 'sssddd456852';
  $mysql_db = 'testdb';
  $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
  $moviecommentquery = "SELECT * FROM moviecomment ORDER BY grp ASC";//desc와 반대되는 차순임. 오름 차순임
  //(작은값ㄷ부터 큰값으로  댓글의 경우에는 최근등록된 글(idnum가 높은 쪽이 맨아래 쪽에 나오므로 그렇게 이렇게 진행함.)
  $resulttt = mysqli_query($conn,$moviecommentquery);
  $presentmovienumber= $_GET[movienumber];
  $total_moviecoment_count="SELECT id FROM moviecomment WHERE movienumber = $presentmovienumber ";//현재 페이지의  댓글의 개수 가 몇개인지알아보기위한 쿼리 문이다.
  $result_moviecoment_count=mysqli_query($conn,$total_moviecoment_count);//질문을 보냄
  $movie_comment_count = mysqli_num_rows($result_moviecoment_count);//해당 답들의  개수를 보기위한 식

  $i=0;// 아래에서 댓글들이 출력될경우 각 댓글의 a태그(답글 글자) div태그 (글자쓰기 관련 요소들의 모음 칸)에 특정 아이디를 부여하여
       // 서로를 비교하기위한 변수이다. 여기서는 0으로 설정하고 아래 댓글을 뿌려주는 while문 안에서 뿌려질때마다 1씩 증가하도록 하였다.
   ?>

  <div id="showmoviecommentcount">
    <!--위에서 정한  대로  댓글 카운트를  밑에 넣음.  -->
    <span style="margin-top:20px; margin-left:10px;">전체 댓글 개수:<font style="margin-left:5px; color:red;"><?php echo $movie_comment_count ?></font>개</span>
  </div>


<!--쓴 댓글이 보여지는 칸임  -->
<?php while( $rowt=mysqli_fetch_array($resulttt)){
  $i=$i+1;//아래에서 댓글들이 출력될경우 각 댓글의 a태그(답글 글자) div태그 (글자쓰기 관련 요소들의 모음 칸)에 특정 아이디를 부여하여
       // 서로를 비교하기위한 변수이다. 여기서는 0으로 설정하고 아래 댓글을 뿌려주는 while문 안에서 뿌려질때마다 1씩 증가하도록 하였다.
  $ff=$rowt['commentxt'];
  $writerff=$rowt['writer'];
  $articelnumber=$rowt['movienumber'];
  $depthcomment=$rowt['lvl'];
  $replycommentparent=$rowt['replyparent'];
  //댓글에  등록되어 있는 아이디의 정보를 가지고 오기위한 쿼리문이다.
  $sql6 = "select*from test3 where id='$writerff'";
  // $sql = "select count(*) from test3 where id='$id'";
  $Result6 = mysqli_query($conn,$sql6);
  //등록된 아이디 row
  $rows6 = mysqli_fetch_array($Result6);


?>

<!--아래부분은  댓글이 보이는 곳의  html디자인  코드이다.
    comment댓글수 만큼  만들어지고 해당 데이터들이 뿌려진다.
    현재 일어난 댓글 별로  위의  카운트 코드가 적용되야되고 한답글에서 답글창을  보면 다른 댓글에 펼쳐논 답글창이 접혀져야하는데 안됨  -->
  <?php if($articelnumber==$presentmovienumber){ ?>
    <?php if($depthcomment==0){ ?>
<div id="totalmoviecomment">
  <div style="margin-top:10px;">
    <?php if($rows6[imagepath]!=null){ ?>
    <img src="<?php echo $rows6[imagepath] ?>" alt="" style="float:left;  width:20px; height:20px;" >
     <!--이미지 칼럼에 이미지가 안들어있는 아이디 또는 아이디가 없는 경우  -->
   <?php }else if($rows6[imagepath]==null) {?>
      <?php if($rows6[id]!=null){ ?>
    <img src="webimage/noprofileman.jpg" alt="" style="float:left; width:20px; height:20px;" >
  <?php }
      }?>
      <!--real writer  -->
  <p style="float:left; font-size:18px;">&nbsp;<?php echo  $writerff ?> </p>
 <?php if($_SESSION[id]==$writerff){ //로그인한 아이디가 글쓴이와 같을때이다.?>
  <a class="atag_for_delete" name="<?php echo $rowt[id] ?>" style="float:right;margin-left:5px;">
  삭제
  </a>
  <a id="fix<?php echo $i ?>" name="<?php echo $rowt[id] ?>"  style="margin-left:5px; float:right;"class="atag_for_fix" >수정</a>
<?php } ?>
  </div>

<br>
<!-- 댓글내용이 들어가는 div태그이다.  -->
<div id="afix<?php echo $i; ?>" name="fixfix" style="margin-top:30px; display:block; font-size:20px;" value="<?php echo $ff; ?>"><?php echo $ff; ?></div>
<div id="bafix<?php echo $i; ?>" name="fixfix1" class="fixcomcontainer">
  <form class="fixform" id="fixformfix<?php echo $i; ?>" name="fixform" onsubmit="return fixcommentbtn();">
    <textarea id="fixcomlinebafix<?php echo $i; ?>"maxlength="300"
    placeholder="댓글은 최대 300자까지 남길수 있습니다." style="overflow-y: scroll; "class="fixcommet"><?php echo $ff; ?></textarea>
    <button type="button" class="fixbutton" id="fixbuttonfix<?php echo $i; ?>">수정</button></div>
  </form>



</br>
<div id="ddd" >
<!--date for each comment maked  -->
<? echo date("Y-m-d. h:i:sa",$rowt[wdate]);?><br>
<!-- 날찌 -->
  <a id="a<?php echo $i ?>"class="atag" name="<?php echo $rowt[grp] ?>">
  답글
  </a>
   <div id="ba<?php echo $i ?>"class="replycomment" style="DISPLAY:none" >
   <textarea  class="commentline1" id="commentline1a<?php echo $i ?>" maxlength="300" placeholder="댓글은 최대 300자까지 남길수 있습니다." style="resize:none; margin-top:0px; overflow-y: scroll; width:800px; height:96px; font-size:15px;"></textarea>
    <input type="hidden" name="articlenumber1" id="articlenumber1a<?php echo $i ?>" value="<?php echo $_GET['number'] ?>">
    <input type="hidden" name="articlewriter1" id="articlewriter1a<?php echo $i ?>" value="<?php echo $rows[id]?>">
   <button id="commentbtn1a<?php echo $i ?>" type="text" onclick=""style="color:white;margin-top:-103px;height:96px;font-size:15px; margin-left: 800px;float:left; width:96px;" name="commentbtn1">답글등록</button>
   <div style="margin-left:1176px; margin-top:-32px;">
   <span style="margin-left:-355px; font-size: 15px; margin-top:30px; "class="counter1" id="counter1a<?php echo $i ?>">0/300자</span>
   </div>
 </div>



 </div>
</div>
<?php } //대글의  깊이 정도가 0일때  (부모글이라는 뜻임)
        //0보다 큰경우에는 대댓글 자식글이라는 뜻임.
      else if($depthcomment>0){?>
<!--대댓글의 경우이다.  -->


<div id="totalmoviecomment" style="margin-left:90px; background-color:rgba(106, 110, 101, 0.20); margin-top:30px; width:1150px;">
  <div style="margin-top:10px;" >

    <?php if($rows6[imagepath]!=null){ ?>
   <font style="font-size:30px;margin-left:-40px; color:black; margin-top: -10px;float:left;">╚</font><img src="<?php echo $rows6[imagepath] ?>" alt="" style="float:left;  width:20px; height:20px;" >
     <!--이미지 칼럼에 이미지가 안들어있는 아이디 또는 아이디가 없는 경우  -->
   <?php }else if($rows6[imagepath]==null) {?>
      <?php if($rows6[id]!=null){ ?>
   <font style="font-size:30px;margin-left:-40px;color:black; margin-top: -10px;float:left;">╚</font><img src="webimage/noprofileman.jpg" alt="" style="float:left; width:20px; height:20px;" >
  <?php } }?>
      <!--real writer  -->
  <p style="float:left; font-size:18px;">&nbsp;<?php echo  $writerff ?> </p>
 <?php if($_SESSION[id]==$writerff){ ?>
  <a class="atag_for_delete" name="<?php echo $rowt[id] ?>" style="float:right;margin-left:5px;">
  삭제
  </a>
  <a id="fix<?php echo $i ?>" name="<?php echo $rowt[id] ?>"  style="margin-left:5px; float:right;"class="atag_for_fix" >수정</a>
<?php } ?>
  </div>
  <?php if($depthcomment>=2){ ?>
  <br>
  <font style="margin-left:-70px; font-size:18px; color:red;"><?php echo $replycommentparent; ?>님의 댓글의 대한 답글</font>
<?php } ?>
<br>
<!-- 댓글내용이 들어가는 div태그이다.  -->
<div id="afix<?php echo $i; ?>" name="fixfix" style="margin-top:30px; display:block; font-size:20px;" value="<?php echo $ff; ?>"><?php echo $ff; ?></div>
<div id="bafix<?php echo $i; ?>" name="fixfix1" class="fixcomcontainer">
  <form class="fixform" id="fixformfix<?php echo $i; ?>" name="fixform" onsubmit="return fixcommentbtn();">
    <textarea id="fixcomlinebafix<?php echo $i; ?>"maxlength="300"
    placeholder="댓글은 최대 300자까지 남길수 있습니다." style="overflow-y: scroll; "class="fixcommet"><?php echo $ff; ?></textarea>
    <button type="button" class="fixbutton" id="fixbuttonfix<?php echo $i; ?>">수정</button></div>
  </form>



</br>
<div id="ddd" >
<!--date for each comment maked  -->
<? echo date("Y-m-d. h:i:sa",$rowt[wdate]);?><br>

  <a id="a<?php echo $i ?>"class="atag" name="<?php echo $rowt[grp] ?> " >
  답글
  </a>
   <div id="ba<?php echo $i ?>"class="replycomment" style="DISPLAY:none" >
   <textarea  class="commentline1" id="commentline1a<?php echo $i ?>" maxlength="300" placeholder="댓글은 최대 300자까지 남길수 있습니다." style="resize:none; margin-top:0px; overflow-y: scroll; width:800px; height:96px; font-size:15px;"></textarea>
    <input type="hidden" name="articlenumber1" id="articlenumber1a<?php echo $i ?>" value="<?php echo $_GET['number'] ?>">
    <input type="hidden" name="articlewriter1" id="articlewriter1a<?php echo $i ?>" value="<?php echo $rows[id]?>">
   <button id="commentbtn1a<?php echo $i ?>" type="text" onclick=""style="color:white;margin-top:-103px;height:96px;font-size:15px; margin-left: 800px;float:left; width:96px;" name="commentbtn1">답글등록</button>
   <div style="margin-left:1176px; margin-top:-32px;">
   <span style="margin-left:-355px; font-size: 15px; margin-top:30px; "class="counter1" id="counter1a<?php echo $i ?>">0/300자</span>
   </div>
 </div>



 </div>
</div>

<!--totalmoviecomment커멘트 보여주는란 끝  -->





<?php }//댓글의 깊이 정도가 0보다 클때 ?>
<?php }//아티클 넘어 즉 현재 게시물의 넘버와 디비속에 설정된  댓글들의  페이지 넘버가 일치해야지만
//그해당  페이지의 댓글로 인식하여 댓글들이 뿌려진다. ?>


<?php

}
//영화 댓글 while문의 끝
?>

<script type="text/javascript">

//아래 코드들은 댓글의  삭제를 위한 코드이다.
//아래 부분은 위 a태그들중 삭제값이 들어있는 a태그의 클릭이벤트이다.
$('.atag_for_delete').click(function(){
var commentidindatabase1 = $(this).attr('name');//식제태그를 눌렀을때 삭제 a태그의 name값=(현재 댓글의 디비에서의 아이디값을 넣어놈)를 잡아온다
var confirmdeletecomment =confirm("진짜로 댓글을 삭제 하시겠습니까??");
if(confirmdeletecomment){//컨펌창에서  확인을 눌렀을떄

  var form_data3 ={

    'commentidnumber1':commentidindatabase1,//코멘트 아이디로 코멘트 를 구별가능하게하기위한 코드

     };
   $.ajax({
       type: 'POST',
       url: 'deletemoviecomment.php',
       data: form_data3,
       dataType: 'html',
       //원래  ajax같은 경우에는 비동기 기능이어서 아래 sucess함수가
       //진행이되면서  그다음 코드도 진행되므로 loginck가 결국 끝날떄까지 ajax코드가 완료될때까지
       //바뀌지 않느다. 그래서  ajax코드에  async:false를 넣어서 비동기형식을 동기형식으로 바꾸었따.
   success: function(data){
  // 결과 텍스트를 경고창으로 보여준다.

   if(data == "댓글 삭제 성공!"){

     //일단 새로고침으로 해놨는데
     //특정 div만  수정되는 방향으로 바꿀것이다.
    location.reload();
    }else{

       return false;
    }
    }//sucess 함수
  });//ajax 끝


}else{
  return false;//컴펌창에서 취소를 눌렀을때;
}

});

//아래코드들은  답글창을  나타내기위한 코드이다.
//아래부분은   위 a태그클릭시에 id값을 받아오는 코드이다.
$('.atag').click(function(){
    var id_check = $(this).attr("id");//답글이라는 a태그를  눌렀을떄 해당  id를  받아온다.
    var clickedatag=document.getElementById(id_check);
    var divcontainer= document.getElementById('b'+id_check);//현재 클릭한 답글의 댓글창을 감싸고 있는 div태그이다.
    var commentpresent=document.getElementById('commentline1'+id_check);//현재 클릭한 답글의 댓글창  쓰는 부분이다.
    var commentother=$('.commentline1').not(commentpresent);//댓글창 textarea중에서  현재 클릭해서 나온 댓글창 부분을 제외한 모든 댓글창이다.
    var counterpresent=document.getElementById('counter1'+id_check);
    var commentbutton=document.getElementById('commentbtn1'+id_check);
   var commentidindatabase4 = $(this).attr('name');//수정태그를 눌렀을때 수정 a태그의 name값=(현재 댓글의 디비에서의 아이디값을 넣어놈)를 잡아온다


  if(divcontainer.style.display=='none'){//댓글창이  안보여져 있는 경우이다.//펼치기위해서

       divcontainer.style.display="block";//해당 댓글창은  보임으로 처리되고
       commentpresent.focus();//해당댓글창의   텍스트 쓰는 란은 포커스 처리된다.
     $('.replycomment').not(divcontainer).hide();//나머지 댓글창들은  숨김 표시로 진행이된다.

     $('.commentline1').not(commentpresent).val("");//나머지댓글창이 숨겨지면  그전에  쓰고 있던 값들도 리셋되게 하기위해 나머지  텍스트 에리아 창을저렇게 표시하였따.
     $('#counter1'+id_check).html(0 + '/300자');//혹시나 다른곳에서 다시 돌아오면  리셋이 되어있어야 하므로 0으로 설정해놓았다.
     $(function() {
       //코멘트 라인에  추가되는  글자수 만큼  카운트 된다.
         $('#commentline1'+id_check).keyup(function (e){
             var content1 = $(this).val();

             $('#counter1'+id_check).html(content1.length + '/300자');
         });
         $('#counter1'+id_check).keyup();

     });
     $('[name="fixfix1"]').attr('style', "display:none");

     $('[name="fixfix"]').attr('style', "display:block;margin-top:30px;  font-size:20px;");

      $('#commentbtn1'+id_check).click(function(){//답글 등록  이벤트를 눌렀을 경우
       //답글창을 입력했을때  일어나는 이벤트이다.

       var form_data3 ={
         'content': document.getElementById('commentline1'+id_check).value,//답글창안에 들어가는 내용이다.
         'parent_grp':commentidindatabase4,//답글의  부모글의   아이디 번호이다.

          };

        $.ajax({
            type: 'POST',
            url: 'insertreplymoviecomment.php',
            data: form_data3,
            dataType: 'html',
            //원래  ajax같은 경우에는 비동기 기능이어서 아래 sucess함수가
            //진행이되면서  그다음 코드도 진행되므로 loginck가 결국 끝날떄까지 ajax코드가 완료될때까지
            //바뀌지 않느다. 그래서  ajax코드에  async:false를 넣어서 비동기형식을 동기형식으로 바꾸었따.
        success: function(data){
       // 결과 텍스트를 경고창으로 보여준다.

        if(data == "답글 추가 성공!"){

          //일단 새로고침으로 해놨는데
          //특정 div만  수정되는 방향으로 바꿀것이다.

         location.reload();
         }else{

            return false;
         }
         }//sucess 함수
       });//ajax 끝
   });//답글 눌렀을때

  }else{//댓글창이 보여져있는 경우이다.//접기위해서
    divcontainer.style.display="none";//해당 댓글창이 켜지고 다시  답글을 누르면  댓글창이 꺼진다.
    $('.commentline1').val("");
    $('#counter1'+id_check).html(0 + '/300자');//댓글창을 접었다가 펼치면 다시 0으로 설정되도록 하였다.
  }

});


///아래쪽은  수정창을  나타내기위한  코드이다.
$('.atag_for_fix').click(function(){

  var id_check_for_fix = $(this).attr("id");//수정이라는 a태그를  눌렀을떄 해당  id를  받아온다.
  var clikedatag_for_fix=document.getElementById(id_check_for_fix);//수정 a태그이다.
  var changeddivforfix=document.getElementById('a'+id_check_for_fix);//수정할때 바꿔야되는 댓글 들어가져있는 div태그
  var textareaforfix=document.getElementById('ba'+id_check_for_fix);//수정할수있는창으로 바뀌었을때 div태그이다.
  var textarearealfix=document.getElementById('fixcomlineba'+id_check_for_fix)//수정할  내용일 등어있는 textarea태그
  var fixformtag=document.getElementById('fixform'+id_check_for_fix);//form 태그이다  수정한 내용을  submit하는
  var fixbtn=document.getElementById('fixbutton'+id_check_for_fix);//수정버튼의 대한 변수선언dom형식

  var commentidindatabase = $(this).attr('name');//수정태그를 눌렀을때 수정 a태그의 name값=(현재 댓글의 디비에서의 아이디값을 넣어놈)를 잡아온다

   if(changeddivforfix.style.display=='block'){//수정하는 창이 안보여지는 경우

    changeddivforfix.style.display='none'
    textareaforfix.style.display='block';
    textarearealfix.focus();//수정창이 나왔을때  해당 textarea에 커서가 포커스된다
    textarearealfix.value = "";//수정창 안에 글이있을때 커서 위치가  그 글 바로 다음으로 놓게 하기 위해서 넣어준 코드이다.
   $('[name="fixfix1"]').not(textareaforfix).attr('style', "display:none");//다른  수정창으로 넘어갈때    넘어가진  수정창을 제외한 모든 수정은 'none으로  설정한다.'
   $('[name="fixfix"]').not(changeddivforfix).attr('style', "display:block;margin-top:30px;  font-size:20px;");//그리고 현재 수정으로 넘어와 바뀐  댓글창만 제외하고 모든 수정창은
   $('[name="fixform"]').each(function(){
    this.reset();
  });// 작성중에 다른 수정창을  눌렀을떄  작성중이던 수정창은 리셋되도록하는 함수이다.
   $('.replycomment').hide();//나머지 댓글창들은  숨김 표시로 진행이된다.
   $('.commentline1').val("");//나머지댓글창이 숨겨지면  그전에  쓰고 있던 값들도 리셋되게 하기위해 나머지  텍스트 에리아 창을저렇게 표시하였따.

   $('#fixbutton'+id_check_for_fix).click(function(){//수정버튼을  눌렀을때 수정되는 사항을  진행하기위한 코드이다.

      //alert(commentidindatabase);
      var form_data2 ={
        'content': document.getElementById('fixcomlineba'+id_check_for_fix).value,
        'commentidnumber':commentidindatabase,//코멘트 아이디로 코멘트 를 구별가능하게하기위한 코드

         };
       $.ajax({
           type: 'POST',
           url: 'fixmoviecomment.php',
           data: form_data2,
           dataType: 'html',
           //원래  ajax같은 경우에는 비동기 기능이어서 아래 sucess함수가
           //진행이되면서  그다음 코드도 진행되므로 loginck가 결국 끝날떄까지 ajax코드가 완료될때까지
           //바뀌지 않느다. 그래서  ajax코드에  async:false를 넣어서 비동기형식을 동기형식으로 바꾸었따.
       success: function(data){
      // 결과 텍스트를 경고창으로 보여준다.

       if(data == "댓글 수정 성공!"){

         //일단 새로고침으로 해놨는데
         //특정 div만  수정되는 방향으로 바꿀것이다.
        location.reload();
        }else{

           return false;
        }
        }//sucess 함수
      });//ajax 끝



    });

 }else{
    clikedatag_for_fix.innerHTML="수정";
    changeddivforfix.style.display='block'
    textareaforfix.style.display='none';
    fixformtag.reset();//수정 창이 닫히면 다시 리렛됨.
 }
});



</script>
<!--추가되는 부분이다.  -->
<script type="text/javascript">
$(function() {

  //코멘트 라인에  추가되는  글자수 만큼  카운트 된다.
    $('#commentline').keyup(function (e){
        var content = $(this).val();
        //$(this).height(((content.split('\n').length + 1) * 1.5) + 'em');
        $('#counter').html(content.length + '/300자');
    });
    $('#content').keyup();

});



function ajaxforuploadmoviecomment() {

  var form_data1 ={
    'content': document.getElementById('commentline').value,
    'articlenum':document.getElementById('articlenumber').value,
    'commentwriter': document.getElementById('articlewriter').value
     };
   $.ajax({
       type: 'POST',
       url: 'insertmoviecomment.php',
       data: form_data1,
       dataType: 'html',

   success: function(data){
  // 결과 텍스트를 경고창으로 보여준다.

   if(data == "댓글 등록 성공!"){

     //일단 새로고침으로 해놨는데
     //특정 div만  수정되는 방향으로 바꿀것이다.
    location.reload();

    }else{

       return false;
    }
    }//sucess 함수
  });//ajax 끝


}//댓글 등록 함수 닫힘

</script>


<div id="moviecomment">
  <textarea name="commentline" id="commentline" maxlength="300" placeholder="댓글은 최대 300자까지 남길수 있습니다." style="resize:none; margin-top:0px; overflow-y: scroll; width:1350px; height:96px; font-size:20px;"></textarea>
   <input type="hidden" name="articlenumber" id="articlenumber" value="<?php echo $_GET['movienumber'] ?>">
   <input type="hidden" name="articlewriter" id="articlewriter" value="<?php echo $_SESSION[id] ?>">
  <button id="commentbtn" type="text" style="color:white;margin-top:-103px;height:96px;font-size:20px; margin-left: 1350px;float:left; width:126px;" onclick="return ajaxforuploadmoviecomment();" name="commentbtn">댓글등록</button>
  <div style="margin-left:1409px; margin-top:-32px;">
  <span style="margin-left:-25px; font-size: 17px; margin-top:30px; " id="counter">0/300자</span>
  </div>
</div>
<!-- 무비 커멘트 쓰는란 끝 -->
</div>
<!--무비 커멘트 컨테이너 끝  -->

</div>
<!--메인  화면의 중앙 부분   div태그 끝.  -->



<div id ="jb-footer" style="">
  <p>   오픈 API | 이용약관 | 개인정보취급방침 | 청소년보호정책 | 권리침해신고 | 고객센터 | E-mail수집거부정책
        <br/> Copyright ©  Corp. All rights reserved.</p>
</div>

</body>
</html>
