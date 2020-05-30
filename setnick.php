<?php
//"SELECT password from board where 이메일=\"".$_POST["email"]."\";"
    $s = mysqli_connect("ftp.weit.kr","pkw","Asdf1234","pkw") or die("mysql 접속 실패");
    if(mysqli_connect_errno($s)){
        echo "데이터베이스 연결 실패: ".mysqli_connect_error();
    }
    session_start();
    $email =$_SESSION['user_email'];
    $nick = $_POST["nick"];
    $result = mysqli_query($s,"update board set nick = '".$nick."' where email = '".$email."'");
    $_SESSION['user_nick'] =$nick;
    header('Location: ./index.php');
?>