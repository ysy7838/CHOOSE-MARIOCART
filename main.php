<!doctype html>
<?php session_start(); ?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>WELCOME_MARIOCART8</title>
    <style>
    </style>
  </head>
  <body>
    <h1>마리오카트8</h1>
    <?php
    if(!isset($_SESSION['id'])){
      echo "아이디와 비밀번호를 입력해주세요. <a href=\"login.php\"></a>";
    } else {
      $id=$_SESSION['id'];
      echo "이미 로그인 되었습니다.";
      echo "환영합니다.";
      echo "<a href=\"logout.php\">Logout</a>";
    }
    ?>
  </body>
</html>
