<!DOCTYPE html>
<!-- 자유게시판의 html-->
<?php require("header.html"); ?>
<div class="col-lg-9"  >
      <div class="container-fluid " style="border-radius:0px;border: 1px solid #dee3eb; background-color:white;opacity:1;min-height:100vh; ">
            <h4 style="font-family:tenbytenB">자유 게시판</h4>
            <button onclick="location.href='/board.php'"  class='btn btn-basic' style='margin-bottom: 10px;float:right'><span class="glyphicon glyphicon-name"></span>작성하기</button>
            <div class="container" style="width:100%">
                  
                  <table class="table">
                        <thead>
                              <tr>
                              <th>작성자</th>
                              <th>제목</th>
                              <th>작성 시간</th>
                              </tr>
                        </thead>

                        <tbody>
                              <?php 

                              $s = mysqli_connect("ftp.weit.kr","pkw","123456","pkw") or die("mysql 접속 실패");
                              if(mysqli_connect_errno($s)){
                                    echo "데이터베이스 연결 실패: ".mysqli_connect_error();
                              }

                              $page = $_GET['page'];
                              if($page == null){
                                    $page = 1;
                              }
                              $count = 0;
                              $result = mysqli_query($s,"SELECT * FROM freeboard WHERE type='free' order by number desc");
                              while($loop = mysqli_fetch_array($result)){
                                    $count +=1;
                                    if($count > ($page-1)*15 && $count<=$page*15){
                                          echo "<tr>";
                                          echo "<td>".$loop['name']."</td>";
                                          echo "<td>".$loop['title']."</td>";
                                          echo "<td>".$loop['date']."</td>";
                                          echo "</tr>";
                                    }
                              }

                              ?>
                        </tbody>
                  </table>
                  
                  <div class="btn-group"style="float:right">
                        <button class="btn btn-default" onclick="location.href='/showboard.php?page=<?php if($page!=1){echo $page-1;}else{echo 1;} ?>'" >이전</button>
                        <button class="btn btn-default" onclick="location.href='/showboard.php?page=<?php if($page<$count/15){echo $page+1;}else{echo $page;} ?>'" style="float:right">다음</button>
                  </div>

            </div>
      </div>
</div>
<div class ="col-lg-3">
      
      <?php require("loginpop.php"); ?>
      
</div>
<?php require("footer.html"); ?>
