<?php /* Smarty version Smarty-3.1.15, created on 2015-06-04 17:48:36
         compiled from "/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/procuraruser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1348202655705c4bb94698-98023106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c37088376783fdd61c729da0b08022f59b8a9baa' => 
    array (
      0 => '/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/procuraruser.tpl',
      1 => 1433432908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1348202655705c4bb94698-98023106',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55705c4bc03f55_57927990',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55705c4bc03f55_57927990')) {function content_55705c4bc03f55_57927990($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript" src="../../javascript/searchUser.js"></script>
<div class="mid-container">
	<div class="row">
		<div id="breadcrumb" class="col-xs-12">
			<ol class="breadcrumb pull-left">
				<li><a href="visaopessoal.html">Área Pessoal 2</a></li>

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
	<H2 class="text-center">Pesquisa de users</H2>
	<div id="messages" class="container-fluid">
		<div class="row" id="test">
			<div class="col-sm-6 col-sm-offset-3">
				<form class="" id="searchForm" method="get">
					<div class="form-group">
						<input class="form-control" type="text" id="usersearch" name="usersearch" onfocus="this.value = this.value" autofocus="autofocus">
					</div>
					<input type="submit" hidden="true">
				</form>
				<div id="results">
					<br>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
