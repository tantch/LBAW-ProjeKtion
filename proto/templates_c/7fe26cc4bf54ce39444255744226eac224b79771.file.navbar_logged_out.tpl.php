<?php /* Smarty version Smarty-3.1.15, created on 2015-05-22 10:24:03
         compiled from "/opt/lbaw/lbaw1415/public_html/proto/templates/common/navbar_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2086440688555ee7a3265a08-34836078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fe26cc4bf54ce39444255744226eac224b79771' => 
    array (
      0 => '/opt/lbaw/lbaw1415/public_html/proto/templates/common/navbar_logged_out.tpl',
      1 => 1431653112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2086440688555ee7a3265a08-34836078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555ee7a3280121_56811879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ee7a3280121_56811879')) {function content_555ee7a3280121_56811879($_smarty_tpl) {?><!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
  <div class="container topnav">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand topnav" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">ProjeKtion</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="index.html#login">Login</a>
        </li>
        <li>
          <a href="index.html#oquefazemos">O Que Fazemos</a>
        </li>
        <li>
          <a href="index.html#faq">FAQ</a>
        </li>
        <li>
          <a href="index.html#contactos">Contactos</a>
        </li>

      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>
<?php }} ?>
