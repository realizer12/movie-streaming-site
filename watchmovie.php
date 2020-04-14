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
  #ffff{
   margin-left: 48px;

  }
  .selectmovietype{

      display:inline-block;
      text-align:center;
      vertical-align:middle;
      text-decoration:none;
      font-size:19px;
      color:#000;
      background-color: white;
      border:1px solid #000;
      width:118px;
      height:38px;
      line-height:38px;
    }



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
          min-height:800px;
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
      #movietypelist{
       border: 2px solid #1d0606;
       background-color:rgba(226, 139, 50, 0.74);
       margin-left: 90px;
       font-size: 20px;
       width:1313px;
       height:150px;
       padding-left: 20px;
      }
      #movilisttitle{
        margin-left: 91px;
        margin-top:30px;
        width:900px;
        /* border: 1px solid #1d0606; */

      }

    .grid-container {
      display: grid;
      grid-template: 450px 450px 450px  / 250px 250px 250px 250px 250px ;
      grid-gap: 10px;
      margin-top: 0px;
      margin-left: 90px;
      width:1313px;
      border: 2px solid #1d0606;
      /* background-color:rgba(219, 222, 204, 0.74); */
      border-top: 0px;
      min-height:1380px;
      height: 100%;
      padding: 10px;
    }
    .grid-container>div {
      background-color: rgba(168, 159, 159, 0.8);
      text-align: center;
      border: 2px solid #1d0606;
      font-size: 30px;
      margin-bottom: 50px;
    }

    .starR1{
    background: url('http://miuu227.godohosting.com/images/icon/ico_review.png') no-repeat -52px 0;
    background-size: auto 100%;
    width: 15px;
    height: 30px;
    float:left;
    text-indent: -9999px;
    cursor: pointer;
}
.starR2{
    background: url('http://miuu227.godohosting.com/images/icon/ico_review.png') no-repeat right 0;
    background-size: auto 100%;
    width: 15px;
    height: 30px;
    float:left;
    text-indent: -9999px;
    cursor: pointer;
}
.starR1.on{background-position:0 0;}
.starR2.on{background-position:-15px 0;}
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
  <script type="text/javascript">
    /* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
    (function(d, m){
      var kommunicateSettings = {"appId":"38aa4516a1458cb887a207b1cd58921e4","conversationTitle":"무비나이트 운영자"};
      var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
      s.src = "https://api.kommunicate.io/v2/kommunicate.app";
      var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
      window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
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
    <li class="w3-button " onclick="location.href='watchmovie.php'" style="margin-left: 100px;background-color:rgb(195, 196, 194);height:48px;font-size: 20px">
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


<div id="movilistcontainer">
<!--영화  리스트들이 들어가는  컨테이너이다. 일단  주변 테두리를  해놓음. -->
<div id="movilisttitle">
  <!-- 영화 리스트 페이지의  타이틀이 들어가는 곳 -->
<font style="font-size:60px;">영화 다시보기</font></br>
<font style="font-size:30px;">보고싶은 영화를 검색해 보세요!</font>

<!--이부분은 영화 추가를 하는 페이지로 넘어가기 위한 버튼으로 관리자 계정에서만 보이도록 설정하였따.  -->
<?php if($_SESSION[id]=="admin"){ ?>
<button type="button" name="button" onclick="location.href='uploadmovie.php'"style="font-size:20px; margin-top:-10px;width: 130px;float:right; margin-right:-410px;">영화 추가하기</button>
<?php }else{ ?>
<!-- 관리자 계정이 아닐때  일단  칸은 만들어 놈  나중에  추가할 사항잇으면 추가하자!! -->
<?php } ?>
<!--아래는 영화 리스트 타이틀 div의 마지막  -->
</div>


<!-- 아래 부분은 영화를 검색하는 부분이다. -->
<div id="movietypelist">
  <div  style="margin-top:10px; margin-left:-125px;"class="text-center" id="searchForm">
    <script type="text/javascript">
      function serachnotice33() {

        var searchform123 = $('#searchfromcontent').val();

       if( searchform123 == ""){

          alert("검색을 위해\n최소 한글 자라도 입력해주세요");
        return false;
        }


      }
    </script>



          <form name="serachnoticeform" onsubmit="return serachnotice33();"  method="get" >
              <font style="font-size:27px;">검색창: </font><input placeholder=" 보고싶은 영화의 제목을 적어보세요!"  name="searchfromcontent" id="searchfromcontent"style="width:1000px;border: 2px solid #1d0606;" type="text" size="20" name="condition"/><button id="searchfromcontent" style=" font-size:20px; width:80px; margin-left:5px; height:36px;border: 2px solid #1d0606;" type="submit" name="button">검색</button>

          </form>
      </div>


  <div style="margin-top:8px;">

<font style="font-size:20px;">필터: </font><a id="entire0" class="selectmovietype" href="watchmovie.php?entiretype=0&type=0">최신 업로드 순</a><a id="entire1" class="selectmovietype" href="watchmovie.php?entiretype=1&type=0">조회 순</a><a  id="entire2" class="selectmovietype" href="watchmovie.php?entiretype=2&type=0">별점 순</a><br>
  </div>
<div style="margin-top:4px;">
  장르 별:<a id="type0" class="selectmovietype" href="watchmovie.php?entiretype=<?php echo $_GET[entiretype]; ?>&type=0">전체</a><a id="type1" class="selectmovietype" href="watchmovie.php?entiretype=<?php echo $_GET[entiretype]; ?>&type=1">코미디</a><a id="type2" class="selectmovietype" href="watchmovie.php?entiretype=<?php echo $_GET[entiretype]; ?>&type=2">액션</a><a  id="type3" class="selectmovietype" href="watchmovie.php?entiretype=<?php echo $_GET[entiretype]; ?>&type=3">SF</a><a id="type4" class="selectmovietype" href="watchmovie.php?entiretype=<?php echo $_GET[entiretype]; ?>&type=4">공포</a><a id="type5" class="selectmovietype" href="watchmovie.php?entiretype=<?php echo $_GET[entiretype]; ?>&type=5">애니</a><a id="type6" class="selectmovietype" href="watchmovie.php?entiretype=<?php echo $_GET[entiretype]; ?>&type=6">드라마</a><a id="type7" class="selectmovietype" href="watchmovie.php?entiretype=<?php echo $_GET[entiretype]; ?>&type=7">판타지</a><a id="type8" class="selectmovietype" href="watchmovie.php?entiretype=<?php echo $_GET[entiretype]; ?>&type=8">멜로</a>

</div>

</div>
<?php


$mysql_host ='localhost';
$mysql_user ='root';
$mysql_password = 'sssddd456852';
$mysql_db = 'testdb';
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
$no = $_GET[no];
if (!$no || $no <0) $no=0;
$page_list_size=5;

$page_movielist_count=15;//한페이지에 보여질 리스트 수
$searchcontent=$_GET[searchfromcontent];
$entireype=$_GET[entiretype];
$genre=$_GET[type];
if($searchcontent !=""){
  $query = "SELECT * FROM movie where movietitle like'%$searchcontent%' ORDER BY movienumber DESC  LIMIT $no,$page_movielist_count";//업로드 순//w전체
  $result_movie_sql="SELECT*FROM movie where movietitle like'%$searchcontent%'";
}else{
if($entireype==0){//최신 업로드 순일때
  echo "<script>$( '#entire0' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
if($genre==0){//장르  전체일때----------------------------------------------------------------------------
  $query = "SELECT * FROM movie ORDER BY movienumber DESC  LIMIT $no,$page_movielist_count";//업로드 순//w전체
  $result_movie_sql="SELECT*FROM movie";
  echo "<script>$( '#type0' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==1){//장르 코미디일때
  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY movienumber DESC  LIMIT $no,$page_movielist_count";//업로드 순 //코미디
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
    echo "<script>$( '#type1' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==2){//장르 액션일떄
  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY movienumber DESC  LIMIT $no,$page_movielist_count";//업로드 순 //코미디
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
    echo "<script>$( '#type2' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==3){//장르 sf
  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY movienumber DESC  LIMIT $no,$page_movielist_count";//업로드 순 //코미디
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
    echo "<script>$( '#type3' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==4){//장르 공포
  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY movienumber DESC  LIMIT $no,$page_movielist_count";//업로드 순 //코미디
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
    echo "<script>$( '#type4' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==5){//장르 애니
  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY movienumber DESC  LIMIT $no,$page_movielist_count";//업로드 순 //코미디
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
    echo "<script>$( '#type5' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==6){//장르 드라마
  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY movienumber DESC  LIMIT $no,$page_movielist_count";//업로드 순 //코미디
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
    echo "<script>$( '#type6' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==7){//장르  판타지
  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY movienumber DESC  LIMIT $no,$page_movielist_count";//업로드 순 //코미디
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
    echo "<script>$( '#type7' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==8){//장르 멜로
  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY movienumber DESC  LIMIT $no,$page_movielist_count";//업로드 순 //코미디
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
    echo "<script>$( '#type8' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}



}else if($entireype==1){//조회순일때----------------------------------------------------------------------------------
  echo "<script>$( '#entire1' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
if($genre==0){//장르  전체일때
$query = "SELECT * FROM movie ORDER BY movieview DESC  LIMIT $no,$page_movielist_count";//조회순// 전체
$result_movie_sql="SELECT*FROM movie";
echo "<script>$( '#type0' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==1){//장르 코미디일때
  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY movieview DESC  LIMIT $no,$page_movielist_count";//조회순// 전체
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
  echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==2){//장르 액션일떄
  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY movieview DESC  LIMIT $no,$page_movielist_count";//조회순// 전체
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
    echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==3){//장르 sf
  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY movieview DESC  LIMIT $no,$page_movielist_count";//조회순// 전체
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
    echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==4){//장르 공포
  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY movieview DESC  LIMIT $no,$page_movielist_count";//조회순// 전체
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
    echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==5){//장르 애니
  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY movieview DESC  LIMIT $no,$page_movielist_count";//조회순// 전체
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
    echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==6){//장르 드라마
  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY movieview DESC  LIMIT $no,$page_movielist_count";//조회순// 전체
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
    echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==7){//장르  판타지
  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY movieview DESC  LIMIT $no,$page_movielist_count";//조회순// 전체
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
    echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==8){//장르 멜로
  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY movieview DESC  LIMIT $no,$page_movielist_count";//조회순// 전체
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
    echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}
}else if($entireype==2){//별점순일때0---------------------------------------------------------------
echo "<script>$( '#entire2' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";

if($genre==0){//장르  전체일때
 $query = "SELECT * FROM movie ORDER BY totalscore/startimes DESC  LIMIT $no,$page_movielist_count";//별점순 //전체
 $result_movie_sql="SELECT*FROM movie";
  echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==1){//장르 코미디일때

  $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY totalscore/startimes DESC  LIMIT $no,$page_movielist_count";//별점순 //전체
  $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
  echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==2){//장르 액션일떄

    $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY totalscore/startimes DESC  LIMIT $no,$page_movielist_count";//별점순 //전체
    $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
  echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==3){//장르 sf

    $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY totalscore/startimes DESC  LIMIT $no,$page_movielist_count";//별점순 //전체
    $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
  echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==4){//장르 공포

    $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY totalscore/startimes DESC  LIMIT $no,$page_movielist_count";//별점순 //전체
    $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
  echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==5){//장르 애니

    $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY totalscore/startimes DESC  LIMIT $no,$page_movielist_count";//별점순 //전체
    $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
  echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==6){//장르 드라마

    $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY totalscore/startimes DESC  LIMIT $no,$page_movielist_count";//별점순 //전체
    $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
  echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==7){//장르  판타지

    $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY totalscore/startimes DESC  LIMIT $no,$page_movielist_count";//별점순 //전체
    $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
  echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}else if($genre==8){//장르 멜로

    $query = "SELECT * FROM movie where genre=$genre-1 ORDER BY totalscore/startimes DESC  LIMIT $no,$page_movielist_count";//별점순 //전체
    $result_movie_sql="SELECT*FROM movie where genre=$genre-1";
  echo "<script>$( '#type$genre' ).css( 'background-color','rgba(132, 138, 136, 0.83)');</script>";
}
}
}
$resultt = mysqli_query($conn,$query);


$total_movie_row = mysqli_num_rows(mysqli_query($conn,$result_movie_sql));

//while문을  돌려서  아래   건의사항  게시판 내용들을 계속해서  돌아가게함.

if ($total_movie_row <= 0) {$total_movie_row = 0;} // 총게시물의 값이 없거나 할경우 기본값으로 세팅


$total_page = floor(($total_movie_row-1)/$page_movielist_count);// 총게시물에 1을 뺀뒤 페이지 사이즈로 나누고 소수점이하를 버린다.

$current_page = floor($no/$page_movielist_count);

?>
<div  class="grid-container" id="gridcontainer">

<?php while(  $rowmovie=mysqli_fetch_array($resultt))
 { ?>

  <div class="movieentire"  style="height:435px;">
    <font style="font-size:23px; margin-left:-107px;">조회 수: <?php echo $rowmovie['movieview']; ?>회</font>
  <div class="movieimage" style="margin-left:8px; margin-top:5px;height:300px; width:232px; border: 1px solid #1d0606;">
  <img src="<?php echo $rowmovie['posterpath'] ?>" style="cursor:pointer; width:100%; height:100%; "onclick="location.href='movieintroduce.php?movienumber=<?php echo$rowmovie['movienumber'] ?>'"  alt="이미지 없음">
  </div>
   <div class="movititleandstar">
     <a style="cursor:pointer;"href="movieintroduce.php?movienumber=<?php echo$rowmovie['movienumber'] ?>"><?php echo $rowmovie['movietitle']; ?></a>

   </div>
   <div class="movititleandstar" style="margin-top:-5px;">
  <?php if(round($rowmovie[totalscore]/$rowmovie[startimes],1)<=0.5){// 여기서부터는 별점별로 나태는  별의 개수를  나눠눈 피에치피 조건문 구간이다. ?>
       <div class="starRev" id="ffff" style="pointer-events: none;"  >
         <span class="starR1 on">0.5</span>
         <span class="starR2">1</span>
         <span class="starR1">1.5</span>
         <span class="starR2">2</span>
         <span class="starR1">2.5</span>
         <span class="starR2">3</span>
         <span class="starR1">3.5</span>
         <span class="starR2">4</span>
         <span class="starR1">4.5</span>
         <span class="starR2">5</span>
       </div>
     <?php }else if(round($rowmovie[totalscore]/$rowmovie[startimes],1)<=1){ ?>
       <div class="starRev" id="ffff" style="pointer-events: none;"  >
         <span class="starR1 on">0.5</span>
         <span class="starR2 on">1</span>
         <span class="starR1">1.5</span>
         <span class="starR2">2</span>
         <span class="starR1">2.5</span>
         <span class="starR2">3</span>
         <span class="starR1">3.5</span>
         <span class="starR2">4</span>
         <span class="starR1">4.5</span>
         <span class="starR2">5</span>
       </div>
     <?php }else if(round($rowmovie[totalscore]/$rowmovie[startimes],1)<=1.5){ ?>
       <div class="starRev" id="ffff" style="pointer-events: none;"  >
         <span class="starR1 on">0.5</span>
         <span class="starR2 on">1</span>
         <span class="starR1 on">1.5</span>
         <span class="starR2">2</span>
         <span class="starR1">2.5</span>
         <span class="starR2">3</span>
         <span class="starR1">3.5</span>
         <span class="starR2">4</span>
         <span class="starR1">4.5</span>
         <span class="starR2">5</span>
       </div>
     <?php }else if(round($rowmovie[totalscore]/$rowmovie[startimes],1)<=2){ ?>
       <div class="starRev" id="ffff" style="pointer-events: none;"  >
         <span class="starR1 on">0.5</span>
         <span class="starR2 on">1</span>
         <span class="starR1 on">1.5</span>
         <span class="starR2 on">2</span>
         <span class="starR1">2.5</span>
         <span class="starR2">3</span>
         <span class="starR1">3.5</span>
         <span class="starR2">4</span>
         <span class="starR1">4.5</span>
         <span class="starR2">5</span>
       </div>
     <?php }else if(round($rowmovie[totalscore]/$rowmovie[startimes],1)<=2.5){ ?>
       <div class="starRev" id="ffff" style="pointer-events: none;"  >
         <span class="starR1 on">0.5</span>
         <span class="starR2 on">1</span>
         <span class="starR1 on">1.5</span>
         <span class="starR2 on">2</span>
         <span class="starR1 on">2.5</span>
         <span class="starR2">3</span>
         <span class="starR1">3.5</span>
         <span class="starR2">4</span>
         <span class="starR1">4.5</span>
         <span class="starR2">5</span>
       </div>
   <?php }else if(round($rowmovie[totalscore]/$rowmovie[startimes],1)<=3){?>
     <div class="starRev" id="ffff" style="pointer-events: none;"  >
       <span class="starR1 on">0.5</span>
       <span class="starR2 on">1</span>
       <span class="starR1 on">1.5</span>
       <span class="starR2 on">2</span>
       <span class="starR1 on">2.5</span>
       <span class="starR2 on">3</span>
       <span class="starR1">3.5</span>
       <span class="starR2">4</span>
       <span class="starR1">4.5</span>
       <span class="starR2">5</span>
     </div>
   <?php }else if(round($rowmovie[totalscore]/$rowmovie[startimes],1)<=3.5){ ?>
     <div class="starRev" id="ffff" style="pointer-events: none;"  >
       <span class="starR1 on">0.5</span>
       <span class="starR2 on">1</span>
       <span class="starR1 on">1.5</span>
       <span class="starR2 on">2</span>
       <span class="starR1 on">2.5</span>
       <span class="starR2 on">3</span>
       <span class="starR1 on">3.5</span>
       <span class="starR2">4</span>
       <span class="starR1">4.5</span>
       <span class="starR2">5</span>
     </div>
   <?php }else if(round($rowmovie[totalscore]/$rowmovie[startimes],1)<=4.0){ ?>
     <div class="starRev" id="ffff" style="pointer-events: none;"  >
       <span class="starR1 on">0.5</span>
       <span class="starR2 on">1</span>
       <span class="starR1 on">1.5</span>
       <span class="starR2 on">2</span>
       <span class="starR1 on">2.5</span>
       <span class="starR2 on">3</span>
       <span class="starR1 on">3.5</span>
       <span class="starR2 on">4</span>
       <span class="starR1">4.5</span>
       <span class="starR2">5</span>
     </div>
   <?php }else if(round($rowmovie[totalscore]/$rowmovie[startimes],1)<=4.5){ ?>
     <div class="starRev" id="ffff" style="pointer-events: none;"  >
       <span class="starR1 on">0.5</span>
       <span class="starR2 on">1</span>
       <span class="starR1 on">1.5</span>
       <span class="starR2 on">2</span>
       <span class="starR1 on">2.5</span>
       <span class="starR2 on">3</span>
       <span class="starR1 on">3.5</span>
       <span class="starR2 on">4</span>
       <span class="starR1 on">4.5</span>
       <span class="starR2">5</span>
     </div>
   <?php }else if(round($rowmovie[totalscore]/$rowmovie[startimes],1)<=5.0){ ?>
     <div class="starRev" id="ffff" style="pointer-events: none;"  >
       <span class="starR1 on">0.5</span>
       <span class="starR2 on">1</span>
       <span class="starR1 on">1.5</span>
       <span class="starR2 on">2</span>
       <span class="starR1 on">2.5</span>
       <span class="starR2 on">3</span>
       <span class="starR1 on">3.5</span>
       <span class="starR2 on">4</span>
       <span class="starR1 on">4.5</span>
       <span class="starR2 on">5</span>
     </div>
   <?php }else{ ?>
     <div class="starRev" id="ffff" style="pointer-events: none;"  >
       <span class="starR1">0.5</span>
       <span class="starR2">1</span>
       <span class="starR1">1.5</span>
       <span class="starR2">2</span>
       <span class="starR1">2.5</span>
       <span class="starR2">3</span>
       <span class="starR1">3.5</span>
       <span class="starR2">4</span>
       <span class="starR1">4.5</span>
       <span class="starR2">5</span>
     </div>
   <?php
      }//이부분은  반올림으로 전체 점수에서 별점준 횟수를 나눌때 디비에서   not null로 해놓은부분이있어서 데이터가 없을때 0이아닌 nan으로 나오는 경우가 생김 그래서 그냥 이렇게 새로 하나 만들어서 0일때로 가정함
      ?>

   </div>
  </div>



<?php } ?>
<!-- 아래는 영화가 들어가는  grid형태  div태그 마지막 -->
</div>

<script>


$(window).scroll(function() {
  //$(document).height() 전체 문서의 길이를 나타낸다.
	if ($(window).scrollTop() == ($(document).height() - $(window).height())) {



}
});
</script>

<div style=" margin-top: 18px;font-size:15px;"class="text-center">

<?php

//페이징 부분이다.
$start_page =(int)($current_page / $page_list_size)*$page_list_size;

$end_page=$start_page+$page_list_size-1;
if($total_page<$end_page)$end_page= $total_page;

//$sql1 = "select*from board where idnum";


echo "<a href='$PHP_SELF?no=0&entiretype=$entireype&type=$genre'> 맨앞 </a>";
if ($start_page >= $page_list_size) {
$prev_list=($start_page-1)*$page_movielist_count;
echo "<a href='$PHP_SELF?no=$prev_list&entiretype=$entireype&type=$genre'> 이전 </a>";

}

for($i=$start_page;$i<=$end_page;$i++){
$page=$page_movielist_count*$i;
$page_num=$i+1;
if($no != $page){

  echo "<a  href='$PHP_SELF?no=$page&entiretype=$entireype&type=$genre'>";
}
if($no == $page){//현재 페이지 인경우(현재 페이지  넘버 변수 == 페이지 리스트 수 와 같을때  현재 페이지로 간주)
 echo " <b style='font-size:25px; padding:5px;color:rgba(135, 130, 134, 0.78); '>$page_num</b> ";
}else if(($no != $page)){
  echo " <b style='font-size:25px; padding:5px; '>$page_num</b> ";
}

if($no!=$page){
echo "</a>";

}
}
if($total_page>$end_page){

$next_list =($end_page+1)*$page_movielist_count;
echo "<a href='$PHP_SELF?no=$next_list&entiretype=$entireype&type=$genre'> 다음 </a>";


}
$perfectpage=$total_page*$page_movielist_count;
echo "<a href='$PHP_SELF?no=$perfectpage&entiretype=$entireype&type=$genre'> 맨뒤 </a>";

 ?>
</div>
<!--아래는 영화 리스트  들이  들어가는 컨테이너  마지막 -->
</div>

</div>
<!--메인  화면의 중앙 부분   div태그 끝.  -->



<div id ="jb-footer" style="">
  <p>   오픈 API | 이용약관 | 개인정보취급방침 | 청소년보호정책 | 권리침해신고 | 고객센터 | E-mail수집거부정책
        <br/> Copyright ©  Corp. All rights reserved.</p>
</div>

</body>
</html>
