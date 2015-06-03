<?php /* Smarty version Smarty-3.1.15, created on 2015-05-01 05:31:34
         compiled from "/usr/users2/mieic2012/ei12019/public_html/proto/templates/user/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18393238965542f267373660-60122635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d129f01a4fc16211012fd14e000a06d7a7f0422' => 
    array (
      0 => '/usr/users2/mieic2012/ei12019/public_html/proto/templates/user/register.tpl',
      1 => 1430451017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18393238965542f267373660-60122635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5542f267408852_02597371',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5542f267408852_02597371')) {function content_5542f267408852_02597371($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<a name="registar"></a>
<div class="intro-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div id="registerBox"class="panel panel-default">
          <form action="../../actions/register.php" method="post" enctype="multipart/form-data">
            <section class="container">
              <div class="container-page">
                <div class="col-md-6">
                  <h3 class="dark-grey">Registo</h3>

                  <div class="form-group col-lg-12">
                    <label>Username</label>
                    <input type="" name="username" class="form-control" id="" value="">
                  </div>

                  <div class="form-group col-lg-12">
                    <label>Full Name</label>
                    <input type="" name="name" class="form-control" id="" value="">
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" id="" value="">
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Repetir Password</label>
                    <input type="password" name="rpassword" class="form-control" id="" value="">
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Endereço de Email</label>
                    <input type="email" name="email" class="form-control" id="" value="">
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Repetir Endereço de Email</label>
                    <input type="email" name="remail" class="form-control" id="" value="">
                  </div>

                </div>
                <div class="col-md-6">
                  <h3 class="dark-grey">Termos e Condições</h3>
                  <ul>
                    <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
                    <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
                    <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
                    <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
                  </ul>
                  <button type="submit" class="btn btn-primary">Registar</button>
                </form>
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
