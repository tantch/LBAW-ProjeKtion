<?php

include_once ('../config/init.php');
include_once ($BASE_DIR .'/database/db_util.php');
include_once ($BASE_DIR .'/database/db_profile.php');


if(!$_SESSION['user_id']) {

  $_SESSION['error_messages'][] = 'Not allowed!';
  header("Location: $BASE_URL");
  exit;
}

$name=$_POST['fullname'];
$dnascimento=$_POST['dnascimento'];
$address=$_POST['address'];
$genre=$_POST['genre'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pass=$_POST['password'];
$profilepic=$_POST['picture'];

$user=getUserSessByUName($_SESSION['username']);

$hashed_pass=hash('sha256',$_POST['password'],false);

if($hashed_pass==$user['password']){

  $myregex = '~^\d{2}/\d{2}/\d{4}$~';

  if(!preg_match($myregex,$dnascimento)){
    $dnascimento=null;
  }

  
  updateUserInfo($_SESSION['user_id'], $name, $address, $dnascimento, $genre, $phone, $email, $profilepic);
  $_SESSION['success_messages'][]='User info successfully updated.';
  header("Location: $BASE_URL/pages/user/visaopessoal.php");
}
else{

  $_SESSION['error_messages'][] = "Wrong password.";
  header("Location: " . $BASE_URL . "pages/user/editarperfil.php");
  exit;
}
?>
