<?php


include_once ('../config/init.php');
include_once ($BASE_DIR . '/database/db_util.php');
include_once ($BASE_DIR . '/database/db_admin.php');

if(deleteUser($_POST['userid'])){
	$_SESSION['success_messages'][] = 'A conta do utilizador foi apagada.';
	header("Location: $BASE_URL");
	exit;
}
else{
	$_SESSION['error_messages'][] = 'Houve um erro interno. Faremos o máximo para o resolver brevemente. Tente novamente mais tarde.';
		header("Location: $BASE_URL");
		exit;
}

?>