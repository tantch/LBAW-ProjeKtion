<?php

include_once ('../config/init.php');
include_once ($BASE_DIR .'/database/db_util.php');
include_once ($BASE_DIR .'/database/db_profile.php');


if(!$_SESSION['user_id']) {

  $_SESSION['error_messages'][] = 'Inicie sessão para poder editar o seu perfil.';
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

$user=getUserSessByUName($_SESSION['username']);
$hashed_pass=hash('sha256',$_POST['password'],false);


if($hashed_pass!==$user['password']){
$_SESSION['error_messages'][] = $user['password']." ---- ".$hashed_pass;
  //$_SESSION['error_messages'][] = "Por favor insira a sua password corretamente.";
  header("Location: " . $BASE_URL . "pages/user/editarperfil.php");
  exit;
}else{

  if(count($_FILES['picture']['name'])!=0){
    if ($_FILES["picture"]["error"] > 0) {
      $_SESSION['error_messages'][] = "A imagem que submeteu não se encontra dentro das nossas restrições.";
      header("Location: " . $BASE_URL . "pages/user/editarperfil.php");
      exit;
    } else {
      $exts = array('gif', 'png', 'jpg');
      if(in_array(end(explode('.', $_FILES['picture']['name'])), $exts)){
        $picExtension = pathinfo($_FILES["picture"]["name"], PATHINFO_EXTENSION);
        $picDir=$BASE_DIR."images/".$_SESSION['user_id'].".".$picExtension;
        $toStore="../../images/".$_SESSION['user_id'].".".$picExtension;;
        $picName=basename($_FILES['picture']['name']);
        updateUserPic($_SESSION['user_id'], $toStore);
        if(move_uploaded_file($_FILES['picture']['tmp_name'],$picDir)===false){

          $_SESSION['error_messages'][] = "Os nossos servidores não conseguiram guardar a sua imagem de perfil";
          header("Location: " . $BASE_URL . "pages/user/editarperfil.php");
          exit;
        }

      }
      else{
       $_SESSION['error_messages'][] = "Por favor insira uma imagem válida. (JPG, PNG ou GIF)";
       header("Location: " . $BASE_URL . "pages/user/editarperfil.php");
       exit;
     }

   }

 }

 $myregex = '~^\d{2}/\d{2}/\d{4}$~';

 if(!preg_match($myregex,$dnascimento)){
  $dnascimento=null;
}


if(isset($dnascimento)){
  updateUserDate($_SESSION['user_id'], $dnascimento);
}

if(isset($address)){
  updateUserAdress($_SESSION['user_id'], $address);
}

if(isset($genre)){
  updateUserGen($_SESSION['user_id'], $genre);
}

if(isset($phone)){
  updateUserPhone($_SESSION['user_id'], $phone);
}
if(isset($email)){
  updateUserMail($_SESSION['user_id'], $email);
}
//updateUserInfo($_SESSION['user_id'], $name, $address, $dnascimento, $genre, $phone, $email, $toStore);
$_SESSION['success_messages'][]='A sua informação de perfil foi atualizada com sucesso.';
header("Location: $BASE_URL/pages/user/visaopessoal.php");
}



?>
