<?php

function getSelectedProject($projectid){
  global $conn;
  $stmt = $conn->prepare("SELECT nomeproj FROM Projeto WHERE idProjeto = ?");
  $stmt->execute(array($projectid));
  return $stmt->fetchAll();
}

function getCategories($projectid)
 {
 global $conn;
  $stmt = $conn->prepare("SELECT idCat FROM Categoria WHERE idProjeto=?; ");
  $stmt->execute(array($projectid));
  return $stmt->fetchAll();
}

function getChoresCategoria($categoriaid)
 {
 global $conn;
  $stmt = $conn->prepare("SELECT idTarefa FROM Tarefa WHERE idCategoria=?;");
  $stmt->execute(array($categoriaid));
  return $stmt->fetchAll();
}

?>

