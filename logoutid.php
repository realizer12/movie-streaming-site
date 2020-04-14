<?php

$duration=0;//30일

session_start();

//쿠키에  연결되어있는 변수들을 모두 지
session_unset();

//세션을 이용하면  쿠키에 아이디값이 저장되어있는데
//로그아웃할떄 이것을 안지워주면 세션 쿠키  유효기간을  30일로 늘린  로그인 상태 유지 경우에는
// 로그아웃을 해도 쿠키가 남아있어 로그인상태 유지 하지 않음으로 로그인을 해도 이전 쿠키가 적용되
//웹브라우저가 다 꺼져도 계속 로그인 상태가 유지됨 그러므로 아래와 같이 쿠키를 파괴함.
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
    //지정했던  한달뒤 쿠키시간을 다시  돌려놓는것이다.
}

session_destroy();

 ?>
 <!--로그아웃을 한뒤 로그아웃 알림 알럴트가 뜬후  메인페이지로 다시  리프레쉬 된다.  -->
 <script type="text/javascript">
   alert("로그아웃 됩니다.\n다음에 또 만나요!")
 </script>
 <meta http-equiv='refresh' content='0;url=mainpage.php'>
