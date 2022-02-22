<?php
  include "button_mysql.php"

      if($result===false){
        echo '저장하는 과정에서 문제가 발생하였습니다.';
        error_log(mysqli_effor($conn));
      }
      else{
        echo '저장에 성공했습니다.';
      }
    }

?>
