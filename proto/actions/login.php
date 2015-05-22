<?php

include_once ('../config/init.php');
include_once ($BASE_DIR . '/database/db_util.php');
  if ($_SESSION['user_id']) {
    $_SESSION['error_messages'][] = 'already logged in';
    header("Location: $BASE_URL");
    exit;
  }

$hashed_pass=hash('sha256',$_POST['inpt_pass'],false);
echo $hashed_pass;

if(isset($_POST['inpt_username'])){
  $user=getUserSessByUName($_POST['inpt_username']);
  if(isset($user)){
    if ($user==-1){
      $_SESSION['error_messages'] = 'Username not found.';
      header("Location: ". $BASE_URL);
      exit;
    }
    if($hashed_pass==$user['password']){
      $_SESSION['success_messages']='Login successful.';
      $_SESSION['username']=$user['username'];
      $_SESSION['user_id']=$user['iduser'];
      header("Location: ". $BASE_URL . "pages/user/visaopessoal.php");
      exit;
    }
    else{
      $_SESSION['error_messages']= 'Wrong password.';
      header("Location: ". $BASE_URL);
      exit;
    }
  }
}

?>
