<?php
  include_once('../../config/init.php');
  if (!$_SESSION['user_id']) {
    $_SESSION['error_messages'][] = 'Precisa de ter conta para criar um projeto';
    header("Location: $BASE_URL");
    exit;
  }
  $smarty->display('user/novoprojeto.tpl');
?>
