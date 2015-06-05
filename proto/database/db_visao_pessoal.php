<?php

function getUserProjects($userid){
  global $conn;
  $stmt = $conn->prepare("SELECT Papel.idProjeto, Projeto.nomeproj, Papel.FuncaoProj FROM Papel, Projeto
  WHERE idUser= ? AND Projeto.idProjeto=Papel.idProjeto ORDER BY FuncaoProj DESC;");
  $stmt->execute(array($userid));
  return $stmt->fetchAll();
}

function getChores($userid){
  global $conn;
  $stmt = $conn->prepare("SELECT UserAlocadoTarefa.idTarefa, Tarefa.DFinal,Tarefa.nometarefa,Projeto.nomeproj,Projeto.idprojeto FROM UserAlocadoTarefa, Tarefa, Categoria, Projeto
    WHERE idUser=? AND UserAlocadoTarefa.idTarefa=Tarefa.idTarefa
    AND Tarefa.idcategoria=Categoria.idcat AND Categoria.idProjeto=Projeto.idProjeto
    ORDER BY Tarefa.DFinal ASC");
  $stmt->execute(array($userid));
  return $stmt->fetchAll();
}
