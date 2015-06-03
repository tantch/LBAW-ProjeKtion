<?php

function updateUserInfo($userid, $name, $morada, $dnascimento, $genero, $phone, $email, $profilepic) {
  global $conn;
  $stmt = $conn->prepare("UPDATE users SET nome=?, dnascimento=?, genero=?, morada=?, telefone=?, email=?, profilepic=? WHERE iduser=?");
  $stmt->execute(array($name,$dnascimento,$genero,$morada, $phone, $email,$profilepic,$userid));
    print_r($stmt->errorInfo());

  }

  ?>
