<?php
include_once('../config/init.php');
include_once($BASE_DIR .'database/db_project.php');
include_once($BASE_DIR .'database/db_forum.php');

if (!$_SESSION['user_id']) {
  $_SESSION['error_messages'][] = 'Not allowed!';
  header("Location: $BASE_URL");
  exit;
}

if (!$_POST['name'] || !$_POST['description']) {
  $_SESSION['error_messages'][] = 'Complete todos os campos.';
  header("Location: $BASE_URL/pages/user/novotopico.php");
  exit;
}

$idtopico=createTopic($_POST['idproj'],$_POST['name'] ,$_POST['description'],$_POST['idcriador']);

if($idtopico==-1){
  
 $_SESSION['error_messages'][] = 'Houve um erro interno. Os nossos engenheiros serão informados e resolverão a situação. Tente novalemnte mais tarde';
  header("Location: $BASE_URL");
  exit;
}

$_SESSION['success_messages'][] = 'Topic successfully created';
header("Location: $BASE_URL/pages/user/topico.php?idprojeto=".$_POST['idproj']."&idtopico=".$idtopico);

?>
