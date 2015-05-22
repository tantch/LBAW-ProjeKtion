<?php
  include_once('../../config/init.php');
  if (!$_SESSION['user_id']) {
    $_SESSION['error_messages'][] = 'Not allowed!';
    header("Location: $BASE_URL");
    exit;
  }
  $smarty->display('user/novoprojeto.tpl');
?>
