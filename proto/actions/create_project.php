<?php
include_once('../config/init.php');
include_once($BASE_DIR .'database/db_project.php');

  if (!$_SESSION['user_id']) {
    $_SESSION['error_messages'][] = 'Not allowed!';
    header("Location: $BASE_URL");
    exit;
  }

  if (!$_POST['name'] || !$_POST['fdate']) {
    $_SESSION['error_messages'][] = 'Fill not allowed';
    header("Location: $BASE_URL/pages/user/novoprojeto.php");
    exit;
  }

  $userid = $_SESSION['user_id'];
  $name = $_POST['name'];
  $fdate = $_POST['fdate'];

  $result=createProject($userid, $name,$fdate);

  if($result===-1){

    $_SESSION['error_messages'][] = 'Houve um erro interno. Os nossos engenheiros serão informados e resolverão a situação. Tente novalemnte mais tarde';

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL/pages/user/novoprojeto.php");
    exit;
  }

  $_SESSION['success_messages'][] = 'Projeto criado com sucesso.';
  header("Location: $BASE_URL/pages/user/visaopessoal.php");

?>
