<?php
date_default_timezone_set('UTC');

function createTopic($idproj,$nometopico,$descricao,$idcriador){
	try{
		global $conn;
		$stmt = $conn->prepare("INSERT INTO topico (idprojeto,nometopico,descricao,idcriador) VALUES ( ?,?,?,?)");
		$stmt->execute(array($idproj,$nometopico,$descricao,$idcriador));
		$lastId = $conn->lastInsertId("topico_idtopico_seq");
	}catch(PDOException $e){
		if(isset($_SESSION['user_id'])){
			$log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
		}else{
			$log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
		}
		error_log($log,3,"../error.log");
        return -1;
	}
	return $lastId;
}

function createAnswer($idtopico,$texto,$iduser){
	try{
		global $conn;
		$stmt = $conn->prepare("INSERT INTO resposta (idtopico,texto,iduser) VALUES ( ?,?,?)");
		$success=$stmt->execute(array($idtopico,$texto,$iduser));
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

function getTopics($idprojeto){
	try{
		global $conn;
		$stmt = $conn->prepare("SELECT idTopico,dcriacao,nometopico,descricao,username FROM topico, users
			WHERE idProjeto=? AND idcriador=iduser ORDER BY dcriacao DESC");
		$stmt->execute(array($idprojeto));
		$topics=$stmt->fetchAll();
	}catch(PDOException $e){
		if(isset($_SESSION['user_id'])){
			$log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
		}else{
			$log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
		}
		error_log($log,3,"../error.log");
        return -1;
	}
	return $topics;
}

function getTopicInfo($idtopico){
	try{
		global $conn;
		$stmt = $conn->prepare("SELECT idtopico,dcriacao,nometopico,descricao,username,iduser,profilepic,nome FROM topico,users
			WHERE idtopico=? AND idcriador=iduser");
		$stmt->execute(array($idtopico));
		$topicInfo=$stmt->fetch();
	}catch(PDOException $e){
		if(isset($_SESSION['user_id'])){
			$log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
		}else{
			$log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
		}
		error_log($log,3,"../error.log");
        return -1;
	}
	return $topicInfo;
}
function getAnswers($idtopico){
	try{
		global $conn;
		$stmt = $conn->prepare("SELECT idresposta,texto,resposta.iduser,dcriacaor,nome,profilepic,username 
			FROM resposta, users
			WHERE resposta.iduser=users.iduser
			AND idTopico = ?
			ORDER BY dcriacaor ASC");
		$stmt->execute(array($idtopico));
		$answers=$stmt->fetchAll();
		return $answers;
	}catch(PDOException $e){
		if(isset($_SESSION['user_id'])){
			$log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
		}else{
			$log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
		}
		error_log($log,3,"../error.log");
        return -1;
	}
}

function getAnswersFTS($texto){
	global $conn;
	
	try{
		
		$stmt=$conn->prepare("SELECT users.username , topico.nometopico, topico.idtopico, topico.descricao, topico.dcriacao
			FROM resposta, topico, users
			WHERE  resposta.idTopico = topico.idTopico
			AND users.iduser = topico.idcriador
			AND to_tsvector(texto) @@ plainto_tsquery(?)
			ORDER BY dcriacaor DESC
			LIMIT 10");
		$stmt->execute(array($texto));
		$answers=$stmt->fetchAll();
		return $answers;
		
	}catch(PDOException $e){
		if(isset($_SESSION['user_id'])){
			$log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
		}else{
			$log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
		}
		error_log($log,3,"../error.log");
        return -1;
	}
}
?>

