<?php
  include="character_button.php"
  $conn = mysqli_connect('localhost', 'root', 'danee2331', 'web');
  $sql = "
    INSERT INTO choose
    (speed, acceleration, handling, friction, weight)
    VALUES (
      $speed = '{$_POST['speed']}',
      $acceleration = '{$_POST['acceleration']}',
      $handling = '{$_POST['handling']}',
      $friction = '{$_POST['friction']}',
      $weight = '{$_POST['weight']}',
      )";

      mysqli_query("INSERT INTO choose (speed, acceleration, handling, friction, weight)
      ('". $speed ."', '". $acceleration ."', '". $handling ."', '". $friction ."', '". $weight ."')");
      header("Location: /character_button.php");
    ?>
