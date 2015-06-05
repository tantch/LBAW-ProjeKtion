<?php
date_default_timezone_set('UTC');

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

function banUser($userid){
	try{
		global $conn;
		$stmt = $conn->prepare("UPDATE users SET banned=? WHERE idUser= ?");
		$success = $stmt->execute(array(1,$userid));
		return $success;
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$userid+"\n";
		error_log($log,3,$BASE_DIR+"/tmp/error.log");
		return -1;
	}
}

function getAdminInfo(){
  global $conn;
  $stmt=$conn->prepare("SELECT username,nome,dnascimento,genero,morada,email,profilepic FROM users WHERE username='Admin'");
  $found=$stmt->execute();
  $columns=$stmt->fetch();
  if($found){
    return $columns;
  }
  else{
    print_r($stmt->errorInfo());
    return -1;
  }
}



?>