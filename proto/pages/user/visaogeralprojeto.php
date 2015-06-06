<?php

  include_once('../../config/init.php');
  //include_once($BASE_DIR .'database/db_visao_geral_projeto.php');

  if(!$_SESSION['user_id']){
    header('Location: home.php');

    }
  else{
    // Arranjar variavel apra o get do id projeto
    
    $projName = getSelectedProject($_SESSION['user_id']); //passar como argumento o GET do id do projeto selecionado
    $categories=getCategories($_SESSION['user_id']); // passar o id do projeto vindo do GET

    $smarty->assign('categories', $categories);
    $smarty->assign('projName', $projName);
    $smarty->display('user/visaogeralprojeto.tpl');
  }
?>