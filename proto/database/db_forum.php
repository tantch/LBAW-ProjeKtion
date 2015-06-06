<?php
date_default_timezone_set('UTC');

function createTopic($idproj,$nometopico,$descricao,$idcriador){
	try{
		global $conn;
		$stmt = $conn->prepare("INSERT INTO topico 
			VALUES (DEFAULT, ?, DEFAULT,?,?,?)");
		$sucess=$stmt->execute(array($idprojeto,$nometopico,$descricao,$idcriador));
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$USERID+"\n";
		error_log($log,3,$BASE_DIR+"/tmp/error.log");
		return -1;
	}
	return $success;
}

function getTopics($idprojeto){
	try{
		global $conn;
		$stmt = $conn->prepare("SELECT idTopico,dcriacao,nometopico,descricao,username FROM topico, users
			WHERE idProjeto=? AND idcriador=iduser");
		$stmt->execute(array($idprojeto));
		$topics=$stmt->fetchAll();
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$USERID+"\n";
		error_log($log,3,$BASE_DIR+"/tmp/error.log");
		return -1;
	}
	return $topics;
}

function getAnswers($idtopico){
	try{
		global $conn;
		$stmt = $conn->prepare("SELECT idResposta FROM Resposta
			WHERE idTopico = ?");
		$stmt->execute(array($idtopico));
		$answers=$stmt->fetchAll();
		return $answers;
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$USERID+"\n";
		error_log($log,3,$BASE_DIR+"/tmp/error.log");
		return -1;
	}
}
?>