<?php

function getUserByUName($username){
  global $conn;
  $stmt=$conn->prepare("SELECT * FROM users WHERE username=:uname AND username!='Admin'");
  $stmt->bindValue(':uname',$username,PDO::PARAM_STR);
  $found=$stmt->execute();
  $columns=$stmt->fetch();
  if($found){
    return $columns;
  }
  else{
    print_r($stmt->errorInfo());
    return -1;
  }
}

function getUserInfoById($id){
  global $conn;
  $stmt=$conn->prepare("SELECT username,nome,dnascimento,genero,morada,email,profilepic FROM users WHERE iduser=:id AND username!='Admin'");
  $stmt->bindValue(':id',$id);
  $found=$stmt->execute();
  $columns=$stmt->fetch();
  if($found){
    return $columns;
  }
  else{
    print_r($stmt->errorInfo());
    return -1;
  }
}

function getAdminId(){
  global $conn;
  $stmt=$conn->prepare("SELECT iduser FROM users WHERE admin=:admin");
  $stmt->bindValue(':admin',1);
  $found=$stmt->execute();
  $adminId=$stmt->fetch();
  if($found){
    return $adminId['iduser'];
  }
  else{
    print_r($stmt->errorInfo());
    return -1;
  }
}

function getUsersCount(){
  try{
    global $conn;
    $stmt=$conn->prepare("SELECT Count(*) FROM users");
    $found=$stmt->execute();
    $count=$stmt->fetch();

  }catch(PDOException $e){
    if(isset($_SESSION['user_id'])){
      $log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
    }else{
      $log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
    }
    error_log($log,3,"../error.log");
    return -1;
  }
  return $count['count'];

}


function getUserByPattern($pattern){
  try{
    global $conn;
    $stmt=$conn->prepare("SELECT iduser,username,nome FROM users WHERE admin=0 AND (nome LIKE ".$pattern."OR username LIKE ".$pattern.")" );
    $found=$stmt->execute();
    $result = $stmt->fetchAll();
  }catch(PDOException $e){
    if(isset($_SESSION['user_id'])){
      $log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
    }else{
      $log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
    }
    error_log($log,3,"../error.log");
    return -1;
  }
  if($found==false){
    return -1;
  }
  else{
   return $result; 
 }

}

function getUserSessByUName($username){
  try{
    global $conn;
    $stmt=$conn->prepare("SELECT iduser,username,password FROM users WHERE username=:uname");
    $stmt->bindValue(':uname',$username,PDO::PARAM_STR);
    $found=$stmt->execute();
    $columns=$stmt->fetch();
  }catch(PDOException $e){
    if(isset($_SESSION['user_id'])){
      $log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
    }else{
      $log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
    }
    error_log($log,3,"../error.log");
    return -1;
  }
  if($found){
    return $columns;
  }
  else{
    return -1;
  }
}

function createUser($username,$name,$password,$email){
  try{
    global $conn;
    echo "here";
    $stmt=$conn->prepare("INSERT INTO users (username,password,nome,email) VALUES (?,?,?,?)");
    $stmt->execute(array($username,$password,$name,$email));
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

function checkIfUserExists($username,$email){
  try{
    global $conn;
    $stmt=$conn->prepare("SELECT username,email
      FROM users
      WHERE username=?
      OR email=?");
    $success=$stmt->execute(array($username,$email));
  }catch(PDOException $e){
    if(isset($_SESSION['user_id'])){
      $log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
    }else{
      $log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
    }
    error_log($log,3,"../error.log");
    return -1;
  }
  return $success;

}
function fetchProfilePic($userid){
  global $conn;
  try{
    $stmt=$conn->prepare("SELECT profilepic FROM Users WHERE iduser=?");
    $stmt->execute(array($userid));
    $url=$stmt->fetch();
  }catch(PDOException $e){
    if(isset($_SESSION['user_id'])){
      $log=$e->getMessage()." ___Date=".date("Y-m-d")." ___ idUser=".$_SESSION['user_id'].PHP_EOL;
    }else{
      $log=$e->getMessage()." ___Date= ".date("Y-m-d")."\n";
    }
    error_log($log,3,"../error.log");
    return -1;
  }
  return $url[profilepic];
}

?>
