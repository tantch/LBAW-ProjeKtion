<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/db_visao_pessoal.php');
include_once($BASE_DIR .'database/db_util.php');
if(!$_SESSION['user_id']){
	$_SESSION['error_messages'][] = 'Not allowed!';
	header("Location: $BASE_URL");
	exit;
}
else{
	if(getAdminId()==$_SESSION['user_id']){
		header("Location: ". $BASE_URL . "pages/user/admin.php");
		exit;
	}
	else{
		$projects = getUserProjects($_SESSION['user_id']);
		$chores=getChores($_SESSION['user_id']);
		$smarty->assign('projects', $projects);
		$smarty->assign('chores', $chores);
		$smarty->display('user/visaopessoal.tpl');
	}
}
?>
