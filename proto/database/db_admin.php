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

function banUser($userid,$Val){
	try{
		global $conn;
		$stmt = $conn->prepare("UPDATE users SET banned=? WHERE iduser= ?");
		$success = $stmt->execute(array($Val,$userid));
		return $success;
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$userid+"\n";
		error_log($log,3,$BASE_DIR+"/tmp/error.log");
		return -1;
	}
}

function checkIfBanned($userid){
	try{
		global $conn;
		$stmt = $conn->prepare("SELECT banned FROM users WHERE iduser= ?");
		$stmt->execute(array($userid));
		return $stmt->fetch()['banned'];
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$userid+"\n";
		error_log($log,3,$BASE_DIR+"/tmp/error.log");
		return -1;
	}
}

function deleteUser($userid){
	try{
		global $conn;
		$stmt = $conn->prepare("DELETE FROM users WHERE iduser= ?");
		$success=$stmt->execute(array($userid));
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$userid+"\n";
		error_log($log,3,$BASE_DIR+"/tmp/error.log");
		return -1;
	}
	return $success;
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