<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/db_visao_pessoal.php');

if(!$_SESSION['user_id']){
 $_SESSION['error_messages'][] = 'Not allowed!';
 header("Location: $BASE_URL");
 exit;
}
else{
 $projects = getUserProjects($_SESSION['user_id']);
 $chores=getChores($_SESSION['user_id']);
 $smarty->assign('projects', $projects);
 $smarty->assign('chores', $chores);
 $smarty->display('user/visaopessoal.tpl');
}
?>
