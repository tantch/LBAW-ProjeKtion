<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/db_visao_geral_project.php');
include_once($BASE_DIR .'database/db_project.php');

if(!$_SESSION['user_id']){
  $_SESSION['error_messages'][] = 'Crie uma conta.';
  header("Location: $BASE_URL");
  exit;
}
else{
  $idprojeto=$_GET['idprojeto']; 
  $projInfo = fetchProjectInfo($idprojeto); 
  $projName=$projInfo['nomeproj'];

  $categories=fetchAssociatedCategories($idprojeto); 
  $allChores= allChores($idprojeto);
  $allAssignedToChore=usersAsigned($idprojeto);
  
  $smarty->assign('assignements', $allAssignedToChore);
  $smarty->assign('categories', $categories);
  $smarty->assign('projName', $projName);
  $smarty->assign('chores', $allChores);
  $smarty->display('user/visaogeralprojeto.tpl');
}
?>