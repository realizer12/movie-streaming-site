<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--바로 아래 링크 부분은 스타일시트로  내가 만들어놓은  css파일임.  -->
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--아래 링크는  구글 api중 배달의 민족의 한나체를 받아옴.  -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/hanna.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>광고</title>
<style media="screen">
#ad{

    display:inline-block;
    text-align:center;
    vertical-align:middle;
    text-decoration:none;
    font-size:19px;
    color:#000;
    background-color: rgb(218, 214, 213);
    border-top:2px solid #000;
    width:185px;
    height:40px;
    line-height:38px;
  }
</style>
<script type="text/javascript">
function setCookie(c_name,value,exdays)//쿠키를 등록하는 함수이다.

{

	var exdate=new Date();

	exdate.setDate(exdate.getDate() + exdays);

	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());

	document.cookie=c_name + "=" + c_value;

}

  function cookiead() {
    var test1 = document.getElementById('checkbox');
    if(test1.checked){
     setCookie("ad","ad",1);
    }else{

    }
window.close();
  }
</script>
  </head>
  <body style="background-color:black;">

  <img src="webimage/movueadpop.jpg" style="width:100%; height:400px;" alt="">
  <input type="checkbox" id="checkbox"name=""style="width:20px;height:18px; margin-left:93px; margin-top:10px;" value=""> <label for="checkbox" style="font-size:18px;color:white; margin-left:5px;">오늘 하루동안 안보기</label></br>
  <a id="ad" onclick="return cookiead();"style="cursor:pointer font-size:20px;margin-left:105px;margin-top:5px;">닫기</a>
  </body>
</html>
