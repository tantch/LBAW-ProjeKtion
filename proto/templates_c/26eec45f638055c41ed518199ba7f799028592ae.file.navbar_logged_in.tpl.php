<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 06:53:34
         compiled from "/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/common/navbar_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:850508598556f12380184d7-57386753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26eec45f638055c41ed518199ba7f799028592ae' => 
    array (
      0 => '/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/common/navbar_logged_in.tpl',
      1 => 1433739211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '850508598556f12380184d7-57386753',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556f1238059279_11724529',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERPIC' => 0,
    'defaultpic' => 0,
    'USERNAME' => 0,
    'USERID' => 0,
    'ADMINID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556f1238059279_11724529')) {function content_556f1238059279_11724529($_smarty_tpl) {?><nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="topnav container-topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

              <a class="navbar-brand topnav" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">ProjeKtion</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/procuraruser.php">Pocurar utilizador</a>
                </li>
                <li class="dropdown">
                  
                  <!-- parte sempre visivel -->
                  <a href="#" class="dropdown-toggle account" data-toggle="dropdown">
                    <!-- mudar o avatar aqui-->
                    <div class="avatar">
                    <?php if ($_smarty_tpl->tpl_vars['USERPIC']->value) {?>
                      <img src="<?php echo $_smarty_tpl->tpl_vars['USERPIC']->value;?>
" class="img-circle" alt="avatar" />
                    <?php } else { ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['defaultpic']->value;?>
" class="img-circle" alt="avatar" />
                    <?php }?>
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
                      <?php if ($_smarty_tpl->tpl_vars['USERID']->value!=$_smarty_tpl->tpl_vars['ADMINID']->value) {?>
                        <li>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/visaopessoal.php" class="ajax-link">
                            <i class="fa fa-user"></i>
                            <span>Visão Pessoal</span>
                          </a>
                        </li>
                        <?php } else { ?>
                        <li>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/admin.php" class="ajax-link">
                            <i class="fa fa-user"></i>
                            <span>Painel de Admin</span>
                          </a>
                        </li>
                        <?php }?>
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
