<?php /* Smarty version Smarty-3.1.15, created on 2015-06-06 18:29:06
         compiled from "/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/topico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14254393515573293ca761b4-60769871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dfd39bba1b79b8786f9bd1ad91b243781214029' => 
    array (
      0 => '/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/topico.tpl',
      1 => 1433615341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14254393515573293ca761b4-60769871',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5573293cad1712_39590068',
  'variables' => 
  array (
    'topicInfo' => 0,
    'defaultpic' => 0,
    'respostas' => 0,
    'resposta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5573293cad1712_39590068')) {function content_5573293cad1712_39590068($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Main Body -->
<div class="mid-container">

  <div class="row">
    <div id="breadcrumb" class="col-xs-12">
      <ol class="breadcrumb pull-left">
        <li><a href="projeto.html">Projeto 2</a></li>
        <li><a href="forum.html">Forum</a></li>
        <li><a href="topico1.html">Topico 1</a></li>
      </ol>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 page-feed">
      <div class="box">
        <div class="avatar">
          <?php if ($_smarty_tpl->tpl_vars['topicInfo']->value['profilepic']) {?>
          <img src=<?php echo $_smarty_tpl->tpl_vars['topicInfo']->value['profilepic'];?>
 alt=<?php echo $_smarty_tpl->tpl_vars['topicInfo']->value['nome'];?>
 />
          <?php } else { ?>
          <img src=<?php echo $_smarty_tpl->tpl_vars['defaultpic']->value;?>
 alt=<?php echo $_smarty_tpl->tpl_vars['topicInfo']->value['nome'];?>
 />
          <?php }?>
        </div>
        <div class="page-feed-content">
          <small class="time"><?php echo $_smarty_tpl->tpl_vars['topicInfo']->value['username'];?>
, <?php echo $_smarty_tpl->tpl_vars['topicInfo']->value['dcriacao'];?>
</small>
          <p><?php echo $_smarty_tpl->tpl_vars['topicInfo']->value['descricao'];?>
</p>

        </div>
      </div>
    </div>
  </div>
  <?php  $_smarty_tpl->tpl_vars['resposta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resposta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['respostas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resposta']->key => $_smarty_tpl->tpl_vars['resposta']->value) {
$_smarty_tpl->tpl_vars['resposta']->_loop = true;
?>
  <div class="box">
    <div class="avatar">
     <?php if ($_smarty_tpl->tpl_vars['topicInfo']->value['profilepic']) {?>
     <img src=<?php echo $_smarty_tpl->tpl_vars['resposta']->value['profilepic'];?>
 alt=<?php echo $_smarty_tpl->tpl_vars['resposta']->value['nome'];?>
 />
     <?php } else { ?>
     <img src=<?php echo $_smarty_tpl->tpl_vars['defaultpic']->value;?>
 alt=<?php echo $_smarty_tpl->tpl_vars['resposta']->value['nome'];?>
 />
     <?php }?>
   </div>
   <div class="page-feed-content">
    <small class="time"><?php echo $_smarty_tpl->tpl_vars['resposta']->value['username'];?>
, <?php echo $_smarty_tpl->tpl_vars['resposta']->value['dcriacaor'];?>
</small>
    <p>Linux is a Unix-like and POSIX-compliant computer operating system assembled under the model of free and open source software development and distribution. Maemo - Software platform developed by Nokia and then handed over to Hildon Foundation for smartphones and Internet tablets</p>

  </div>
</div>
<?php } ?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
