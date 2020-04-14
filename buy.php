
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
    <script type="text/javascript" src="https://cdn.iamport.kr/js/iamport.payment-1.1.5.js"></script>
    <title></title>
    <script type="text/javascript">
    <?php
     session_start();
    $mysql_host ='localhost';
    $mysql_user ='root';
    $mysql_password = 'sssddd456852';
    $mysql_db = 'testdb';
    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
    $id=$_SESSION[id];
     $sqlmovie = "select*from test3 where id='$id'";
     $Resultmovie = mysqli_query($conn,$sqlmovie);
     $rowspay = mysqli_fetch_array($Resultmovie);

    ?>
    var my_price = "<?php echo $_POST[price]; ?>";
    var mentforprice;

    if(my_price==100){
       mentforprice="영화사이트 1달이용권";
    }else{
      mentforprice="영화사이트 1년 이용권"
    }
    IMP.init('imp20803594');
    var IMP = window.IMP;
    IMP.request_pay({
        pg : 'inicis', // version 1.1.0부터 지원.
        pay_method : 'card',
        merchant_uid : 'merchant_' + new Date().getTime(),
        name : mentforprice,
        amount : my_price,
        buyer_email : 'iamport@siot.do',
        buyer_name : '구매자이름',
        buyer_tel : '010-1234-5678',
        buyer_addr : '서울특별시 강남구 삼성동',
        buyer_postcode : '123-456',
        m_redirect_url : 'http://172.30.1.39/website2/buyuseticket.php'
    }, function(rsp) {

        if ( rsp.success ) {

            var msg = '결제가 완료되었습니다.';

            <?php
               $price= $_POST[price];
            if($price==100){
              $coin=1;

             $sqlupdate1="UPDATE test3 SET coin ='$coin',usedate = UNIX_TIMESTAMP()+86400*31 where id ='$id'";
             mysqli_query($conn,$sqlupdate1);
             // $sql = "select count(*) from test3 where id='$id'";
                mysqli_close($conn);
           }else{

               $coin=2;

              $sqlupdate1="UPDATE test3 SET coin ='$coin',usedate = UNIX_TIMESTAMP()+86400*31*12 where id ='$id'";
              mysqli_query($conn,$sqlupdate1);
              // $sql = "select count(*) from test3 where id='$id'";
                 mysqli_close($conn);

               }
              ?>


            location.href="mainpage.php"
        } else {
            var msg = '결제에 실패하였습니다.';
            //msg += '에러내용 : ' + rsp.error_msg;
            location.href="buyuseticket.php"
        }
        alert(msg);
    });
    </script>
  </head>
  <body>

  </body>
</html>
