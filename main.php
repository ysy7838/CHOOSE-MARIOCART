<!doctype html>
<?php session_start(); ?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>메인 페이지</title>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Carter+One&display=swap');

        body
        {
          text-align: center;                  /*텍스트 배열 */
          background-image:url('mario.jpeg');
          background-repeat: no-repeat;        /*화면에 그림 반복 출력 금지*/
          background-size: cover;              /*이미지가 웹페이지 화면을 모두 덮도록 설정*/
        }
        a{
          position: fixed;                     /*위치 - 웹브라우저 화면 전체를 기준으로 배 (스크롤 해도 위치 고정)*/
          background:white;                    /*버튼의 배경 색상*/
          font-size:2em;
          font-weight:bold;                    /*폰트 두께 두껍게*/
          border-top-right-radius: 5px;        /*모든 방향 꼭짓점 둥글게*/
          border-bottom-right-radius: 5px;
          border-top-left-radius: 5px;
          border-bottom-left-radius: 5px;
          padding: 10px;                       /*버튼 내부에서의 테두리 두께*/
          bottom: 200px;                       /*밑에서의 높이*/
          right: 650px;                        /*오른쪽에서의 위치*/
          font-family: 'Carter One', cursive;
          text-decoration: none;
        }
        a:hover{
          background-color:yellow;             /*마우스를 올렸을 때 버튼의 배경 색상*/
          font-family: 'Carter One', cursive;
        }
    </style>
  </head>
  <body>

    <?php
    if(!isset($_SESSION['id'])){
      echo "<a href=\"login.php\">Let's Go!</a>";
    } else {
      $id=$_SESSION['id'];
      echo "<script>alert('이미 로그인되었습니다.');</script>";
      echo "<a href=\"logout.php\">Logout</a>";
    }
    ?>
  </body>
</html>
