<?php
include_once('../config/init.php');
include_once($BASE_DIR .'database/db_project.php');
include_once($BASE_DIR .'database/db_forum.php');

if (!$_SESSION['user_id']) {
	$_SESSION['error_messages'][] = 'Não pode responder a um tópico se não tem sessão iniciada!';
	header("Location: $BASE_URL");
	exit;
}

if (!$_POST['idprojeto'] || !$_POST['idtopico'] || !$_POST['text']) {
	$_SESSION['error_messages'][] = 'Complete todos os campos.';
	header("Location: $BASE_URL/pages/user/topico.php?idprojeto=".$_POST['idprojeto']."&idtopico=".$_POST['idtopico']);
	exit;
}

$success=createAnswer($_POST['idtopico'],$_POST['text'],$_SESSION['user_id']);

if($success===-1){ 
	$_SESSION['error_messages'][] = 'Houve um erro interno. Os nossos engenheiros serão informados e resolverão a situação. Tente novamente mais tarde';
	header("Location: $BASE_URL");
	exit;
}

$_SESSION['success_messages'][] = 'A sua resposta foi adicionada ao tópico. Obrigada pela sua contribuição.';
header("Location: $BASE_URL/pages/user/topico.php?idprojeto=".$_POST['idprojeto']."&idtopico=".$_POST['idtopico']);

?>
