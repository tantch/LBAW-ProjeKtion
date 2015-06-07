<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 01:00:13
         compiled from "/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/novoprojeto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60103339155737b7dec3cf5-33552696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4e47c6b3c04cd5c6c1b6ff152f21f76024aaaa5' => 
    array (
      0 => '/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/novoprojeto.tpl',
      1 => 1431651778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60103339155737b7dec3cf5-33552696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55737b7e073c15_69053238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55737b7e073c15_69053238')) {function content_55737b7e073c15_69053238($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="mid-container">
  <div class="row">
    <div id="breadcrumb" class="col-xs-12">
      <ol class="breadcrumb pull-left">
        <li><a href="visaopessoal.html">Visao Pessoal</a></li>
        <li><a href="projetonovo.html">Projeto Novo</a></li>
      </ol>
    </div>


    <!-- Header -->
    <a name="novoprojeto"></a>
    <div class="intro-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div id="registerBox" class="panel panel-default">
              <h2 class="">Novo Projeto</h2>
              <form id="surveyForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/create_project.php" class="form-horizontal">

                <div class="form-group col-lg-12">
                  <label>Nome do Projeto</label>
                  <input type="" name="name" class="form-control" id="" value="" required>
                </div>

                <div class="form-group col-lg-6">
                  <label>Data de Conclusão</label>
                  <input type="date" name="fdate" class="form-control" id="" value="" required>
                </div>
                <div class="form-group">
                  <div class="col-xs-2 col-xs-offset-5">
                    <button type="submit" class="btn btn-default">Criar Projeto</button>
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
