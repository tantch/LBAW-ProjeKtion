<?php

function updateUserInfo($userid, $name, $morada, $dnascimento, $genero, $phone, $email, $profilepic) {
	try{
		global $conn;
		$stmt = $conn->prepare("UPDATE users SET nome=?, dnascimento=?, genero=?, morada=?, telefone=?, email=?, profilepic=? WHERE iduser=?");
		$stmt->execute(array($name,$dnascimento,$genero,$morada, $phone, $email,$profilepic,$userid));
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

?>
