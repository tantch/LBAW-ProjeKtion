<?php
include_once('../../config/init.php');
include_once($BASE_DIR.'/database/db_util.php');

$viewing=getUserInfoById($_GET['userid']);
if($viewing===-1 || !(isset($_GET['userid']))){
	$_SESSION['error_messages'][] = 'Invalid url.';
	header("Location: $BASE_URL");
	exit;
}

$ADMINID=getAdminId();

if($ADMINID===$_SESSION['user_id']){
	$newurl="Location: $BASE_URL"."pages/user/adminperfil.php?userid=".$_GET['userid'];
	header($newurl);
}
$smarty->assign('view_username', $viewing[username]);
$smarty->assign('view_nome', $viewing[nome]);
$smarty->assign('view_dnascimento', $viewing[dnascimento]);
$smarty->assign('view_genero', $viewing[genero]);
$smarty->assign('view_morada', $viewing[morada]);
$smarty->assign('view_email', $viewing[email]);
$smarty->assign('view_picurl', fetchProfilePic($_GET['userid']));

$smarty->display('user/perfil.tpl');


?>
