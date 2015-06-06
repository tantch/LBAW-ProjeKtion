<?php

include_once('../../config/init.php');

include_once($BASE_DIR.'/database/db_forum.php');
include_once($BASE_DIR.'/database/db_project.php');

$hasAccess=false;

if(!(isset($_GET['idprojeto'])) || !(isset($_GET['idtopico']))){
	$_SESSION['error_messages'][] = 'Not allowed.';
	header("Location: $BASE_URL");
	exit;
}
$users=fetchAssociatedUsers($_GET['idprojeto']);
$projInfo=fetchProjectInfo($_GET['idprojeto']);
$answers=getAnswers($_GET['idtopico']);
$topicInfo=getTopicInfo($_GET['idtopico']);
if($projInfo==-1 || $users==-1){
	$_SESSION['error_messages'][] = 'Houve um erro interno. Os nossos engenheiros serão informados e resolverão a situação. Tente novamente mais tarde.';
	header("Location: $BASE_URL");
	exit;
}
else if($projInfo==false){
	$_SESSION['error_messages'][] = 'O projeto a que tentou aceder não existe';
	header("Location: $BASE_URL");
	exit;
}

foreach($users as $user){
	if($user['iduser']==$_SESSION['user_id']){
		$hasAccess=true;
	}
}

if(!$hasAccess){
	$_SESSION['error_messages'][] = 'Not allowed.';
	header("Location: $BASE_URL");
	exit;
}

$smarty->assign('nomeproj', $projInfo['nomeproj']);
$smarty->assign('idproj', $projInfo['idprojeto']);
$smarty->assign('topicInfo', $topicInfo);
$smarty->assign('respostas',$answers);
$smarty->display('user/topico.tpl');

?>
