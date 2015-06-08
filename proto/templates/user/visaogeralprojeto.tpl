{include file='common/header.tpl'}

<script type="text/javascript" src="../../javascript/searchUser.js"></script>

<div class="mid-container">
	<div class="row">
		<div id="breadcrumb" class="col-xs-12">
			<ol class="breadcrumb pull-left">
				<li><a href="{$BASE_URL}pages/user/visaopessoal.php">Visao Pessoal</a></li>
				<li><a
					href="{$BASE_URL}pages/user/visaogeralprojeto.php?idprojeto={$idproj}">Visao
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
									<div class="panel-heading">{$projName}</div>
									<!-- .panel-heading -->


									<div class="panel-body">
										<H4 class="text-center">Categorias:</H4>
										<br>
										<div class="panel-group" id="accordion">
											{foreach $categories as $cat}
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">

														<br>
														<h4>{$cat.nomecat}</h4>
														<br>


													</h4>
												</div>
											</div>

											<div id="collapseOne" class="panel-collapse collapse in">

												{foreach $chores as $chore} {if $chore.idcat===$cat.idcat}
												<div class="panel-body chore" >
													<a href="#sel{$chore.idtarefa}" data-toggle="tab">{$chore.nometarefa}
													</a>
												</div>
												{/if} {/foreach} {if $role neq 'Colaborador'}
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
																		type="hidden" name="idcategoria" value="{$cat.idcat}">
																	<input type="hidden" name="idcriador" value="{$USERID}">
																	<input type="hidden" name="estado" value="Execucao"> <input
																		type="hidden" name="tipo" value="Aceite"> <input
																		type="hidden" name="idaceitepor" value="{$USERID}"> <input
																		type="date" name="dfinal">
																	<button type="submit" class="btn btn-primary">Submeter</button>
																</div>
																<input type="hidden" name="idprojeto" value="{$idproj}">
															</div>
														</form>
													</div>
													{/if}
												</div>
												<!-- aqui vem o fim do foreach do $chores -->

											</div>
											{/foreach}
										</div>
										{if $role neq 'Colaborador'}
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
														<input type="hidden" name="idprojeto" value="{$idproj}">
													</div>
												</form>
											</div>
											{/if}
										</div>
									</div>


									<!-- .panel-body -->
								</div>

								</section>
								<!-- /.panel -->
							</div>
							<!-- /.col-lg-12 -->
						</div>
						<br> {if $role neq 'Colaborador'}
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
												<input type="hidden" name="idprojeto" value="{$idproj}">

												<button class="btn btn-primary btn-lg btn-block"
													type="submit">Adicionar utilizador</button>
												<br>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
						{/if} <br>

						<div class="row">
							{foreach $chores as $chore}
							<!-- /.row -->

							<div class="col-lg-4">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 id="sel{$chore.idtarefa}">{$chore.nometarefa}</h4>
									</div>
									<!-- /.panel-heading -->
									<div class="panel-body">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs">
											<li class="active"><a href="##description{$chore.idtarefa}"
												data-toggle="tab">Descrição</a></li>
											<li><a href="#colaboradores{$chore.idtarefa}"
												data-toggle="tab">Colaboradores Escalonados</a></li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">
											<div class="tab-pane fade in active"
												id="description{$chore.idtarefa}">
												<p>{$chore.descricaotarefa}</p>
											</div>
											<div class="tab-pane fade"
												id="colaboradores{$chore.idtarefa}">

												{foreach $assignements as $assignement} {if
												$assignement.idtarefa eq $chore.idtarefa }
												<p>
													<a
														href="{$BASE_URL}pages/user/perfil.php?userid={$assignement.iduser}">
														{$assignement.nome} </a>
												</p>
												{/if} {/foreach}
											</div>

										</div>
									</div>
									<!-- /.panel-body -->
									{if $role neq 'Colaborador'} <br> <br>
									<form action="../../actions/allocateUserTask.php" method="post">
										<label>Username</label> <input type="text" name="username"
											class="form-control" value="" required> <input type="hidden"
											name="tarefaid" value={$chore.idtarefa}> <input type="hidden"
											name="projetoid" value={$idproj}>
										<button class="btn btn-primary btn-lg btn-block" type="submit">Alocar
											colaborador</button>

									</form>
									<br> <br> {/if}
								</div>
							</div>


							<!-- /.panel -->
							<!-- /.col-lg-6 -->
							{/foreach} <br> <br>
						</div>
						<div class="span4 offset6">
							<a href="{$BASE_URL}pages/user/forum.php?idprojeto={$idproj}">
								<button class="btn btn-primary btn-lg btn-block ">Fórum</button>
							</a>
						</div>
						<br> <br>

						<div class="row">
							<div class="col-lg-12">
								<div class="panel panel-default" id="editBox">
									<div class="panel-heading">{if $role neq 'Colaborador'} Gerir
										permissões {else} Utilizadores associados ao projeto {/if}</div>
								</div>
							</div>
						</div>
						<div class="panel-body">
							{foreach $allroles as $roleUsers}
							<form action="../../actions/promoteToCoord.php" method="post">
								<p class="text-center">
									{$roleUsers.username} - {$roleUsers.funcaoproj} {if $role neq
									'Colaborador'} {if $roleUsers.funcaoproj eq 'Colaborador'} <input
										type="hidden" name="iduser" value={$roleUsers.iduser}> <input
										type="hidden" name="idproj" value={$idproj}>
									<button type="submit" class="btn btn-default btn-xs">Promover a
										Coordenador</button>


									{/if} {/if}
								</p>
							</form>
							{/foreach}

						</div>
						{include file='common/footer.tpl'}