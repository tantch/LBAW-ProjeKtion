<?php

function updateUserInfo($userid, $name, $morada, $dnascimento, $genero, $phone, $email, $profilepic) {
	try{
		global $conn;
		$stmt = $conn->prepare("UPDATE users SET nome=?, dnascimento=?, genero=?, morada=?, telefone=?, email=?, profilepic=? WHERE iduser=?");
		$stmt->execute(array($name,$dnascimento,$genero,$morada, $phone, $email,$profilepic,$userid));
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$userid+"\n";
		error_log($log,3,$BASE_DIR+"/tmp/error.log");
		return -1;
	}

}
function updateUserPic($userid, $profilepic) {
	try{
		global $conn;
		$stmt = $conn->prepare("UPDATE users SET profilepic=? WHERE iduser=?");
		$stmt->execute(array($profilepic,$userid));
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$userid+"\n";
		error_log($log,3,$BASE_DIR+"/tmp/error.log");
		return -1;
	}

}
function updateUserMail($userid, $email) {
	try{
		global $conn;
		$stmt = $conn->prepare("UPDATE users SET email=? WHERE iduser=?");
		$stmt->execute(array($email,$userid));
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$userid+"\n";
		error_log($log,3,$BASE_DIR+"/tmp/error.log");
		return -1;
	}

}
function updateUserPhone($userid, $phone) {
	try{
		global $conn;
		$stmt = $conn->prepare("UPDATE users SET phone=? WHERE iduser=?");
		$stmt->execute(array($phone,$userid));
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$userid+"\n";
		error_log($log,3,$BASE_DIR+"/tmp/error.log");
		return -1;
	}

}
function updateUserGen($userid, $genero) {
	try{
		global $conn;
		$stmt = $conn->prepare("UPDATE users SET genero=? WHERE iduser=?");
		$stmt->execute(array($genero,$userid));
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$userid+"\n";
		error_log($log,3,$BASE_DIR+"/tmp/error.log");
		return -1;
	}

}
function updateUserDate($userid, $dnascimento) {
	try{
		global $conn;
		$stmt = $conn->prepare("UPDATE users SET dnascimento=? WHERE iduser=?");
		$stmt->execute(array($dnascimento,$userid));
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$userid+"\n";
		error_log($log,3,$BASE_DIR+"/tmp/error.log");
		return -1;
	}

}
function updateUserName($userid, $name) {
	try{
		global $conn;
		$stmt = $conn->prepare("UPDATE users SET nome=? WHERE iduser=?");
		$stmt->execute(array($name,$userid));
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$userid+"\n";
		error_log($log,3,$BASE_DIR+"/tmp/error.log");
		return -1;
	}

}
function updateUserAdress($userid, $morada) {
	try{
		global $conn;
		$stmt = $conn->prepare("UPDATE users SET morada=? WHERE iduser=?");
		$stmt->execute(array($morada,$userid));
	}catch(PDOException $e){
		$log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$userid+"\n";
		error_log($log,3,$BASE_DIR+"/tmp/error.log");
		return -1;
	}

}

?>
