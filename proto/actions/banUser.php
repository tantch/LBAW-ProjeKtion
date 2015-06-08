<?php


include_once ('../config/init.php');
include_once ($BASE_DIR . '/database/db_util.php');
include_once ($BASE_DIR . '/database/db_admin.php');

if(checkIfBanned($_POST['userid'])==0){
	
	if(banUser($_POST['userid'],1)==TRUE){
		$_SESSION['success_messages'][] = 'O utilizador foi banido e não poderá usufruir da sua conta no website. Poderá restituí-lo quando quiser.';
		header("Location: $BASE_URL");
		exit;
	}
}
else{
	if(banUser($_POST['userid'],0)==TRUE){
		$_SESSION['success_messages'][] = 'Os serviços ao utilizador foram restituídos.';
		header("Location: $BASE_URL");
		exit;
	}
}

?>