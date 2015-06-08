<?php

include_once ('../config/init.php');

include_once ($BASE_DIR . '/database/db_visao_geral_project.php');


if(!isset($_POST['idprojeto']) || !isset($_POST['titulo'])){
	$_SESSION['error_messages'][] = 'Houve um erro interno. Faremos o máximo para o resolver brevemente. Tente novamente mais tarde.';
	header("Location: $BASE_URL");
	exit;
}
$success=addCategoria($_POST['titulo'],$_POST['idprojeto']);
if($success===-1){
	$_SESSION['error_messages'][] = 'Houve um erro interno. Faremos o máximo para o resolver brevemente. Tente novamente mais tarde.';
	header("Location: $BASE_URL");
	exit;
	
}
else{
	$_SESSION['success_messages'][] = 'A categoria foi adicionada ao projeto com sucesso.';
	header("Location: $BASE_URL"."pages/user/visaogeralprojeto.php?idprojeto=".$_POST['idprojeto']);
	exit;
}

?>