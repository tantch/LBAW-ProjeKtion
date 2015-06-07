<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 16:04:19
         compiled from "/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/pesquisaforum.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171360251155746b8318b189-62193697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67532bed198a93ac6bbdcf7d38f555365607ec77' => 
    array (
      0 => '/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/pesquisaforum.tpl',
      1 => 1433692992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171360251155746b8318b189-62193697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'idproj' => 0,
    'nomeproj' => 0,
    'topicos' => 0,
    'topic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55746b83288f78_61319738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55746b83288f78_61319738')) {function content_55746b83288f78_61319738($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="mid-container">
  <div class="row">
    <div id="breadcrumb" class="col-xs-12">
      <ol class="breadcrumb pull-left">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/user/visaogeralprojeto.php?idprojeto=<?php echo $_smarty_tpl->tpl_vars['idproj']->value;?>
">Visão geral do projeto: <?php echo $_smarty_tpl->tpl_vars['nomeproj']->value;?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/user/forum.php?idprojeto=<?php echo $_smarty_tpl->tpl_vars['idproj']->value;?>
">Forum</a></li>
      </ol>
      <div id="social" class="pull-right">
      <!--	<a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>-->
      </div>
    </div>
  </div>
  
  <H2 class="text-center">Projeto x - Fórum</H2>
  
  <div id="messages" class="container-fluid">
    <div class="row" id="test">
      <div class="col-xs-12">
        <div class="row">
          <div id="messages-list" class="col-xs-10 col-xs-offset-1">
            <?php  $_smarty_tpl->tpl_vars['topic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topicos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->key => $_smarty_tpl->tpl_vars['topic']->value) {
$_smarty_tpl->tpl_vars['topic']->_loop = true;
?>
            <div class="row one-list-message msg-inbox-item" id="msg-zero">
              <div class="col-xs-1 checkbox">
                <label>
                 <?php echo $_smarty_tpl->tpl_vars['topic']->value['username'];?>

               </label>
             </div>
             <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/user/topico.php?idtopico=<?php echo $_smarty_tpl->tpl_vars['topic']->value['idtopico'];?>
&idprojeto=<?php echo $_smarty_tpl->tpl_vars['idproj']->value;?>
">
               <div class="col-xs-8 message-title"><b><?php echo $_smarty_tpl->tpl_vars['topic']->value['nometopico'];?>
</b></div>
             </a>
             <div class="col-xs-5 message-date " style="width:auto;">   <?php echo $_smarty_tpl->tpl_vars['topic']->value['dcriacao'];?>
   </div>
           </div>
           <?php } ?>
         </div>
       </div>
     </div>
   </div>
 </div>

 <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
