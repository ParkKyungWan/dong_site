<!DOCTYPE html>
<!-- 게시판 작성하는 곳의 html-->
<?php require("header.html"); ?>
<div class="col-lg-9"  >
      <div class="container-fluid " style="border-radius:0px;border: 1px solid #dee3eb; background-color:white;opacity:1;height:100vh;">
      <h4 style="font-family:tenbytenB;">게시글 작성하기</h4>
      <form method="POST" class="form-horizontal" action="board_.php">
                <label>제목:</label>
                <input type="title" class="form-control" placeholder="제목을 적어주세요"  name="title"maxlength="30" required>
                <br>
                <textarea style="height:30vh;"type="contents" class="form-control" placeholder="내용" name="contents"maxlength="2000" required></textarea>
                <br>
                <button type="submit" class="btn btn-default" style="marign-top:2px;float:right;">작성완료</button>
        </form>
      </div>
</div>
<div class ="col-lg-3">
      <?php require("loginpop.php"); ?>
      
</div>
<?php require("footer.html"); ?>
