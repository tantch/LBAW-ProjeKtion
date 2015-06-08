<?php /* Smarty version Smarty-3.1.15, created on 2015-06-09 00:09:08
         compiled from "/usr/users2/mieic2012/ei12019/public_html/proto/templates/user/visaogeralprojeto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204624248855760cc7b3dce6-87888533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d595b953d2dee29e5821a5f30ab4b0798bfcc5b' => 
    array (
      0 => '/usr/users2/mieic2012/ei12019/public_html/proto/templates/user/visaogeralprojeto.tpl',
      1 => 1433801294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204624248855760cc7b3dce6-87888533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55760cc7cc8652_44159741',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'idproj' => 0,
    'projName' => 0,
    'categories' => 0,
    'cat' => 0,
    'chores' => 0,
    'chore' => 0,
    'role' => 0,
    'USERID' => 0,
    'assignements' => 0,
    'assignement' => 0,
    'allroles' => 0,
    'roleUsers' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55760cc7cc8652_44159741')) {function content_55760cc7cc8652_44159741($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript" src="../../javascript/searchUser.js"></script>

<div class="mid-container">
	<div class="row">
		<div id="breadcrumb" class="col-xs-12">
			<ol class="breadcrumb pull-left">
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/visaopessoal.php">Visao Pessoal</a></li>
				<li><a
					href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/visaogeralprojeto.php?idprojeto=<?php echo $_smarty_tpl->tpl_vars['idproj']->value;?>
">Visao
						Projeto</a></li>

			</ol>
		</div>
		<!-- Main Body -->

		<div class="intro-header">
			<div class="container">

				<div id="wrapper">

					<div id="page-wrapper">


						<div class="row">
							<div class="col-lg-12">
								<div class="panel panel-default" id="editBox">
									<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['projName']->value;?>
</div>
									<!-- .panel-heading -->


									<div class="panel-body">
										<H4 class="text-center">Categorias:</H4>
										<br>
										<div class="panel-group" id="accordion">
											<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">

														<br>
														<h4><?php echo $_smarty_tpl->tpl_vars['cat']->value['nomecat'];?>
</h4>
														<br>


													</h4>
												</div>
											</div>

											<div id="collapseOne" class="panel-collapse collapse in">

												<?php  $_smarty_tpl->tpl_vars['chore'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chore']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chore']->key => $_smarty_tpl->tpl_vars['chore']->value) {
$_smarty_tpl->tpl_vars['chore']->_loop = true;
?> <?php if ($_smarty_tpl->tpl_vars['chore']->value['idcat']===$_smarty_tpl->tpl_vars['cat']->value['idcat']) {?>
												<div class="panel-body chore" >
													<a href="#sel<?php echo $_smarty_tpl->tpl_vars['chore']->value['idtarefa'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['chore']->value['nometarefa'];?>

													</a>
												</div>
												<?php }?> <?php } ?> <?php if ($_smarty_tpl->tpl_vars['role']->value!='Colaborador') {?>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<div class="panel-heading">
																<a data-toggle="collapse" data-parent="#accordion"
																	href="#collapseOne">Adicionar tarefa </a>
															</div>
														</h4>
													</div>

													<div class="span8 offset2"id="collapseOne" class="panel-collapse collapse in">


														<form action="../../actions/novatarefa.php" method="post"
															enctype="multipart/form-data">
															<div class="panel-body">
																<div class="form-group col-lg-6 style="float:none;" ">
																	<label>Nome da tarefa</label> <input type="text"
																		name="nometarefa" class="form-control" id="title"
																		value="" required> <label>Descrição da tarefa.</label>
																	<input type="text" name="descricaotarefa"
																		class="form-control" id="title" value="" required> <input
																		type="hidden" name="idcategoria" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['idcat'];?>
">
																	<input type="hidden" name="idcriador" value="<?php echo $_smarty_tpl->tpl_vars['USERID']->value;?>
">
																	<input type="hidden" name="estado" value="Execucao"> <input
																		type="hidden" name="tipo" value="Aceite"> <input
																		type="hidden" name="idaceitepor" value="<?php echo $_smarty_tpl->tpl_vars['USERID']->value;?>
"> <input
																		type="date" name="dfinal">
																	<button type="submit" class="btn btn-primary">Submeter</button>
																</div>
																<input type="hidden" name="idprojeto" value="<?php echo $_smarty_tpl->tpl_vars['idproj']->value;?>
">
															</div>
														</form>
													</div>
													<?php }?>
												</div>
												<!-- aqui vem o fim do foreach do $chores -->

											</div>
											<?php } ?>
										</div>
										<?php if ($_smarty_tpl->tpl_vars['role']->value!='Colaborador') {?>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<div class="panel-heading">
														<a data-toggle="collapse" data-parent="#accordion"
															href="#collapseOne">Adicionar categoria </a>
													</div>
												</h4>
											</div>

											<div id="collapseOne" class="panel-collapse collapse in">

												<form action="../../actions/novacategoria.php" method="post"
													enctype="multipart/form-data">
													<div class="panel-body">
														<div class="form-group col-lg-6 style="float:none;" ">
															<label>Titúlo da categoria</label> <input type="text"
																name="titulo" class="form-control" id="title" value="">
															<button type="submit" class="btn btn-primary">Submeter</button>
														</div>
														<input type="hidden" name="idprojeto" value="<?php echo $_smarty_tpl->tpl_vars['idproj']->value;?>
">
													</div>
												</form>
											</div>
											<?php }?>
										</div>
									</div>


									<!-- .panel-body -->
								</div>

								</section>
								<!-- /.panel -->
							</div>
							<!-- /.col-lg-12 -->
						</div>
						<br> <?php if ($_smarty_tpl->tpl_vars['role']->value!='Colaborador') {?>
						<form method="post" action="../../actions/novocolaborador.php">
							<div class="row infos">
								<div class="box-content">
									<H4 class="text-center">Insira o username de um utilizador para
										o adicionar ao projeto como colaborador</H4>
									<div id="messages" class="container-fluid">
										<div class="row" id="test">
											<div class="col-sm-6 col-sm-offset-3">
												<form class="" id="searchForm" method="get">
													<div class="form-group">
														<input class="form-control" type="text" id="usersearch"
															name="usersearch" onfocus="this.value = this.value">
													</div>
													<input type="submit" hidden="true">
												</form>
												<div id="results">
													<br>
												</div>
												<input type="hidden" name="idprojeto" value="<?php echo $_smarty_tpl->tpl_vars['idproj']->value;?>
">

												<button class="btn btn-primary btn-lg btn-block"
													type="submit">Adicionar utilizador</button>
												<br>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php }?> <br>

						<div class="row">
							<?php  $_smarty_tpl->tpl_vars['chore'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chore']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chore']->key => $_smarty_tpl->tpl_vars['chore']->value) {
$_smarty_tpl->tpl_vars['chore']->_loop = true;
?>
							<!-- /.row -->

							<div class="col-lg-4">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 id="sel<?php echo $_smarty_tpl->tpl_vars['chore']->value['idtarefa'];?>
"><?php echo $_smarty_tpl->tpl_vars['chore']->value['nometarefa'];?>
</h4>
									</div>
									<!-- /.panel-heading -->
									<div class="panel-body">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs">
											<li class="active"><a href="##description<?php echo $_smarty_tpl->tpl_vars['chore']->value['idtarefa'];?>
"
												data-toggle="tab">Descrição</a></li>
											<li><a href="#colaboradores<?php echo $_smarty_tpl->tpl_vars['chore']->value['idtarefa'];?>
"
												data-toggle="tab">Colaboradores Escalonados</a></li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">
											<div class="tab-pane fade in active"
												id="description<?php echo $_smarty_tpl->tpl_vars['chore']->value['idtarefa'];?>
">
												<p><?php echo $_smarty_tpl->tpl_vars['chore']->value['descricaotarefa'];?>
</p>
											</div>
											<div class="tab-pane fade"
												id="colaboradores<?php echo $_smarty_tpl->tpl_vars['chore']->value['idtarefa'];?>
">

												<?php  $_smarty_tpl->tpl_vars['assignement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['assignement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['assignements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['assignement']->key => $_smarty_tpl->tpl_vars['assignement']->value) {
$_smarty_tpl->tpl_vars['assignement']->_loop = true;
?> <?php if ($_smarty_tpl->tpl_vars['assignement']->value['idtarefa']==$_smarty_tpl->tpl_vars['chore']->value['idtarefa']) {?>
												<p>
													<a
														href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/perfil.php?userid=<?php echo $_smarty_tpl->tpl_vars['assignement']->value['iduser'];?>
">
														<?php echo $_smarty_tpl->tpl_vars['assignement']->value['nome'];?>
 </a>
												</p>
												<?php }?> <?php } ?>
											</div>

										</div>
									</div>
									<!-- /.panel-body -->
									<?php if ($_smarty_tpl->tpl_vars['role']->value!='Colaborador') {?> <br> <br>
									<form action="../../actions/allocateUserTask.php" method="post">
										<label>Username</label> <input type="text" name="username"
											class="form-control" value="" required> <input type="hidden"
											name="tarefaid" value=<?php echo $_smarty_tpl->tpl_vars['chore']->value['idtarefa'];?>
> <input type="hidden"
											name="projetoid" value=<?php echo $_smarty_tpl->tpl_vars['idproj']->value;?>
>
										<button class="btn btn-primary btn-lg btn-block" type="submit">Alocar
											colaborador</button>

									</form>
									<br> <br> <?php }?>
								</div>
							</div>


							<!-- /.panel -->
							<!-- /.col-lg-6 -->
							<?php } ?> <br> <br>
						</div>
						<div class="span4 offset6">
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/forum.php?idprojeto=<?php echo $_smarty_tpl->tpl_vars['idproj']->value;?>
">
								<button class="btn btn-primary btn-lg btn-block ">Fórum</button>
							</a>
						</div>
						<br> <br>

						<div class="row">
							<div class="col-lg-12">
								<div class="panel panel-default" id="editBox">
									<div class="panel-heading"><?php if ($_smarty_tpl->tpl_vars['role']->value!='Colaborador') {?> Gerir
										permissões <?php } else { ?> Utilizadores associados ao projeto <?php }?></div>
								</div>
							</div>
						</div>
						<div class="panel-body">
							<?php  $_smarty_tpl->tpl_vars['roleUsers'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['roleUsers']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allroles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['roleUsers']->key => $_smarty_tpl->tpl_vars['roleUsers']->value) {
$_smarty_tpl->tpl_vars['roleUsers']->_loop = true;
?>
							<form action="../../actions/promoteToCoord.php" method="post">
								<p class="text-center">
									<?php echo $_smarty_tpl->tpl_vars['roleUsers']->value['username'];?>
 - <?php echo $_smarty_tpl->tpl_vars['roleUsers']->value['funcaoproj'];?>
 <?php if ($_smarty_tpl->tpl_vars['role']->value!='Colaborador') {?> <?php if ($_smarty_tpl->tpl_vars['roleUsers']->value['funcaoproj']=='Colaborador') {?> <input
										type="hidden" name="iduser" value=<?php echo $_smarty_tpl->tpl_vars['roleUsers']->value['iduser'];?>
> <input
										type="hidden" name="idproj" value=<?php echo $_smarty_tpl->tpl_vars['idproj']->value;?>
>
									<button type="submit" class="btn btn-default btn-xs">Promover a
										Coordenador</button>


									<?php }?> <?php }?>
								</p>
							</form>
							<?php } ?>

						</div>
						<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
