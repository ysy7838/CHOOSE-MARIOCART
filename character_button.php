<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>캐릭터 특성 고르기</title>
    <style>

    @import url('https://fonts.googleapis.com/css2?family=Jua&display=swap');  /*웹폰트 링크 불러오기*/

      body
      {
        background-color: rgb(200, 220, 250);   /*색상 값의 표현 - 10진수*/
        font-family: 'Jua', sans-serif;         /*font-family로 폰트 적용*/
      }
      h1 {
        text-align: center;   /*제목 중앙 배열*/
        padding : 20px;
      }
      h3 {
        border-top: 2px solid grey; padding-top: 30px;     /*제목과 부제목이 구별되도록 회색 선을 그어 주었다.*/
      }

      table {
        border-spacing: 20px;      /*표 성분들 사이의 공간*/
      }
      .button {
        text-align: center;                     /*텍스트 가운데 배열 */
        font-family: 'Jua', sans-serif;
      }
      </style>
    </head>
    <body>
  <script>
    function changecolor(n){
      var i;
      var j;
      for (var i = 1; i <= j; i++) {
        var x = document.getElementById("button" + i);
      }
        var x = document.getElementById("button" + n); if (x.style.color = "black") {
          x.style.color = "#660099"; }
      }
      function send(){
        var button = document.getElementsByClassName("button");
        if (button[i].style.color == '#660099') {
          var j = i + 1;
          if (1 <= j && j <= 4) {
            document.getElementById('speed').value = button[i].value;
          } else if (5 <= j && j <= 8) {
            document.getElementById('acceleration').value = button[i].value;
          } else if (9 <= j && j <= 12) {
            document.getElementById('handling').value = button[i].value;
          } else if (13 <= j && j <= 16) {
            document.getElementById('friction').value = button[i].value;
          } else if (17 <= j && j <= 20){
            document.getElementById('weight').value = button[i].value;
          }
        }
      }
  </script>
  <h1>캐릭터를 골라보자 !</h1>
  <h3>원하는 캐릭터의 특성을 골라볼까?</h3>
  <form action="chosen_character.php" method="post">
    <table>
      <tr>
        <td>speed (속도)<br></td>
        <td>
          <input class = "button" id = "button1" type = "button" name = "speed" value = "3.00 미만" onclick = "changecolor(1)">
          <input class = "button" id = "button2" type = "button" name = "speed" value = "3.00 이상" onclick = "changecolor(2)">
          <input class = "button" id = "button3" type = "button" name = "speed" value = "3.00 이상 4.00 미만" onclick = "changecolor(3)">
          <input class = "button" id = "button4" type = "button" name = "speed" value = "4.00 이상" onclick = "changecolor(4)">
        </td>
      </tr>
      <tr>
        <td>acceleration (가속도)<br></td>
        <td>
          <input class = "button" id = "button5" type = "button" name = "acceleration" value = "3.00 미만" onclick = "changecolor(5)">
          <input class = "button" id = "button6" type = "button" name = "acceleration" value = "3.00 이상" onclick = "changecolor(6)">
          <input class = "button" id = "button7" type = "button" name = "acceleration" value = "3.00 이상 4.00 미만" onclick = "changecolor(7)">
          <input class = "button" id = "button8" type = "button" name = "acceleration" value = "4.00 이상" onclick = "changecolor(8)">
        </td>
      </tr>
      <tr>
        <td>handling (지상 핸들링)<br></td>
        <td>
          <input class = "button" id = "button9" type = "button" name = "handling" value = "3.00 미만" onclick = "changecolor(9)">
          <input class = "button" id = "button10" type = "button" name = "handling" value = "3.00 이상" onclick = "changecolor(10)">
          <input class = "button" id = "button11" type = "button" name = "handling" value = "3.00 이상 4.00 미만" onclick = "changecolor(11)">
          <input class = "button" id = "button12" type = "button" name = "handling" value = "4.00 이상" onclick = "changecolor(12)">
        </td>
      </tr>
      <tr>
        <td>friction (마찰력)<br></td>
        <td>
          <input class = "button" id = "button13" type = "button" name = "friction" value = "3.00 미만" onclick = "changecolor(13)">
          <input class = "button" id = "button14" type = "button" name = "friction" value = "3.00 이상" onclick = "changecolor(14)">
          <input class = "button" id = "button15" type = "button" name = "friction" value = "3.00 이상 4.00 미만" onclick = "changecolor(15)">
          <input class = "button" id = "button16" type = "button" name = "friction" value = "4.00 이상" onclick = "changecolor(16)">
        </td>
      </tr>
      <tr>
        <td>weight (무게)<br></td>
        <td>
          <input class = "button" id = "button17" type = "button" name = "weight" value = "3.00 미만" onclick = "changecolor(17)">
          <input class = "button" id = "button18" type = "button" name = "weight" value = "3.00 이상" onclick = "changecolor(18)">
          <input class = "button" id = "button19" type = "button" name = "weight" value = "3.00 이상 4.00 미만" onclick = "changecolor(19)">
          <input class = "button" id = "button20" type = "button" name = "weight" value = "4.00 이상" onclick = "changecolor(20)">
        </td>
      </tr>
    </table>
  </form>
    <button id = "submit_button" input type = "submit" onclick = 'alert("접수 완료!")';>제출</button>
      <form action = "button_mysql.php" method = "POST">
        <input type = "hidden" id = "speed" name = "speed">
        <input type = "hidden" id = "acceleration" name = "acceleration">
        <input type = "hidden" id = "handling" name = "handling">
        <input type = "hidden" id = "friction" name = "friction">
        <input type = "hidden" id = "weight" name = "weight">
    </form>
  </body>
</html>
