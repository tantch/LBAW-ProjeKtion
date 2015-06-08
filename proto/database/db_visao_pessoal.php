<?php

function getUserProjects($userid){
  try{
    global $conn;
    $stmt = $conn->prepare("SELECT Papel.idProjeto, Projeto.nomeproj, Papel.FuncaoProj FROM Papel, Projeto
      WHERE idUser= ? AND Projeto.idProjeto=Papel.idProjeto ORDER BY FuncaoProj DESC;");
    $stmt->execute(array($userid));
    $result =$stmt->fetchAll();
  }catch(PDOException $e){
    if(isset($_SESSION['user_id'])){
      $log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
    }else{
      $log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
    }
    error_log($log,3,"../error.log");
    return -1;
  }
  return $result;
}

function getChores($userid){
  try{
    global $conn;
    $stmt = $conn->prepare("SELECT UserAlocadoTarefa.idTarefa, Tarefa.DFinal,Tarefa.nometarefa,Projeto.nomeproj,Projeto.idprojeto FROM UserAlocadoTarefa, Tarefa, Categoria, Projeto
      WHERE idUser=? AND UserAlocadoTarefa.idTarefa=Tarefa.idTarefa
      AND Tarefa.idcategoria=Categoria.idcat AND Categoria.idProjeto=Projeto.idProjeto
      ORDER BY Tarefa.DFinal ASC");
    $stmt->execute(array($userid));
    $result= $stmt->fetchAll();
  }catch(PDOException $e){
   if(isset($_SESSION['user_id'])){
    $log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
  }else{
    $log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
  }
  error_log($log,3,"../error.log");
  return -1;
}
return $result;
}
