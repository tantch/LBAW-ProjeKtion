<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 16:22:57
         compiled from "/usr/users2/deec/ei07122/public_html/LBAW/proto/templates/common/navbar_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12546375565573962d797f23-12890419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ed81aebe5b6805295ba637b20a4ea758b53de96' => 
    array (
      0 => '/usr/users2/deec/ei07122/public_html/LBAW/proto/templates/common/navbar_logged_in.tpl',
      1 => 1433655788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12546375565573962d797f23-12890419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5573962d7c3747_89440110',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERPIC' => 0,
    'USERNAME' => 0,
    'USERID' => 0,
    'ADMINID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5573962d7c3747_89440110')) {function content_5573962d7c3747_89440110($_smarty_tpl) {?><nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
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
                      <img src="<?php echo $_smarty_tpl->tpl_vars['USERPIC']->value;?>
" class="img-circle" alt="avatar" />
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
