<?php

function getProjectsThisMonth(){
	global $conn;
	$stmt = $conn->prepare("SELECT idprojeto FROM Projeto
		WHERE EXTRACT(YEAR FROM dcriacao) = EXTRACT(YEAR FROM CURRENT_DATE)
		AND EXTRACT(MONTH FROM dcriacao) = EXTRACT(MONTH FROM CURRENT_DATE);");
	$stmt->execute();
	return $stmt->fetchAll();
}

function getFinishedProjects($userid){
  global $conn;
  $stmt = $conn->prepare("SELECT COUNT(*) FROM Papel, Projeto
  WHERE idUser= ? AND Projeto.idProjeto=Papel.idProjeto AND Projeto.dfinalprojeto < CURRENT_DATE;");
  $stmt->execute(array($userid));
  return $stmt->fetch()['count'];
}


?>