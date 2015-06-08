<?php

include_once ('../config/init.php');
include_once ($BASE_DIR . '/database/db_util.php');
include_once ($BASE_DIR . '/database/db_visao_geral_project.php');

$userInfo=getUserSessByUName($_POST['usersearch']);

if($userInfo===-1 || !isset($_POST['idprojeto'])){
	$_SESSION['error_messages'][] = 'Houve um erro interno. Faremos o máximo para o resolver brevemente. Tente novamente mais tarde.';
	header("Location: $BASE_URL");
	exit;
}

$success=addColaborador($userInfo['iduser'],$_POST['idprojeto']);

if($success===-1){
	$_SESSION['error_messages'][] = 'Houve um erro interno. Faremos o máximo para o resolver brevemente. Tente novamente mais tarde.';
	header("Location: $BASE_URL");
	exit;
	
}
else{
	$_SESSION['success_messages'][] = 'O utilizador foi adicionado ao projeto como colaborador.';
	header("Location: $BASE_URL"."pages/user/visaogeralprojeto.php?idprojeto=".$_POST['idprojeto']);
	exit;
}

?>