<?php
  session_set_cookie_params(3600, '/~ei12037'); //FIXME
  session_start();

  error_reporting(E_ERROR | E_WARNING); // E_NOTICE by default
  @ini_set('display_errors', 'on');
  define('_PS_DEBUG_SQL_', true);

  $BASE_DIR = '/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/';
  $BASE_URL = '/~ei12037/LBAW/proto/';

  $conn = new PDO('pgsql:host=vdbm;dbname=lbaw1415', 'lbaw1415', 'developes'); //FIXME
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $conn->exec('SET SCHEMA \'public\''); //FIXME

  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
  include_once($BASE_DIR . 'database/db_util.php');

  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);

  $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);
  $smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
  $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
  $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
  $smarty->assign('USERNAME', $_SESSION['username']);
  $smarty->assign('USERID',$_SESSION['user_id']);
  $smarty->assign('USERPIC',fetchProfilePic($_SESSION['user_id']));

  unset($_SESSION['success_messages']);
  unset($_SESSION['error_messages']);
  unset($_SESSION['field_errors']);
  unset($_SESSION['form_values']);
  
?>
