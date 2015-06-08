<?php

include_once ('../config/init.php');

include_once ($BASE_DIR . '/database/db_visao_geral_project.php');


if(!isset($_POST['idcategoria']) || !isset($_POST['idcriador']) || !isset($_POST['nometarefa']) || !isset($_POST['dfinal']) || !isset($_POST['estado']) || !isset($_POST['tipo']) || !isset($_POST['idaceitepor'])){
	$_SESSION['error_messages'][] = 'Houve um erro internordsctgfvcTGFVx. Faremos o máximo para o resolver brevemente. Tente novamente mais tarde.';
	header("Location: $BASE_URL");
	exit;
}

$success=addTarefa($_POST['idcategoria'],$_POST['idcriador'],$_POST['nometarefa'],$_POST['dfinal'],$_POST['estado'],$_POST['tipo'],$_POST['idaceitepor'],$_POST['descricaotarefa']);

if($success===-1){
	
	$_SESSION['error_messages'][] = 'Houve um erro interno. Faremos o máximo para o resolver brevemente. Tente novamente mais tarde.';
	
	header("Location: $BASE_URL");
	exit;
	
}
else{
	$_SESSION['success_messages'][] = 'A tarefa foi adicionada à categoria com sucesso.';
	header("Location: $BASE_URL"."pages/user/visaogeralprojeto.php?idprojeto=".$_POST['idprojeto']);
	exit;
}

?>