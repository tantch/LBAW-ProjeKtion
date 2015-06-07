<?php
/*
function getSelectedProject($projectid){
  global $conn;
  $stmt = $conn->prepare("SELECT Projeto.nomeproj FROM Projeto WHERE Projeto.idProjeto = ?");
  $stmt->execute(array($projectid));
  return $stmt->fetch();
}*/

function getCategories($projectid)
 {
 global $conn;
  $stmt = $conn->prepare("SELECT idCat, NomeCat FROM Categoria WHERE idProjeto=?; ");
  $stmt->execute(array($projectid));
  return $stmt->fetchAll();
}

function getChoresCategory($categoriaid)
 {
 global $conn;
  $stmt = $conn->prepare("SELECT * FROM Tarefa WHERE idCategoria=?");
  $stmt->execute(array($categoriaid));
  return $stmt->fetchAll();
}

function allChoresbyCategory($projectid)
{
$categories = getCategories($projectid);

foreach($categories as $cat)
{
  $chores=getChoresCategory($cat.idCat);
  array_push($allChores,$chores);
}
return $allChores;

}


?>

