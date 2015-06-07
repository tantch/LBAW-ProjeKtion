<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 16:36:55
         compiled from "/usr/users2/deec/ei07122/public_html/LBAW/proto/templates/user/topico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5312384355747327dcaa87-99306539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e63d312c45f2b5fae1b13dcb212a999c6b8f4bf7' => 
    array (
      0 => '/usr/users2/deec/ei07122/public_html/LBAW/proto/templates/user/topico.tpl',
      1 => 1433692144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5312384355747327dcaa87-99306539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'idproj' => 0,
    'nomeproj' => 0,
    'topicInfo' => 0,
    'defaultpic' => 0,
    'respostas' => 0,
    'resposta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55747327ed3a04_49441114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55747327ed3a04_49441114')) {function content_55747327ed3a04_49441114($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Main Body -->

<div class="mid-container">

  <div class="row">
    <div id="breadcrumb" class="col-xs-12">
      <ol class="breadcrumb pull-left">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/user/visaogeralprojeto.php?idprojeto=<?php echo $_smarty_tpl->tpl_vars['idproj']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['nomeproj']->value;?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/user/forum.php?idprojeto=<?php echo $_smarty_tpl->tpl_vars['idproj']->value;?>
">Fórum</a></li>
        
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
    <p><?php echo $_smarty_tpl->tpl_vars['resposta']->value['texto'];?>
</p>

  </div>
</div>
<?php }
if (!$_smarty_tpl->tpl_vars['resposta']->_loop) {
?>
<div class="box">
<p> Ainda ninguém respondeu a este tópico</p>
</div>


<?php } ?>
<div class="form-group col-lg-12">
  <br>
  <form id="surveyForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/answer.php" class="form-horizontal">
   <label>Responda a este tópico</label>
   <textarea class="form-control" name="text" form="surveyForm" style="height=200 px;"></textarea>
   <input type="hidden" name="idprojeto" value=<?php echo $_smarty_tpl->tpl_vars['idproj']->value;?>
>
   <input type="hidden" name="idtopico" value=<?php echo $_smarty_tpl->tpl_vars['topicInfo']->value['idtopico'];?>
>
   <div class="col-xs-2 col-xs-offset-5">
     <br>
     <button type="submit" class="btn btn-default">Responder</button>
     <br>
   </div>
 </form>
</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
