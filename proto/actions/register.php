<?php


include_once ('../config/init.php');
include_once ($BASE_DIR . '/database/db_util.php');

if ($_SESSION['user_id']) {
    $_SESSION['error_messages'][] = 'already logged in';
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
  try {

  createUser($_POST['username'],$_POST['name'],$hashed_pass,$_POST['email']);
  } catch (PDOException $e) {

    $_SESSION['error_messages'][] = 'Error registering: ' . $e->getMessage();

    $_SESSION['form_values'] = $_POST;
    header("Location: {$BASE_URL}pages/user/register.php");
    exit;
  }

  $_SESSION['success_messages'][] = 'registered';  
  $user=getUserSessByUName($_POST['username']);
    $_SESSION['username']=$user['username'];
    $_SESSION['user_id']=$user['iduser'];
    header("Location: ". $BASE_URL . "pages/user/visaopessoal.php");
}
?>
