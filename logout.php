<?php
session_start();
$res=session_destroy();
if($res){
	header('Location: ./index.php');
}else{
    echo "로그아웃 실패";
}

?>