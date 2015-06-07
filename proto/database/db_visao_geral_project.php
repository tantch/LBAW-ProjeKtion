<?php

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

SELECT DISTINCT useralocadotarefa.idtarefa,users.iduser,username,nome 
FROM projeto,tarefa,categoria,users,useralocadotarefa
WHERE projeto.idprojeto=66
AND projeto.idprojeto=categoria.idprojeto
AND tarefa.idcategoria=categoria.idcat
AND useralocadotarefa.iduser=users.iduser