<?php


include_once ('../config/init.php');
include_once ($BASE_DIR . '/database/db_util.php');

if ($_SESSION['user_id']) {
  $_SESSION['error_messages'][] = 'Já se encontra com sessão iniciada';
  header("Location: $BASE_URL");
  exit;
}


$error=0;
function checkparams(){
  global $error;
  if(!isset($_POST['username']) || !isset($_POST['password'])
    || !isset($_POST['rpassword']) || !isset($_POST['email'])
    || !isset($_POST['remail']) || !isset($_POST['name'])){
    $_SESSION['error_messages']="Missing input field.";
  $error=1;
  return -1;
}
if($_POST['password']!= $_POST['rpassword']){
  $_SESSION['error_messages']="Passwords do not match.";
  $error=1;
  return -1;
}
if($_POST['email']!= $_POST['remail']){
  $_SESSION['error_messages']="Emails do not match.";
  $error=1;
  return -1;
}
else return 1;
}



$check=checkparams();
if ($check>0){



  $hashed_pass=hash('sha256',$_POST['password'],false);
  echo "here1";

  $success=createUser($_POST['username'],$_POST['name'],$hashed_pass,$_POST['email']);
  if($success===-1) {
  //  $_SESSION['error_messages'][]=$BASE_DIR."tmp/error.log";
   $_SESSION['error_messages'][]='Houve um erro interno. Faremos o máximo para o resolver brevemente. Tente novamente mais tarde.';
    header("Location: {$BASE_URL}pages/user/register.php");
    exit;
  }

  $_SESSION['success_messages'][] = 'A sua conta foi registada com sucesso';  
  $user=getUserSessByUName($_POST['username']);
  $_SESSION['username']=$user['username'];
  $_SESSION['user_id']=$user['iduser'];
  header("Location: ". $BASE_URL . "pages/user/visaopessoal.php");
}
?>
