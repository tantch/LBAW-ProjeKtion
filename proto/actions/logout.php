<?php
  include_once('../../config/init.php');

  session_destroy();
  $_SESSION = array();
  header('Location: ../');
?>
