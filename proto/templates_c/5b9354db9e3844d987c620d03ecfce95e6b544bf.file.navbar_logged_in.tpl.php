<?php /* Smarty version Smarty-3.1.15, created on 2015-05-01 07:09:44
         compiled from "/opt/lbaw/lbaw1415/public_html/proto/templates/common/navbar_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14990216085543066ca31073-00660922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b9354db9e3844d987c620d03ecfce95e6b544bf' => 
    array (
      0 => '/opt/lbaw/lbaw1415/public_html/proto/templates/common/navbar_logged_in.tpl',
      1 => 1430456958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14990216085543066ca31073-00660922',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5543066ca44d64_90578535',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5543066ca44d64_90578535')) {function content_5543066ca44d64_90578535($_smarty_tpl) {?><nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <a class="navbar-brand topnav" href="#">ProjeKtion</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">

                      <!-- parte sempre visivel -->
                      <a href="#" class="dropdown-toggle account" data-toggle="dropdown">
                        <!-- mudar o avatar aqui-->
                        <div class="avatar">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/avatar.jpg" class="img-circle" alt="avatar" />
                        </div>

                        <i class="fa fa-angle-down pull-right"></i><!-- setinha, da para mnudar o fa -->
                        <!-- mensagem e nome-->
                        <div class="user-mini pull-right">
                          <span class="welcome">Bem-vindo,</span>

                          <span><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span> <!-- £username-->
                        </div>

                      </a>
                      <!-- dropdown com opcoes e logout , facil de alterar-->
                      <ul class="dropdown-menu">
                        <li>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/visaopessoal.php" class="ajax-link">
                            <i class="fa fa-user"></i>
                            <span>Visão Pessoal</span>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/logout.php">
                            <i class="fa fa-power-off"></i>
                            <span>Logout</span>
                          </a>
                        </li>
                      </ul>

                    </li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<?php }} ?>
