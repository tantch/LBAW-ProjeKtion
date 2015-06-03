<?php /* Smarty version Smarty-3.1.15, created on 2015-05-11 17:37:20
         compiled from "/usr/users2/mieic2012/ei12037/public_html/proto/templates/common/navbar_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6671406745550ccb0c333e7-51840150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11bd9f44a2d49908e4bfd1d6021d574b06cd51e2' => 
    array (
      0 => '/usr/users2/mieic2012/ei12037/public_html/proto/templates/common/navbar_logged_out.tpl',
      1 => 1431356042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6671406745550ccb0c333e7-51840150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5550ccb0c4fb59_25450885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5550ccb0c4fb59_25450885')) {function content_5550ccb0c4fb59_25450885($_smarty_tpl) {?><!-- Navigation -->
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
