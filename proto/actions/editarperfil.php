<?php

include_once ('../config/init.php');

include_once ($BASE_DIR .'/database/db_profile.php');


if(!$_SESSION['user_id']) {

  $_SESSION['error_messages'][] = 'Not allowed!';
  header("Location: $BASE_URL");
  exit;
}



if(!$_POST['name'] && !$_POST['address'] && !$_POST['dnascimento'] && !$_POST['genre'] && !$_POST['phone'] && !$_POST['email'] && !$_POST['password'] && !$_POST['password_confirmation'] && !$_POST['picture']) {
  $_SESSION['error_messages'][] = 'No new user info';
  header("Location: $BASE_URL/pages/user/editarperfil.php");
  exit;

}


$name=$_POST['fullname'];
$dnascimento=$_POST['dnascimento'];
$address=$_POST['address'];
$genre=$_POST['genre'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['password_confirmation'];
$profilepic=$_POST['picture'];

$myregex = '~^\d{2}/\d{2}/\d{4}$~';
if(!preg_match($myregex,$dnascimento)){
  $dnascimento=null;
}


try{
  updateUserInfo($_SESSION['user_id'], $name, $address, $dnascimento, $genre, $phone, $email, $profilepic);

}catch(PDOException $e){
  $_SESSION['error_messages'][] = $e->getMessage();
  header("Location: " . $BASE_URL . "pages/user/editarperfil.php");
  exit;
}

$_SESSION['success_messages'][]='User info successfully updated.';
header("Location: $BASE_URL/pages/user/visaopessoal.php");


?>
