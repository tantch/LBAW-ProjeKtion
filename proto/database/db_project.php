<?php

function alocateUserTask($iduser,$idtarefa){
    try{
        global $conn;
        $stmt = $conn->prepare("INSERT INTO useralocadotarefa
            VALUES (?,?)");
        $result=$stmt->execute(array($iduser,$idtarefa));
    }catch(PDOException $e){
        if(isset($_SESSION['user_id'])){
            $log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
        }else{
            $log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
        }
        error_log($log,3,"../error.log");
        return -1;
    }
    return $result;
}

function createProject($userid, $name,$fdate) {
    try{
        global $conn;
        $obs="temp";
        $stmt = $conn->prepare("INSERT INTO projeto 
            VALUES (DEFAULT, ?, ?,DEFAULT, ?)");
        $result1=$stmt->execute(array($name,$obs,$fdate));
        $lastId = $conn->lastInsertId("projeto_idprojeto_seq");
        $role = "Master";
        $stmt = $conn->prepare("INSERT INTO papel 
            VALUES (?, ?,?)");
        $result2=$stmt->execute(array($lastId,$userid,$role));
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

function fetchAssociatedUsers($idprojeto){
    try{
        global $conn;
        $stmt = $conn->prepare("SELECT idUser, FuncaoProj FROM Papel
            WHERE idProjeto= ?");
        $stmt->execute(array($idprojeto));
        $users=$stmt->fetchAll();
    }catch(IOException $e){
      if(isset($_SESSION['user_id'])){
        $log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
    }else{
        $log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
    }
    error_log($log,3,"../error.log");
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
      if(isset($_SESSION['user_id'])){
        $log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
    }else{
        $log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
    }
    error_log($log,3,"../error.log");
    return -1;
}
return $projs;
}

function fetchAssociatedCategories($idprojeto){
    try{
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM categoria
            WHERE idProjeto= ?");
        $stmt->execute(array($idprojeto));
        $categories=$stmt->fetchAll();
    }catch(IOException $e){
      if(isset($_SESSION['user_id'])){
        $log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
    }else{
        $log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
    }
    error_log($log,3,"../error.log");
    return -1;
}
return $categories;
}

function fetchAssociatedChores($idcategoria){
    try{
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM Tarefa WHERE idCategoria=?");
        $stmt->execute(array($idcategoria));
        $chores=$stmt->fetchAll();
    }catch(IOException $e){
      if(isset($_SESSION['user_id'])){
        $log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
    }else{
        $log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
    }
    error_log($log,3,"../error.log");
    return -1;
}
return $chores;
}






?>