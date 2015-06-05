<?php /* Smarty version Smarty-3.1.15, created on 2015-06-05 20:11:32
         compiled from "/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7732909685570d4352551f2-62564426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec004d6d18b68dd62010dc5854b28da757b54db8' => 
    array (
      0 => '/usr/users2/mieic2012/ei12037/public_html/LBAW/proto/templates/user/admin.tpl',
      1 => 1433527873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7732909685570d4352551f2-62564426',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5570d4352e51f4_33129477',
  'variables' => 
  array (
    'numero_users' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5570d4352e51f4_33129477')) {function content_5570d4352e51f4_33129477($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/justified-gallery/jquery.justifiedGallery.min.js"></script>
<script src="plugins/tinymce/tinymce.min.js"></script>
<script src="plugins/tinymce/jquery.tinymce.min.js"></script>
<!-- All functions for this theme + document.ready processing -->
<script src="js/devoops.js"></script>
<script type="text/javascript" src="../../javascript/searchUser.js"></script>


<br><br><br><br>
<div id="dashboard-header" class="row">
	<div class="col-xs-12 col-sm-8 col-md-3" style="text-align:center;">
		<h3>Admin Page Overview</h3>
	</div>
	<div class="col-xs-12 col-sm-4 col-md-5" style="margin:0 auto; text-align: left; text-align:center;">
		<table class="table table-bordered">
			<tr>
				<th><i class="fa fa-user">Users Online</i></th>
				<th>3</th>
			</tr>
			<tr>
				<th><i class="fa fa-users">Registed Users</i></th>
				<th><?php echo $_smarty_tpl->tpl_vars['numero_users']->value;?>
</th>
			</tr>
		</table>
	</div>

</div>

<div class="col-xs-11 col-sm-8 col-md-10">
	<div class="container">

		<div class="row infos">
			<div class="box-content">
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
		</div>


		<div class="container">

			<div class="row infos">
				<div class="box-content">
					<H2 class="text-center">Atividade recente</H2>
					<div id="messages" class="container-fluid">
						<div class="row" id="test">
							<div class="col-sm-6 col-sm-offset-3">
								<table class="table table-hover">
									<thead>
										<tr >
											<th><i class="fa fa-clock-o  fa-spin"></i></th>
											<th>Name</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>seconds ago</td>
											<td>User Register</td>
											<td>A new <a onclick="$('#ajax-content').empty();LoadAjaxContent('ajax/user1.html')" href="#">user</a> has registered by the name of "Pim"</td>
										</tr>
										<tr>
											<td>1 hour ago</td>
											<td>New Project</td>
											<td>A new project by the name "Cgra-1" has been created</td>
										</tr>
										<tr>
											<td>3 days ago</td>
											<td>Project Deleted</td>
											<td>The project "LBAW-22" has just been deleted</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
