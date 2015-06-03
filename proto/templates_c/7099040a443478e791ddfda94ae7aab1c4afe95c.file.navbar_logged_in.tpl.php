<?php /* Smarty version Smarty-3.1.15, created on 2015-05-01 05:25:00
         compiled from "/usr/users2/mieic2012/ei12019/public_html/proto/templates/common/navbar_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1006269037554249f8419659-90342334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7099040a443478e791ddfda94ae7aab1c4afe95c' => 
    array (
      0 => '/usr/users2/mieic2012/ei12019/public_html/proto/templates/common/navbar_logged_in.tpl',
      1 => 1430449533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1006269037554249f8419659-90342334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554249f84901c6_08365792',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554249f84901c6_08365792')) {function content_554249f84901c6_08365792($_smarty_tpl) {?><nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
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

                          <span>Administrator</span> <!-- £username-->
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
