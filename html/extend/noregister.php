<?php
$base_filename = basename($_SERVER['PHP_SELF']);
if($base_filename == 'register.php')
  alert("개인적인 가입은 불가능합니다.", G5_URL);
?>
