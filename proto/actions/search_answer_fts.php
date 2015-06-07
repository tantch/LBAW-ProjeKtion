<?php


include_once('../config/init.php');

include_once($BASE_DIR .'database/db_forum.php');




if(isset($_GET['texto']))
{
	

$querytext = $_GET['texto'];



$success= getAnswersFTS($querytext);
print_r($success);
}



if($success===-1){ 
	$_SESSION['error_messages'][] = 'Houve um erro interno. Os nossos engenheiros serão informados e resolverão a situação. Tente novamente mais tarde';
	header("Location: $BASE_URL");
	exit;
}


?>