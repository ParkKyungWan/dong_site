<?php
//"SELECT password from board where 이메일=\"".$_POST["email"]."\";"
    $s = mysqli_connect("ftp.weit.kr","pkw","Asdf1234","pkw") or die("mysql 접속 실패");
    if(mysqli_connect_errno($s)){
        echo "데이터베이스 연결 실패: ".mysqli_connect_error();
    }
    $id =$_POST["email"];
    $pwd = $_POST["pwd"];
    $result = mysqli_query($s,"SELECT password from board where email='".$_POST["email"]."';");
    if(mysqli_fetch_array($result)['password'] == null){
        $result = mysqli_query($s,"insert into board values('".$id."','".$pwd."','O3O')");
        header('Location: ./register_success.html');
    }else{
        header('Location: ./reregister.html');
    }
?>