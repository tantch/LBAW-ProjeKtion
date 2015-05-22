<?php

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

?>