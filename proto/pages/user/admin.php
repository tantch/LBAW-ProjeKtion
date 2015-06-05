<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/db_util.php');

if (isset($_SESSION['user_id'])) {
	if(getAdminId()!=$_SESSION['user_id']){
		$_SESSION['error_messages'][] = 'Not allowed!';
		header("Location: $BASE_URL");
		exit;
	}
}


$smarty->display('user/admin.tpl');
?>
