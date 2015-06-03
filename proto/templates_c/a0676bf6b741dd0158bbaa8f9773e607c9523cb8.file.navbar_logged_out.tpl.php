<?php /* Smarty version Smarty-3.1.15, created on 2015-05-01 04:37:24
         compiled from "/usr/users2/mieic2012/ei12019/public_html/proto/templates/common/navbar_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181640946055424244e22e55-76046226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0676bf6b741dd0158bbaa8f9773e607c9523cb8' => 
    array (
      0 => '/usr/users2/mieic2012/ei12019/public_html/proto/templates/common/navbar_logged_out.tpl',
      1 => 1430445777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181640946055424244e22e55-76046226',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55424244e27bc0_87048228',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55424244e27bc0_87048228')) {function content_55424244e27bc0_87048228($_smarty_tpl) {?><!-- Navigation -->
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
