<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 15:10:30
         compiled from "/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/adminperfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1378420846557162b00d1225-95738977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcb1b2ee9adf697f012f3c9600b62a9c032d80a2' => 
    array (
      0 => '/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/adminperfil.tpl',
      1 => 1433729410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1378420846557162b00d1225-95738977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_557162b022c722_45394210',
  'variables' => 
  array (
    'profileurl' => 0,
    'view_username' => 0,
    'view_picurl' => 0,
    'defaultpic' => 0,
    'view_nome' => 0,
    'view_dnascimento' => 0,
    'view_genero' => 0,
    'view_email' => 0,
    'projetos_acabados' => 0,
    'projetos_decorrer' => 0,
    'projects' => 0,
    'BASE_URL' => 0,
    'proj' => 0,
    'isBanned' => 0,
    'INSPECTED_USER_ID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557162b022c722_45394210')) {function content_557162b022c722_45394210($_smarty_tpl) {?>    <?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div >
      <div class="row">
        <div id="breadcrumb" class="col-xs-12">
          <ol class="breadcrumb pull-left">
            <li><a href="visaopessoal.php">Visao Pessoal</a></li>
            <li><a href=<?php echo $_smarty_tpl->tpl_vars['profileurl']->value;?>
>Perfil</a></li>

          </ol>
        </div>
      </div>
      <!-- Header -->
      <a name="perfil"></a>

      <div class="intro-header">
        <div class="container" >
          <div class="panel panel-default" id="editBox" >
            <div class="row">
             <div class=" col-lg-12">
               <h1 class="">Perfil de <?php echo $_smarty_tpl->tpl_vars['view_username']->value;?>
</h1>
             </div>


             <?php if ($_smarty_tpl->tpl_vars['view_picurl']->value) {?>
             <div class="col-lg-12"><a href="" ><br><img title="profile image" class="img-responsive center-block" src=<?php echo $_smarty_tpl->tpl_vars['view_picurl']->value;?>
 width="340em"></a>
               <br>
             </div>
             <?php } else { ?>
             <div class="col-lg-12"><a href="" ><br><img title="profile image" class="img-responsive center-block" src="<?php echo $_smarty_tpl->tpl_vars['defaultpic']->value;?>
" width="340em"></a>
               <br>
             </div>
             <?php }?>
           </div>




           <div class="panel panel-default">

            <div class="panel-heading">Informação geral</div>
            <div class="panel-body"> 
              <ul>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Nome</strong></span> <?php echo $_smarty_tpl->tpl_vars['view_nome']->value;?>

                </li>
                <?php if ($_smarty_tpl->tpl_vars['view_dnascimento']->value!=null) {?>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Data de nascimento</strong></span> <?php echo $_smarty_tpl->tpl_vars['view_dnascimento']->value;?>
</li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['view_genero']->value!=null) {?>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Género</strong></span> <?php echo $_smarty_tpl->tpl_vars['view_genero']->value;?>
</li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['view_email']->value!=null) {?>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Contacto e-mail</strong></span> <?php echo $_smarty_tpl->tpl_vars['view_email']->value;?>
</li>
                <?php }?>
              </ul>
            </div>
          </div>

          <div class="panel panel-default">
           <div class="panel-heading">Estatísticas</div>
           <div class="panel-body"> 
             <ul class="list-group">
               <li class="list-group-item text-right"><span class="pull-left"><strong class="">Projetos Concluidos</strong></span> <?php echo $_smarty_tpl->tpl_vars['projetos_acabados']->value;?>
</li>
               <li class="list-group-item text-right"><span class="pull-left"><strong class="">Projetos a decorrer</strong></span> <?php echo $_smarty_tpl->tpl_vars['projetos_decorrer']->value;?>
</li>

             </ul>
           </div> 
         </div>




         <div class="panel panel-default">
          <div class="panel-heading">Projetos</div>
          <div class="panel-body"> 
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th align="center">
                    Nome
                  </th>
                  <th>
                    Role
                  </th>
                </tr>
              </thead>
              <tbody>

                <?php  $_smarty_tpl->tpl_vars['proj'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['proj']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['proj']->key => $_smarty_tpl->tpl_vars['proj']->value) {
$_smarty_tpl->tpl_vars['proj']->_loop = true;
?>
                <tr>
                  <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/visaogeralprojeto.php?idprojeto=<?php echo $_smarty_tpl->tpl_vars['proj']->value['idprojeto'];?>
"><?php echo $_smarty_tpl->tpl_vars['proj']->value['nomeproj'];?>
</a>
                  </td>
                  <td>
                    <?php echo $_smarty_tpl->tpl_vars['proj']->value['funcaoproj'];?>

                  </td>

                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">Social Media</div>
          <div class="panel-body">    <i class="fa fa-facebook fa-2x"></i>  <i class="fa fa-github fa-2x"></i>
            <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i>  <i class="fa fa-google-plus fa-2x"></i>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">Admin options</div>
          <div class="panel-body"> 
            <?php if ($_smarty_tpl->tpl_vars['isBanned']->value==0) {?> 
            <form method="post" action="../../actions/banUser.php">
              <input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['INSPECTED_USER_ID']->value;?>
">
              <button class="btn btn-primary btn-lg btn-block" type="submit" >Banir</button>
            </form>
            <br>
            <?php } else { ?>
            <form method="post" action="../../actions/banUser.php">
              <input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['INSPECTED_USER_ID']->value;?>
">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Restituir</button>
            </form>
            <br>
            <?php }?>
            <form method="post" action="../../actions/deleteuser.php">
              <input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['INSPECTED_USER_ID']->value;?>
">
              <button class="btn btn-primary btn-lg btn-block" type="submit" >Apagar definitivamente esta conta</button>
            </form>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
