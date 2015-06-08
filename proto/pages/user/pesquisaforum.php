<?php

include_once('../../config/init.php');

include_once($BASE_DIR.'/database/db_forum.php');
include_once($BASE_DIR.'/database/db_project.php');

//meter código para confirmar que tem os gets direitos

//Verificar que user tem acesso
$hasAccess=false;
$users=fetchAssociatedUsers($_GET['idprojeto']);

foreach($users as $user){
	if($user['iduser']==$_SESSION['user_id']){
		$hasAccess=true;
	}
}
if(!$hasAccess){
	$_SESSION['error_messages'][] = 'Não tem acesso a este fórum';
	header("Location: $BASE_URL");
	exit;
}
$projInfo=fetchProjectInfo($_GET['idprojeto']);


$topicos = getAnswersFTS($_GET['texto']);

$smarty->assign('idproj',$_GET['idprojeto']);
$smarty->assign('topicos',$topicos);

$smarty->display('user/pesquisaforum.tpl');
