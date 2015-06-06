<?php

//inserts

function createProject($userid, $name,$fdate) {
    global $conn;
    $obs="temp";
    $stmt = $conn->prepare("INSERT INTO projeto 
        VALUES (DEFAULT, ?, ?,DEFAULT, ?,?)");
    $stmt->execute(array($name,$obs,$fdate,$userid));
    $lastId = $conn->lastInsertId("projeto_idprojeto_seq");
    $role = "Master";
    $stmt = $conn->prepare("INSERT INTO papel 
        VALUES (?, ?,?)");
    $stmt->execute(array($lastId,$userid,$role));

}

function fetchAssociatedUsers($idprojeto){
    try{
        global $conn;
        $stmt = $conn->prepare("SELECT idUser, FuncaoProj FROM Papel
            WHERE idProjeto= ?");
        $stmt->execute(array($idprojeto));
        $users=$stmt->fetchAll();
    }catch(IOException $e){
        $log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$USERID+"\n";
        error_log($log,3,$BASE_DIR+"/tmp/error.log");
        return -1;
    }
    return $users;
}

function fetchProjectInfo($idprojeto){
    try{
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM projeto
            WHERE idProjeto= ?");
        $stmt->execute(array($idprojeto));
        $projs=$stmt->fetch();
    }catch(IOException $e){
        $log=$e->getMessage()+" | "+date(DATE_RFC2822)+" | "+$USERID+"\n";
        error_log($log,3,$BASE_DIR+"/tmp/error.log");
        return -1;
    }
    return $projs;
}





?>