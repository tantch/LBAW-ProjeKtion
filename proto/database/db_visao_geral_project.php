<?php

function getRoleOnProj($idproject,$iduser){
 try{
   global $conn;
   $stmt = $conn->prepare("SELECT funcaoproj 
    FROM papel
    WHERE idprojeto=?
    AND iduser=?");
   $stmt->execute(array($idproject,$iduser));
   $role= $stmt->fetch();
 }catch(PDOException $e){
   $log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$USERID+"\n";
   error_log($log,3,"../tmp/error.log");
   return -1;
 }
 return $role[funcaoproj];
}

function addColaborador($iduser,$idproj){
  try{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO papel (idprojeto,iduser,funcaoproj)
      VALUES (?, ?, 'Colaborador')");
    $success=$stmt->execute(array($idproj,$iduser));
  }catch(PDOException $e){
    $log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$userid+"\n";
    error_log($log,3,$BASE_DIR+"/tmp/error.log");
    return -1;
  }
  return $success;
}

function addCategoria($titulo,$idproj){
  try{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO categoria (nomecat,idprojeto)
      VALUES (?, ?)");
    $success=$stmt->execute(array($titulo,$idproj));
  }catch(PDOException $e){
    $log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$userid+"\n";
    error_log($log,3,$BASE_DIR+"/tmp/error.log");
    return -1;
  }
  return $success;
}

function usersRoles($idproject){
  try{
   global $conn;
   $stmt = $conn->prepare("SELECT papel.iduser, username, funcaoProj FROM papel,users
    WHERE idProjeto= ? 
    AND users.iduser=papel.iduser
    ORDER BY funcaoproj ASC");
   $stmt->execute(array($idproject));
   $users= $stmt->fetchAll();
 }catch(PDOException $e){
   $log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$USERID+"\n";
   error_log($log,3,$BASE_DIR."/tmp/error.log");
   return -1;
 }
 return $users;

}


function allChores($idproject){
  try{
   global $conn;
   $stmt = $conn->prepare("SELECT idcat,idtarefa,nomecat,nometarefa,descricaotarefa,idcriador,dcriacao,dfinal,estadotarefa,tipotarefa,idaceitepor FROM categoria
    INNER JOIN tarefa
    ON categoria.idcat = tarefa.idcategoria
    WHERE categoria.idprojeto = ?
    ORDER BY idcat ASC");
   $stmt->execute(array($idproject));
   $chores= $stmt->fetchAll();
 }catch(PDOException $e){
   $log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$USERID+"\n";
   error_log($log,3,$BASE_DIR."/tmp/error.log");
   return -1;
 }
 return $chores;

}

function usersAsigned($idprojeto){
  try{
   global $conn;
   $stmt = $conn->prepare("SELECT DISTINCT useralocadotarefa.idtarefa,users.iduser,username,nome 
    FROM projeto,tarefa,categoria,users,useralocadotarefa
    WHERE projeto.idprojeto=?
    AND projeto.idprojeto=categoria.idprojeto
    AND tarefa.idcategoria=categoria.idcat
    AND useralocadotarefa.iduser=users.iduser");
   $stmt->execute(array($idprojeto));
   $chores= $stmt->fetchAll();
 }catch(PDOException $e){
   $log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$USERID+"\n";
   error_log($log,3,$BASE_DIR."/tmp/error.log");
   return -1;
 }
 return $chores;

}


?>
