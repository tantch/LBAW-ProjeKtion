<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 00:52:12
         compiled from "/usr/users2/deec/ei07122/public_html/LBAW/proto/templates/user/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1755971513557484cd398f72-25232234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea6feaefe0878c1eff9f5e70901b182df0fc0431' => 
    array (
      0 => '/usr/users2/deec/ei07122/public_html/LBAW/proto/templates/user/register.tpl',
      1 => 1433717531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1755971513557484cd398f72-25232234',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_557484cd41aba8_39266882',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557484cd41aba8_39266882')) {function content_557484cd41aba8_39266882($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script src="../../javascript/register_vale.js"></script>
<script src="../../javascript/register_help.js"></script>

<a name="registar"></a>

<div class="intro-header">

  <div class="container">

    <div class="row">

      <div class="col-lg-12">
        <button class ="btn btn-primary" OnClick="help()">Ajuda</button>
        <div id="registerBox"class="panel panel-default">

          <form action="../../actions/register.php" method="post" enctype="multipart/form-data">
            <section class="container">
              <div class="container-page">

                <div class="col-md-6">
                  <h3 class="dark-grey">Registo</h3>
                   

                  <div class="form-group col-lg-12">
                    <label>Username</label>
                    <input type="" name="username" class="form-control" id="username" value="" data-intro=" Introduza o Username com o qual se pretende registar, utilize no maximo 20 caracteres alfanumericos" data-position="top">
                  </div>

                  <div class="form-group col-lg-12">
                    <label>Full Name</label>
                    <input type="" name="name" class="form-control" id="name" value=""  data-intro="Introduza o Nome Completo com o qual se pretende registar, utilize no maximo 20 caracteres alfanumericos" data-position="right">
                    <br><br><br><br>                   
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" id="pass" value="" data-intro="Introduza a Password que vai utilizar para se autenticar no sistema, entre 4 a 12 caracteres" data-position="top">
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Repetir Password</label>
                    <input type="password" name="rpassword" class="form-control" id="cpass" value=""  data-intro="Introduza a mesma password para efeitos de confirmacao" data-intro="Termos e condições do serviço" data-position="top">
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Endereço de Email</label>
                    <input type="email" name="email" class="form-control" id="email" value=""  data-intro="Introduza o Email para o qual pretende ser notificado." data-intro="Termos e condições do serviço" data-position="bottom">
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Repetir Endereço de Email</label>
                    <input type="email" name="remail" class="form-control" id="cemail" value="" data-intro="Repita o Email para confirmar" data-position="bottom">
                  </div>

                </div>
                <div class="col-md-6"  >
                  <h3 class="dark-grey" data-intro="Termos e condições do serviço" data-position="top">Termos e Condições</h3>
                  <ul>
                    <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
                    <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
                    <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
                    <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
                  </ul>
                  <button type="submit" class="btn btn-primary" OnClick="return validate(this);">Registar</button>
                </form>
                <div data-intro="Para qualquer duvida, questao ou sugestao por favor contacte-nos pelo nosso email: projektion@projektion.com"></div>

              </div>
            </div>
          </section>


        </div>
      </div>
    </div>

  </div>
  <!-- /.container -->

</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
