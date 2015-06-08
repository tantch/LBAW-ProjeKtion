<?php
date_default_timezone_set('UTC');

function getProjectsThisMonth(){
	try{
		global $conn;
		$stmt = $conn->prepare("SELECT idprojeto FROM Projeto
			WHERE EXTRACT(YEAR FROM dcriacao) = EXTRACT(YEAR FROM CURRENT_DATE)
			AND EXTRACT(MONTH FROM dcriacao) = EXTRACT(MONTH FROM CURRENT_DATE);");
		$stmt->execute();
		$results= $stmt->fetchAll();
	}catch(PDOException $e){
		if(isset($_SESSION['user_id'])){
			$log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id']."\n";
		}else{
			$log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
		}
		error_log($log,3,"../error.log");
		
        return -1;
	}
	return $results;
}

function getFinishedProjects($userid){
	try{
		global $conn;
		$stmt = $conn->prepare("SELECT COUNT(*) FROM Papel, Projeto
			WHERE idUser= ? AND Projeto.idProjeto=Papel.idProjeto AND Projeto.dfinalprojeto < CURRENT_DATE;");
		$stmt->execute(array($userid));
		$results= $stmt->fetch()['count'];
	}catch(PDOException $e){
		if(isset($_SESSION['user_id'])){
			$log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id']."\n";
		}else{
			$log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
		}
		error_log($log,3,"../error.log");
        return -1;
	}
	return $results;
}

function banUser($userid,$Val){
	try{
		global $conn;
		$stmt = $conn->prepare("UPDATE users SET banned=? WHERE iduser= ?");
		$success = $stmt->execute(array($Val,$userid));
		return $success;
	}catch(PDOException $e){
		if(isset($_SESSION['user_id'])){
			$log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id']."\n";
		}else{
			$log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
		}
		error_log($log,3,"../error.log");
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
		if(isset($_SESSION['user_id'])){
			$log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id']."\n";
		}else{
			$log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
		}
		error_log($log,3,"../error.log");
	}
}

function deleteUser($userid){
	try{
		global $conn;
		$stmt = $conn->prepare("DELETE FROM users WHERE iduser= ?");
		$success=$stmt->execute(array($userid));
	}catch(PDOException $e){
		if(isset($_SESSION['user_id'])){
			$log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
		}else{
			$log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
		}
		error_log($log,3,"../error.log");
        return -1;
	}
	return $success;
}


function getAdminInfo(){
	try{
		global $conn;
		$stmt=$conn->prepare("SELECT username,nome,dnascimento,genero,morada,email,profilepic FROM users WHERE username='Admin'");
		$found=$stmt->execute();
		$columns=$stmt->fetch();
	}catch(PDOException $e){
		if(isset($_SESSION['user_id'])){
			$log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
		}else{
			$log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
		}
		error_log($log,3,"../error.log");
        return -1;
	}
	return $columns;
}



?>