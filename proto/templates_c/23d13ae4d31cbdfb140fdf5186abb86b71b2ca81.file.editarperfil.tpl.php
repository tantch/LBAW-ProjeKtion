<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 02:37:17
         compiled from "/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/editarperfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:944147459556f1241765e93-84567812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23d13ae4d31cbdfb140fdf5186abb86b71b2ca81' => 
    array (
      0 => '/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/editarperfil.tpl',
      1 => 1433637434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '944147459556f1241765e93-84567812',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556f12417f1ab5_63316410',
  'variables' => 
  array (
    'view_nome' => 0,
    'view_morada' => 0,
    'view_dnascimento' => 0,
    'view_telefone' => 0,
    'view_email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556f12417f1ab5_63316410')) {function content_556f12417f1ab5_63316410($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="mid-container">
  <div class="row">
    <div id="breadcrumb" class="col-xs-12">
      <ol class="breadcrumb pull-left">
        <li><a href="visaopessoal.html">Visao Pessoal</a></li>
        <li><a href="editarperfil.html">Editar Perfil</a></li>

      </ol>
    </div>

    <!-- Header -->



    <div class="intro-header">
      <div class="row">

        <div id="editBox" class="col-lg-12">
          <div  class="panel panel-body">

            <div class="col-sm-6 col-centered">

              <form class=" " enctype="multipart/form-data" action="../../actions/editarperfil.php" method="post">
                <div class="form-group">
                  <label for="fullname">Name:</label>
                  <input class="form-control" name="fullname" type="text" id="fullname" value="<?php echo $_smarty_tpl->tpl_vars['view_nome']->value;?>
">
                </div>
                <div class="form-group">
                  <label for="address">Address:</label>
                  <input class="form-control" name="address" type="text" id="address" value="<?php echo $_smarty_tpl->tpl_vars['view_morada']->value;?>
"  >
                </div>
                <div class="form-group">
                  <label for="dnascimento">Birth date:</label>
                  <input class="form-control" name="dnascimento" type="date"  id="dnascimento" value="<?php echo $_smarty_tpl->tpl_vars['view_dnascimento']->value;?>
">
                </div>
                <div class="form-group">
                  <label for="dnascimento">Genre:</label>
                  <p> Male <input class="form-control" name="genre" type="radio"  id="genre" value="M">
                    Female <input class="form-control" name="genre" type="radio"  id="genre" value="F" checked>
                  </div>
                  <div class="form-group">
                    <label for="email">Phone:</label>
                    <input class="form-control" name="phone" type="text" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['view_telefone']->value;?>
">
                  </div>

                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" name="email" type="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['view_email']->value;?>
">
                  </div>

                  <div class="form-group">
                    <label for="password">*Password:</label>
                    <input class="form-control" name="password" type="password" value="password" id="password" required>
                  </div>

                  <div class="form-group">

                    <label for="picture">Profile picture:</label><br>
                    <span class="btn btn-default btn-file" >


                      Procurar imagem


                      <input type="file" name="picture" id="picture"><br>
                    </span>
                    
                  </div>


                  <div class="checkbox">
                    <label for="notify">
                      <input id="notify" checked="checked" name="notify" type="checkbox">
                      Email me with updates about current projects.
                    </label>
                  </div>

                  <div class="separator"></div>
                  <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Update Profile"></div>
                  </form>
                </div>


                <div class="col-sm-6 col-centered">

                  <div class="well span3" align="center" id="infoEditar">
                    <h4>Additional Information</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aspernatur assumenda at commodi dolorem eos eum exercitationem facere ipsum mollitia nemo perspiciatis quaerat qui quidem, quod repellat repudiandae sed veritatis voluptate? Eos necessitatibus non rem repudiandae similique vero voluptatem?</p>
                  </div>
                </div>


              </div>
            </div>

          </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
