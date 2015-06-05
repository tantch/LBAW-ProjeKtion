<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/db_admin.php');
include_once($BASE_DIR .'database/db_util.php');
include_once($BASE_DIR .'database/db_visao_pessoal.php');


if (isset($_SESSION['user_id'])) {
	if(getAdminId()!=$_SESSION['user_id']){
		$_SESSION['error_messages'][] = 'Not allowed!';
		header("Location: $BASE_URL");
		exit;
	}
}
$viewing=getUserInfoById($_GET['userid']);
if($viewing===-1 || !(isset($_GET['userid']))){
	$_SESSION['error_messages'][] = 'Invalid url.';
	header("Location: $BASE_URL");
	exit;
}
$projects = getUserProjects($_GET["userid"]);
$chores=getChores($_GET["userid"]);
$smarty->assign('projects', $projects);
$smarty->assign('chores', $chores);
$smarty->assign('INSPECTED_USER_ID', $_GET["userid"]);
$url="adminperfil.php?userid=".$_GET["userid"];
$smarty->assign('profileurl',$url);
$smarty->assign('view_username', $viewing["username"]);
$smarty->assign('view_nome', $viewing["nome"]);
$smarty->assign('view_dnascimento', $viewing["dnascimento"]);
$smarty->assign('view_genero', $viewing["genero"]);
$smarty->assign('view_morada', $viewing["morada"]);
$smarty->assign('view_email', $viewing["email"]);
$smarty->assign('view_picurl', fetchProfilePic($_GET["userid"]));
$smarty->assign('projetos_decorrer',count($projects));
$smarty->assign('projetos_acabados',getFinishedProjects($_GET["userid"]));
$smarty->display('user/adminperfil.tpl');

?>
