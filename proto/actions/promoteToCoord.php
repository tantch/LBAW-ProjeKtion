 
<?php
include_once('../config/init.php');
include_once($BASE_DIR .'database/db_visao_geral_project.php');
include_once($BASE_DIR .'database/db_project.php');

if (!$_SESSION['user_id']) {
	$_SESSION['error_messages'][] = 'Faça login para promover um colaborador a coordenador.';
	header("Location: $BASE_URL");
	exit;
}

if(!isset($_POST['idproj']) || !isset($_POST['iduser'])){
	$_SESSION['error_messages'][] = "Ocorreu um erro interno no nosso sistema. Tente novamente mais tarde.";
	header("Location: $BASE_URL");
	exit;
}

$projetoid = $_POST['idproj'];
$role = getRoleOnProj($projetoid,$_SESSION['user_id']);
if($role == "Colaborador"){
	$_SESSION['error_messages'][] = 'Não tem permissões suficientes para esta ação no âmbito do projeto.';
	header("Location: $BASE_URL");
	exit;
}

$success=promoteColaborator($_POST['iduser'],$_POST['idproj']);

if($success===-1){
	$_SESSION['error_messages'][] = "Ocorreu um erro interno no nosso sistema. Tente novamente mais tarde.";
	header("Location: $BASE_URL"."pages/user/visaogeralprojeto.php?idprojeto=".$_POST['idproj']);
	exit;
}

//
$_SESSION['success_messages'][] = 'Coordenador adicionado com sucesso.';
header("Location: $BASE_URL"."pages/user/visaogeralprojeto.php?idprojeto=".$_POST['idproj']);
?>
