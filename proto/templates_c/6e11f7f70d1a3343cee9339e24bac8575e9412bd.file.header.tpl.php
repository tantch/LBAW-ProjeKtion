<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 02:54:05
         compiled from "/usr/users2/deec/ei07122/public_html/LBAW/proto/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13055400985573962d71ca63-75457313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e11f7f70d1a3343cee9339e24bac8575e9412bd' => 
    array (
      0 => '/usr/users2/deec/ei07122/public_html/LBAW/proto/templates/common/header.tpl',
      1 => 1433637339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13055400985573962d71ca63-75457313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERID' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5573962d785a59_06693754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5573962d785a59_06693754')) {function content_5573962d785a59_06693754($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ProjeKtion - Your project in aKtion</title>

  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/landing-page.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/fileinput.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/fileinput.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!--
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/scroll.js"></script>
  -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/bootstrap.min.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/closemessages.js"></script>
</head>

<body>
  <header>
    <?php if ($_smarty_tpl->tpl_vars['USERID']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ('common/navbar_logged_in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ('common/navbar_logged_out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
  </header>
  <div id="error_messages" class="state">
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    <br><br>
    <div class="error" ><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close" href="#" onclick="closemessages()">X</a></div>
    <br>
    <?php } ?>
  </div>
  <div id="success_messages" class="state">
    <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
    <br><br>
    <div class="success" ><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a class="close" href="#" onclick="closemessages()">X</a></div>
    <br>
    <?php } ?>
  </div>
<?php }} ?>
