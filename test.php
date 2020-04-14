<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>chat</title>
    <style>
      .chat_log{ width: 95%; height: 200px; }
      .name{ width: 10%; }
      .message{ width: 70%; }
      .chat{ width: 10%; }
    </style>

  </head>
  <body>
    <div>
      <textarea id="chatLog" class="chat_log" readonly></textarea>
    </div>
    <form id="chat">
      <input id="name" class="name" type="text" readonly >
      <input id="message" class="message" type="text">
      <input type="submit" class="chat" value="chat"/>
    </form>
    <div id="box" class="box">

  <!--현재  프록시 로  경로를  바꿔놓은 것이 문제인것같다.  -->
  <script src="http://<?php echo $_SERVER['SERVER_ADDR']; ?>:8080/socket.io/socket.io.js"></script>
  <!--위에는 현재  연결된 네트워크 주소를 php구문으로 찾아서 소켓아이오와 함께 주소를 주어서 외부 접속시에도 사용이 가능하도록 하였다,  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--제이쿼리 선언됨.  -->
  <script>
    var socket =io.connect('http://<?php echo $_SERVER['SERVER_ADDR']; ?>:8080/chat');
     //현재 소켓이 위 아이피와 연결된 8080포트로 연결됨
    // socket.on('서버에서 받을 이벤트명', function(데이터) {
      // 받은 데이터 처리
      //socket.emit('서버로 보낼 이벤트명', 데이터);
      //});

     // echo $_SERVER['SERVER_ADDR'];  위에 사용된  이 php구문은  현재  로컬 아이피를  받아오는 부분이다.
     //계속해서 주변 네트워크환경에 따라 로컬아이피가 바뀌기 때문에
      $('#chat').on('submit', function(e){
        socket.emit('send message', $('#name').val(), $('#message').val());
        $('#message').val("");
        $("#message").focus();
        e.preventDefault();

      });//나의 메세지를 서버로 보내는 부분
      socket.on('receive message', function(msg){
        $('#chatLog').append(msg+"\n");
        $('#chatLog').scrollTop($('#chatLog')[0].scrollHeight);
      });//서버로부터 메세지를 받는 부분
      socket.on('change name', function(name){
        $('#name').val(name);
      });//ㅅ서버로부터  이름을 받는 부분

  </script>
  </body>
</html>
