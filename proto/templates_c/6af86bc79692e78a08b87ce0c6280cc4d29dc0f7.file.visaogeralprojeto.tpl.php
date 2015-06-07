<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 01:25:10
         compiled from "/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/visaogeralprojeto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21745106255743221dd08c8-05094365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6af86bc79692e78a08b87ce0c6280cc4d29dc0f7' => 
    array (
      0 => '/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/visaogeralprojeto.tpl',
      1 => 1433719509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21745106255743221dd08c8-05094365',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55743221eb9ac2_23436833',
  'variables' => 
  array (
    'projName' => 0,
    'categories' => 0,
    'cat' => 0,
    'chores' => 0,
    'chore' => 0,
    'assignements' => 0,
    'assignement' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55743221eb9ac2_23436833')) {function content_55743221eb9ac2_23436833($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="mid-container">
  <div class="row">
    <div id="breadcrumb" class="col-xs-12">
      <ol class="breadcrumb pull-left">
        <li><a href="visaopessoal.php">Visao Pessoal</a></li>
        <li><a href="projeto.php">Visao Projeto</a></li>

    </ol>
</div>
<!-- Main Body -->

<div class="intro-header">
    <div class="container"  >

        <div id="wrapper">

            <div id="page-wrapper">


                <div class="row">
                    <div class="col-lg-12" >
                        <div class="panel panel-default" id="editBox">
                            <div class="panel-heading">
                               <?php echo $_smarty_tpl->tpl_vars['projName']->value;?>

                           </div>
                           <!-- .panel-heading -->


                           <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><?php echo $_smarty_tpl->tpl_vars['cat']->value['nomecat'];?>
</a>
                                        </h4>
                                    </div>
                                    <!-- para obter as tarefas dentro de uma dada categoria (não está a funcionar) --> 
                                    
                                    <div id="collapseOne" class="panel-collapse collapse in">

                                        <?php  $_smarty_tpl->tpl_vars['chore'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chore']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chore']->key => $_smarty_tpl->tpl_vars['chore']->value) {
$_smarty_tpl->tpl_vars['chore']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['chore']->value['idcat']===$_smarty_tpl->tpl_vars['cat']->value['idcat']) {?>
                                        <div class="panel-body">
                                            <a href=<?php echo $_smarty_tpl->tpl_vars['chore']->value['idcat'];?>
 data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['chore']->value['nometarefa'];?>
 </a>
                                        </div>
                                        <?php }?>
                                        
                                        <?php } ?>
                                        
                                    </div>
                                    <!-- aqui vem o fim do foreach do $chores -->

                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <?php  $_smarty_tpl->tpl_vars['chore'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chore']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chore']->key => $_smarty_tpl->tpl_vars['chore']->value) {
$_smarty_tpl->tpl_vars['chore']->_loop = true;
?>
            <!-- /.row -->
            <div class="row">

                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 ><?php echo $_smarty_tpl->tpl_vars['chore']->value['nometarefa'];?>
</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="##description<?php echo $_smarty_tpl->tpl_vars['chore']->value['idtarefa'];?>
" data-toggle="tab">Descrição</a>
                                </li>
                                <li><a href="#colaboradores<?php echo $_smarty_tpl->tpl_vars['chore']->value['idtarefa'];?>
" data-toggle="tab">Colaboradores Escalonados</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="description<?php echo $_smarty_tpl->tpl_vars['chore']->value['idtarefa'];?>
">
                                    <p><?php echo $_smarty_tpl->tpl_vars['chore']->value['descricaotarefa'];?>
</p>
                                </div>
                                <div class="tab-pane fade" id="colaboradores<?php echo $_smarty_tpl->tpl_vars['chore']->value['idtarefa'];?>
">

                                    <?php  $_smarty_tpl->tpl_vars['assignement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['assignement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['assignements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['assignement']->key => $_smarty_tpl->tpl_vars['assignement']->value) {
$_smarty_tpl->tpl_vars['assignement']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['assignement']->value['idtarefa']==$_smarty_tpl->tpl_vars['chore']->value['idtarefa']) {?>
                                    <p>
                                    <?php echo $_smarty_tpl->tpl_vars['assignement']->value['nome'];?>

                                    </p>
                                    <?php }?>
                                   
                                    <?php } ?>
                                </div>

                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <?php } ?>
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container-->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
