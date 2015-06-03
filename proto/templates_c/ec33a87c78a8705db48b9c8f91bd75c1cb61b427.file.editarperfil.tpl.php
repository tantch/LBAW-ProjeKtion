<?php /* Smarty version Smarty-3.1.15, created on 2015-05-29 12:29:23
         compiled from "/usr/users2/mieic2012/ei12037/public_html/proto/templates/user/editarperfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13827775075568322add48f3-92484200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec33a87c78a8705db48b9c8f91bd75c1cb61b427' => 
    array (
      0 => '/usr/users2/mieic2012/ei12037/public_html/proto/templates/user/editarperfil.tpl',
      1 => 1432895361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13827775075568322add48f3-92484200',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5568322ae6e8f0_17313467',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5568322ae6e8f0_17313467')) {function content_5568322ae6e8f0_17313467($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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

              <form class=" " enctype="multipart/form-data">
                <div class="form-group">
                  <label for="fullname">Full Name:</label>
                  <input class="form-control" name="name" type="text" value="Adrian Demian" id="fullname">
                </div>
                <div class="form-group">
                  <label for="email">Phone:</label>
                  <input class="form-control" name="phone" type="text" id="phone" placeholder="Enter your phone number">
                </div>

                <div class="form-group">
                  <label for="email">Email:</label>
                  <input class="form-control" name="email" type="email" value="contact@mosaicpro.biz" id="email">
                </div>

                <div class="form-group">
                  <label for="password">Password:</label>
                  <input class="form-control" name="password" type="password" value="password" id="password">
                </div>

                <div class="form-group">
                  <label for="password_confirmation">Password Confirmation:</label>
                  <input class="form-control" name="password_confirmation" type="password" value="" id="password_confirmation">
                </div>

                <div class="form-group">

                  <input align="center" id="picture" class="file" type="file" multiple data-min-file-count="1">
                  <br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-default">Reset</button>

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
