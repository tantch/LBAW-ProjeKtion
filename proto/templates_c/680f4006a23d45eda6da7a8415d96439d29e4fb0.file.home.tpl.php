<?php /* Smarty version Smarty-3.1.15, created on 2015-06-03 16:41:59
         compiled from "/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1713528717556f1237cb8dd3-30479797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '680f4006a23d45eda6da7a8415d96439d29e4fb0' => 
    array (
      0 => '/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/home.tpl',
      1 => 1431650140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1713528717556f1237cb8dd3-30479797',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556f1237e29716_07257692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556f1237e29716_07257692')) {function content_556f1237e29716_07257692($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script src="../../javascript/login_vale.js"></script>

<a name="login" ></a>
<div class="intro-header">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <div  id="loginBox" class="panel panel-default">
          <div class="panel-body">
            <h1 class="text-center">Login</h1>
          </div>
          <form class="form col-md-12 center-block" method="post" action="../../actions/login.php" enctype="multipart/form-data" name="form" >
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Username" name="inpt_username" id="inpt_username" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" name="inpt_pass" id="inpt_pass" required>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" type="submit" onClick="return validate();">Sign In</button>
              <span class="pull-right"><a href="register.php">Registar</a></span>
              <span class="pull-left"><a href="#faq">Need help?</a></span>
            </div>
          </form>
          <div class="panel-body">
          </div>

        </div>
      </div>
    </div>

  </div>
  <!-- /.container -->

</div>
<!-- /.intro-header -->

<!-- Page Content -->

<a  name="oquefazemos"></a>
<div class="content-section-a">

  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-sm-6">
        <hr class="section-heading-spacer">
        <div class="clearfix"></div>
        <h2 class="section-heading">O Que Fazemos<br>ProjeKtion</h2>
        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
      </div>
      <div class="col-lg-5 col-lg-offset-2 col-sm-6">
        <img class="img-responsive" src="../../images/ipad.png" alt="">
      </div>
    </div>

  </div>
  <!-- /.container -->

</div>
<!-- /.content-section-a -->


<!-- /.content-section-b -->

<div class="content-section-a">

  <div class="container">

    <div class="row">
      <div class="col-lg-5 col-sm-6">
        <hr class="section-heading-spacer">
        <div class="clearfix"></div>
        <h2 class="section-heading">Ágil<br>E simples</h2>
        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </div>
      <div class="col-lg-5 col-lg-offset-2 col-sm-6">
        <img class="img-responsive" src="../../images/phones.png" alt="">
      </div>
    </div>

  </div>
  <!-- /.container -->

</div>
<!-- /.content-section-a -->

<a name="faq" ></a>

<div class="content-section-a" id="faq">

  <div class="container">

    <div class="row">
      <div class="col-lg-5 col-sm-6">
        <hr class="section-heading-spacer">
        <div class="clearfix"></div>
        <h2 class="section-heading">FAQ <br> Frequent Asked Questions</h2>
        <p class="lead">
          <dl>
            <dt>Definition list</dt>
            <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
              aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat.</dd>
              <dt>Lorem ipsum dolor sit amet</dt>
              <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.</dd>
              </dl>
            </p>
          </div>

        </div>

      </div>
      <!-- /.container -->

    </div>






    <a  name="contactos"></a>

    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
