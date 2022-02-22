<?php
  $host = 'localhost';
  $user = 'root';
  $pw = '111111';
  $dbName = 'web';

  $mysqli = new mysqli($host, $user, $pw, $dbName);
  $sql = "
    INSERT INTO choose
      (speed, acceleration, handling, friction, weight)
    VALUES(
      '{$_POST['speed']}';
      '{$_POST['acceleration']}';
      '{$_POST['handling']}';
      '{$_POST['friction']}';
      '{$_POST['weight']}';
    )";
    header("Location: chosen_character.php")
    if($db) {
      echo '[연결실패] : '.mysql_error().'';
    } else {
      echo '[접수]';
    }

?>
