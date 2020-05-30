<!DOCTYPE html>
<?php require("header.html"); ?>
<div class="col-lg-9"  >
      <div class="container-fluid " style="border-radius:0px;border: 1px solid #dee3eb; background-color:white;opacity:1;height:100vh;">
      
      </div>
</div>
<div class ="col-lg-3">

      <div class="container-fluid" style="border-radius:0px;border: 1px solid #dee3eb;background-color:white;opacity:1;"data-spy="affix" data-offset-top="205">
      
      
      <h4 style="font-family:tenbytenB;">로그인 정보</h4>
      
      <?php
          session_start();
          $content = $_SESSION['user_email'];
          $nick = $_SESSION['user_nick'];
          echo "
          <p style=' font-family: tenbyten;'>
          닉네임: ".$nick."</p>
          <p style=' font-family: tenbyten;'>
          메일: ".$content."</p>"
          ."
          <div class='btn-group' style='float:right;'>
          <button onclick=\"location.href='/setnick.html'\" class='btn btn-default' style='margin-bottom: 10px;'>계정설정</button>
          <button onclick=\"location.href='/logout.php'\" class='btn btn-danger' style='margin-bottom: 10px;'>로그아웃</button></div>";
        ?>
 
      <!--<h4 style="font-family:tenbytenB;margin-top:40px;">결석</h4>
      <pre style="background-color:rgb(243, 232, 222);font-family: tenbyten; "><dl><dt>::</dt><dd>결석없음</dd></dl></pre>
          -->
  
  
    </div><!--로그인정보-->
</div>
<?php require("footer.html"); ?>
