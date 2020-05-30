<?php
//"SELECT password from board where 이메일=\"".$_POST["email"]."\";"
    $s = mysqli_connect("ftp.weit.kr","pkw","Asdf1234","pkw") or die("mysql 접속 실패");
    if(mysqli_connect_errno($s)){
        echo "데이터베이스 연결 실패: ".mysqli_connect_error();
    }
    if(isset($_SESSION['user_email'])) {
        header('Location: ./login.html');
        exit;
    }
    $id =$_POST["email"];
    $pwd = $_POST["pwd"];
    $result = mysqli_query($s,"SELECT password from board where email='".$_POST["email"]."';");

    if(mysqli_fetch_array($result)['password'] == $pwd){
        $nick = mysqli_query($s,"SELECT nick from board where email='".$_POST["email"]."';");

        session_start();
        $_SESSION['user_email'] = $id;
        $_SESSION['user_nick'] = "".mysqli_fetch_array($nick)['nick'];
        if(isset($_SESSION['user_email'])){
            header('Location: ./index.php');
        }else{
            echo "세션 저장 실패";
        }
    }else{
        header('Location: ./relogin.html');
    }
?>