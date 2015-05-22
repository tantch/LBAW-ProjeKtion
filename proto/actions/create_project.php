<?php
include_once('../config/init.php');
include_once($BASE_DIR .'database/db_project.php');  

  if (!$_SESSION['user_id']) {
    $_SESSION['error_messages'][] = 'Not allowed!';
    header("Location: $BASE_URL");
    exit;
  }
  
  if (!$_POST['name'] || !$_POST['fdate']) {
    $_SESSION['error_messages'][] = 'Fill nto allowed';
    header("Location: $BASE_URL/pages/user/novoprojeto.php");
    exit;
  }
  $userid = $_SESSION['user_id'];
  $name = $_POST['name'];
  $fdate = $_POST['fdate'];

  try {

    createProject($userid, $name,$fdate);

  } catch (PDOException $e) {

    $_SESSION['error_messages'][] = 'Error creating project: ' . $e->getMessage();

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL/pages/user/novoprojeto.php");
    exit;
  }

  $_SESSION['success_messages'][] = 'project created';  
  header("Location: $BASE_URL/pages/user/visaopessoal.php");

?>