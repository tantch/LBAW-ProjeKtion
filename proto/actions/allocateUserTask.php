 
<?php
include_once('../config/init.php');
include_once($BASE_DIR .'database/db_util.php');
include_once($BASE_DIR .'database/db_visao_geral_project.php');
include_once($BASE_DIR .'database/db_project.php');

if (!$_SESSION['user_id']) {
	$_SESSION['error_messages'][] = 'Faça login para alocar colaboradores a uma tarefa.';
	header("Location: $BASE_URL");
	exit;
}

if(!isset($_POST['username']) || !isset($_POST['tarefaid']) || !isset($_POST['projetoid'])){
	$_SESSION['error_messages'][] = 'Os campos não se encontram todos preenchidos.';
	header("Location: $BASE_URL");
	exit;
}

$username = $_POST['username'];

$projetoid = $_POST['projetoid'];
$role = getRoleOnProj($projetoid,$_SESSION['user_id']);
if($role == "Colaborador"){
	$_SESSION['error_messages'][] = 'Não tem permissões suficientes para esta ação no âmbito do projeto.';
	header("Location: $BASE_URL");
	exit;
}

$userinfo = getUserByUName($username);
$success=alocateUserTask($userinfo['iduser'],$_POST['tarefaid']);

if($success===-1){
	$_SESSION['error_messages'][] = "Ocorreu um erro interno no nosso sistema. Tente novamente mais tarde.";
	header("Location: $BASE_URL"."pages/user/visaogeralprojeto.php?idprojeto=".$_POST['projetoid']);
	exit;
}

//
$_SESSION['success_messages'][] = 'Colaborador alocado com sucesso.';
header("Location: $BASE_URL"."pages/user/visaogeralprojeto.php?idprojeto=".$_POST['projetoid']);
?>
