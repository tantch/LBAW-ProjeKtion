<?php /* Smarty version Smarty-3.1.15, created on 2015-06-03 17:49:19
         compiled from "/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/common/navbar_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1763462852556f21ff0c62b7-58257446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da709a518f73f697b6de62d867959ea020d2238e' => 
    array (
      0 => '/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/common/navbar_logged_out.tpl',
      1 => 1431356042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1763462852556f21ff0c62b7-58257446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556f21ff15ace9_47453395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556f21ff15ace9_47453395')) {function content_556f21ff15ace9_47453395($_smarty_tpl) {?><!-- Navigation -->
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
