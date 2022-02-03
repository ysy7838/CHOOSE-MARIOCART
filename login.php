<!doctype html>
<?php session_start(); ?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>mariocart8 login</title>
  </head>
  <body>
    <?php
    if(!isset($_SESSION['id'])){ ?>
      <form action="login_accept.php" method="POST">
      <p>
        ID : <input type="text" name="id" placeholder="아이디를 입력하세요"/></p>
      <p>
        PASSWORD : <input type="password" name="pw" placeholder="비밀번호를 입력하세요"/></p>
      <p>
        <input type="submit" value="로그인"/></p>
    </form>
    <?php
    }else{
      $id=$_SESSION['id'];
      echo "<a href=\"main.php\">메인페이지</a> ";
      echo "<a href=\"logout.php\">로그아웃</a></p>";
    } ?>
  </body>
</html>
