<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 03:07:16
         compiled from "/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1297821095556f7e2eed5307-13506693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c50eccccb41409d15d02e7394634585bfd5806c' => 
    array (
      0 => '/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/perfil.tpl',
      1 => 1433725619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1297821095556f7e2eed5307-13506693',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556f7e2f0121c3_20338003',
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556f7e2f0121c3_20338003')) {function content_556f7e2f0121c3_20338003($_smarty_tpl) {?>    <?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="mid-container">
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
         </div>


         <div class="row">
             <div class="col-lg-12">
                <!--left col-->
                
                <ul class="list-group">
                    <li class="list-group-item text-muted" contenteditable="false"><h3>Info</h3></li>
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
            
                        <!---
                        <ul class="list-group">
                            <li class="list-group-item text-muted">Estatisticas</li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Projetos Concluidos</strong></span> 125</li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Projetos a decorrer</strong></span> 13</li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Posts</strong></span> 37</li>

                        </ul>
                        <div class="panel panel-default">
                            <div class="panel-heading">Social Media</div>
                            <div class="panel-body">    <i class="fa fa-facebook fa-2x"></i>  <i class="fa fa-github fa-2x"></i>
                                <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i>  <i class="fa fa-google-plus fa-2x"></i>
                            </div>
                        </div>
                    -->


                </div>
            </div>

        </div>
    </div>
    <br>
    <br>
    <br> <br>
    <br>
    <br> <br>
    <br>
    <br> <br>
    <br>
    <br>

    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
