<?php


function getUserByUName($username){
  global $conn;
  $stmt=$conn->prepare("SELECT * FROM users WHERE username=:uname");
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

function getUserSessByUName($username){
  global $conn;
  $stmt=$conn->prepare("SELECT iduser,username,password FROM users WHERE username=:uname");
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

function createUser($username,$name,$password,$email){

  global $conn;
  echo "here";
  $stmt=$conn->prepare("INSERT INTO users (username,password,nome,email) VALUES (?,?,?,?)");
  if(!$stmt){
    echo $conn.errorInfo();
  }
  else{
    echo "here3";
  }
  $stmt->execute(array($username,$password,$name,$email));


}

?>
