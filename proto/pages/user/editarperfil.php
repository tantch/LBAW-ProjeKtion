<?php
include_once('../../config/init.php');
if (!$_SESSION['user_id']) {
	$_SESSION['error_messages'][] = 'Not allowed!';
	header("Location: $BASE_URL");
	exit;
}

$viewing=getUserInfoById($_SESSION['user_id']);
if($viewing===-1){
	$_SESSION['error_messages'][] = 'Invalid url.';
	header("Location: $BASE_URL");
	exit;
}

$smarty->assign('view_username', $viewing[username]);
$smarty->assign('view_nome', $viewing[nome]);
$smarty->assign('view_dnascimento', $viewing[dnascimento]);
$smarty->assign('view_genero', $viewing[genero]);
$smarty->assign('view_morada', $viewing[morada]);
$smarty->assign('view_email', $viewing[email]);
$smarty->assign('view_telefone', $viewing[telefone]);
$smarty->assign('view_picurl', fetchProfilePic($_SESSION['user_id']));

$smarty->display('user/editarperfil.tpl');
?>
