<?php
    $s = mysqli_connect("ftp.weit.kr","pkw","123456","pkw") or die("mysql 접속 실패");
    if(mysqli_connect_errno($s)){
        echo "데이터베이스 연결 실패: ".mysqli_connect_error();
    }
    session_start();
    $email = $_SESSION['user_email'];
    $id = $_SESSION['user_nick'];
    $content = $_POST['contents'];
    $title = $_POST['title'];

    mysqli_query($s,"insert into freeboard (email,name,mess,title) values('".$email."','".$id."','".$content."','".$title."')");
    header('Location: ./showboard.php');

?>