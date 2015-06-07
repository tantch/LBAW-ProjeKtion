<?php

function getSelectedProject($projectid){
  global $conn;
  $stmt = $conn->prepare("SELECT Projeto.nomeproj FROM Projeto WHERE Projeto.idProjeto = ?");
  $stmt->execute(array($projectid));
  return $stmt->fetchAll();
}

function getCategories($projectid)
 {
 global $conn;
  $stmt = $conn->prepare("SELECT idCat, NomeCat FROM Categoria WHERE idProjeto=?; ");
  $stmt->execute(array($projectid));
  return $stmt->fetchAll();
}

function getChoresCategoria($categoriaid)
 {
 global $conn;
  $stmt = $conn->prepare("SELECT idTarefa, NomeTarefa, DCriação, DFinal, EstadoTarefa FROM Tarefa WHERE idCategoria=?;");
  $stmt->execute(array($categoriaid));
  return $stmt->fetchAll();
}

?>

