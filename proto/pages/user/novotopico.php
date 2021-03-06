<?php

include_once('../../config/init.php');

include_once($BASE_DIR.'/database/db_forum.php');
include_once($BASE_DIR.'/database/db_project.php');

$hasAccess=false;

$users=fetchAssociatedUsers($_GET['idprojeto']);
$projInfo=fetchProjectInfo($_GET['idprojeto']);

foreach($users as $user){
	if($user['iduser']==$_SESSION['user_id']){
		$hasAccess=true;
	}
}


if(!$hasAccess){
	$_SESSION['error_messages'][] = 'Não pode criar um tópico se não pertence a este projeto.';
	header("Location: $BASE_URL");
	exit;
}

$smarty->assign('nomeproj', $projInfo['nomeproj']);
$smarty->assign('idproj', $projInfo['idprojeto']);
$smarty->display('user/novotopico.tpl');

?>
