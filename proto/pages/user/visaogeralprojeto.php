<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/db_visao_geral_projet.php');

  if(!$_SESSION['user_id']){
    header('Location: home.php');

    }
  else{
    $idprojeto=$_GET['idprojeto'];
    
    $projName = getSelectedProject($idprojeto); 
    echo($projName);
    $categories=getCategories($idprojeto); 
    $smarty->assign('categories', $categories);
    $smarty->assign('projName', $projName);
    $smarty->display('user/visaogeralprojeto.tpl');
  }
?>