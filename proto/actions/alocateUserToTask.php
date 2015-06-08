<?php
include_once('../config/init.php');
include_once($BASE_DIR .'database/db_util.php');
include_once($BASE_DIR .'database/db_visao_geral_project.php');
include_once($BASE_DIR .'database/db_project.php');

if (!$_SESSION['user_id']) {
  $_SESSION['error_messages'][] = 'nao pode alocar users a tarefas sem tar logado';
  header("Location: $BASE_URL");
  exit;
}

if(!isset($_POST['username']) || !isset($_POST['tarefaid']) || !isset($_POST['projetoid'])){
	$_SESSION['error_messages'][] = 'query POST incompleta';
	header("Location: $BASE_URL");
	exit;
}

$username = $_POST['username'];
$tarefaid = $_POST['tarefaid'];
$projetoid = $_POST['projetoid'];
$role = getRoleOnProj($projetoid,$_SESSION['user_id']);
if($role == "Colaborador"){
	$_SESSION['error_messages'][] = 'premissoes insuficientes';
	header("Location: $BASE_URL");
	exit;
}
$userinfo = getUserByUName($username);

alocateUserTask($userinfo[iduser],$idtarefa);



header("Location: $BASE_URL");
?>
