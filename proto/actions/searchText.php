<?php

include_once ('../config/init.php');
if(!isset($_POST['texto']) || !isset($_POST['idprojeto'])){
	 $_SESSION['error_messages'] = 'Não inseriu nenhum pesquisa.';
      header("Location: ". $BASE_URL);
      exit;
}

header("Location: ". $BASE_URL."pages/user/pesquisaforum.php?idprojeto=".$_POST['idprojeto']."&texto=".$_POST['texto']);


?>