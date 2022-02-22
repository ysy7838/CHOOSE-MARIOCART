<!doctype html>
<?php
 ?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>맞춤형 캐릭터 발표</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jua&display=swap');
        h1 {
          margin: 100px;
          font-size: 200%;
        }
        body {
          text-align: center;                     /*텍스트 배열 */
          background-color: #fff7dc;
          font-family: 'Jua', sans-serif;         /*font-family로 폰트 적용*/
        }
        .everybody{
          position: static;                   /*위치 - 웹브라우저 화면 전체를 기준으로 배치 (스크롤 해도 위치 고정)*/
          padding: 10px;                       /*버튼 내부에서의 테두리 두께*/
          bottom: 200px;             /*밑에서의 높이*/
        }
    </style>
  </head>
  <body>
    <h1>당신의 맞춤 캐릭터</h1>
    <h3>분석 결과, 당신의 맞춤 캐릭터는 바로<br>
      @@@ 입니다 🎉🎉🎉<h3>
    <img src="단체사진.png" class="everybody" width="600" height="350"/></img>
    <?php

    ?>
  </body>
</html>
