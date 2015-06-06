<?php
date_default_timezone_set('UTC');

function createTopic($idproj,$nometopico,$descricao,$idcriador){
	try{
		global $conn;
		$stmt = $conn->prepare("INSERT INTO topico (idprojeto,nometopico,descricao,idcriador) VALUES ( ?,?,?,?)");
		$stmt->execute(array($idproj,$nometopico,$descricao,$idcriador));
		$lastId = $conn->lastInsertId("topico_idtopico_seq");
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$USERID+"\n";
		$dir=$BASE_DIR+"/error.log";
		error_log($log,3,$dir);
		return -1;
	}
	return $lastId;
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

function getTopicInfo($idtopico){
	try{
		global $conn;
		$stmt = $conn->prepare("SELECT idtopico,dcriacao,nometopico,descricao,username,iduser,profilepic,nome FROM topico,users
			WHERE idtopico=? AND idcriador=iduser");
		$stmt->execute(array($idtopico));
		$topicInfo=$stmt->fetch();
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$USERID+"\n";
		error_log($log,3,$BASE_DIR+"/tmp/error.log");
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
			ORDER BY dcriacaor DESC");
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