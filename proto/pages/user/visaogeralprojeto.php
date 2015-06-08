<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/db_visao_geral_project.php');
include_once($BASE_DIR .'database/db_project.php');


$hasAccess=false;

$users=fetchAssociatedUsers($_GET['idprojeto']);
if(!$_SESSION['user_id']){
	$_SESSION['error_messages'][] = 'Crie uma conta.';
	header("Location: $BASE_URL");
	exit;
}
else{

	if(!isset($_GET['idprojeto'])){
		$_SESSION['error_messages'][] = 'Inseriu um url para um projeto inválido.';
		header("Location: $BASE_URL");
		exit;
	}
	
	
	foreach($users as $user){
		if($user['iduser']==$_SESSION['user_id']){
			$hasAccess=true;
		}
	}
	
	
	if(!$hasAccess){
		$_SESSION['error_messages'][] = 'Nao tem acesso a este projeto';
		header("Location: $BASE_URL");
		exit;
	}

	$idprojeto=$_GET['idprojeto']; 

	$userRole=getRoleOnProj($idprojeto,$_SESSION['user_id']);

	$projInfo = fetchProjectInfo($idprojeto); 
	$projName=$projInfo['nomeproj'];

	$categories=fetchAssociatedCategories($idprojeto); 
	$allChores= allChores($idprojeto);
	$allAssignedToChore=usersAsigned($idprojeto);
	$allRoles=usersRoles($idprojeto);


	$smarty->assign('idproj', $idprojeto);
	$smarty->assign('assignements', $allAssignedToChore);
	$smarty->assign('categories', $categories);
	$smarty->assign('projName', $projName);
	$smarty->assign('chores', $allChores);
	$smarty->assign('role', $userRole);
	$smarty->assign('allroles', $allRoles);
	$smarty->display('user/visaogeralprojeto.tpl');
}
?>