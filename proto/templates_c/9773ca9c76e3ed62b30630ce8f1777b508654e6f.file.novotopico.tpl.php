<?php /* Smarty version Smarty-3.1.15, created on 2015-06-06 02:04:39
         compiled from "/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/novotopico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1774795137557251f3959e39-09823151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9773ca9c76e3ed62b30630ce8f1777b508654e6f' => 
    array (
      0 => '/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/novotopico.tpl',
      1 => 1433556275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1774795137557251f3959e39-09823151',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_557251f39e1c68_34307727',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'idproj' => 0,
    'nomeproj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557251f39e1c68_34307727')) {function content_557251f39e1c68_34307727($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



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
      <!--  <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>-->
      </div>
    </div>
  </div>


    <!-- Header -->
    <a name="novoprojeto"></a>
    <div class="intro-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div id="registerBox" class="panel panel-default">
              <h2 class="">Novo tópico</h2>
              <form id="surveyForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/create_topic.php" class="form-horizontal">

                <div class="form-group col-lg-12">
                  <label>Titulo do tópico</label>
                  <input type="" name="name" class="form-control" id="" value="" required>
                </div>

                <div class="form-group col-lg-12">
                  <label>Texto</label>
                  <textarea class="form-control" name="description" form="surveyForm" style="height=200 px;">Digite o seu texto.</textarea>
                </div>
                <div class="form-group">
                  <div class="col-xs-2 col-xs-offset-5">
                    <button type="submit" class="btn btn-default">Criar tópico</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
