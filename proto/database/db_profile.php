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

?>
