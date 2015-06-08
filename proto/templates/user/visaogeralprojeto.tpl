{include file='common/header.tpl'}

<script type="text/javascript" src="../../javascript/searchUser.js"></script>

<div class="mid-container">
  <div class="row">
    <div id="breadcrumb" class="col-xs-12">
      <ol class="breadcrumb pull-left">
        <li><a href="visaopessoal.php">Visao Pessoal</a></li>
        <li><a href="projeto.php">Visao Projeto</a></li>

    </ol>
</div>
<!-- Main Body -->

<div class="intro-header">
    <div class="container"  >

        <div id="wrapper">

            <div id="page-wrapper">


                <div class="row">
                    <div class="col-lg-12" >
                        <div class="panel panel-default" id="editBox">
                            <div class="panel-heading">
                               {$projName}
                           </div>
                           <!-- .panel-heading -->


                           <div class="panel-body">
                              <H4 class="text-center">Categorias:</H4>
                              <br>
                              <div class="panel-group" id="accordion">
                                {foreach $categories as $cat}
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">{$cat.nomecat}</a>
                                        </h4>
                                    </div>
                                    <!-- para obter as tarefas dentro de uma dada categoria (não está a funcionar) --> 

                                    <div id="collapseOne" class="panel-collapse collapse in">

                                        {foreach $chores as $chore}
                                        {if $chore.idcat===$cat.idcat}
                                        <div class="panel-body">
                                            <a href={$chore.idcat} data-toggle="tab">{$chore.nometarefa} </a>
                                        </div>
                                        {/if}

                                        {/foreach}

                                    </div>
                                    <!-- aqui vem o fim do foreach do $chores -->

                                </div>
                                {/foreach}
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                       <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Adicionar categoria
                                        </a>
                                    </div>
                                </h4>
                            </div>

                            <div id="collapseOne" class="panel-collapse collapse in">

                                <form action="../../actions/novacategoria.php" method="post" enctype="multipart/form-data">
                                    <div class="panel-body">
                                        <div class="form-group col-lg-6 style="float: none;" ">
                                            <label>Titúlo da categoria</label>
                                            <input type="text" name="titulo" class="form-control" id="title" value="" >
                                            <button type="submit" class="btn btn-primary" >Submeter</button>
                                        </div>
                                        <input type="hidden" name="idprojeto" value="{$idproj}">
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>  


                <!-- .panel-body -->
            </div>

        </section>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<br>
{if $role ne 'colaborador'}
<form method="post" action="../../actions/novocolaborador.php">
    <div class="row infos">
        <div class="box-content">
            <H4 class="text-center">Insira o username de um utilizador para o adicionar ao projeto como colaborador</H4>
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
                        <input type="hidden" name="idprojeto" value="{$idproj}">

                        <button class="btn btn-primary btn-lg btn-block" type="submit" >Adicionar utilizador</button>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
{/if}


<br>
{foreach $chores as $chore}
<!-- /.row -->
<div class="row">

    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 >{$chore.nometarefa}</h4>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="##description{$chore.idtarefa}" data-toggle="tab">Descrição</a>
                    </li>
                    <li><a href="#colaboradores{$chore.idtarefa}" data-toggle="tab">Colaboradores Escalonados</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="description{$chore.idtarefa}">
                        <p>{$chore.descricaotarefa}</p>
                    </div>
                    <div class="tab-pane fade" id="colaboradores{$chore.idtarefa}">

                        {foreach $assignements as $assignement}
                        {if $assignement.idtarefa eq $chore.idtarefa }
                        <p><a href="{$BASE_URL}pages/user/perfil.php?userid={$assignement.iduser}">
                            {$assignement.nome}
                        </a>
                    </p>
                    {/if}

                    {/foreach}
                </div>

            </div>
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
{/foreach}

<br>
<br>
<a href="http://paginas.fe.up.pt/~ei12037/LBAW/proto/pages/user/forum.php?idprojeto={$idproj}">
    <button class="btn btn-primary btn-lg btn-block" >Fórum</button>
</a>
<br>
<br>

<div class="row">
    <div class="col-lg-12" >
        <div class="panel panel-default" id="editBox">
            <div class="panel-heading">
               Gerir permissões
           </div>
       </div>
   </div>
</div>
<div class="panel-body">
    {foreach $allroles as $roleUsers}
    
    <p class="text-center"> 
        {$roleUsers.username} - {$roleUsers.funcaoproj} 
        {if role eq 'Master'}
        <button type="button" class="btn btn-default btn-xs glyphicon glyphicon-name">Despromover a colaborador</button>

        {/if}

        {if $role neq 'Colaborador'}

        <button type="button" class="btn btn-default btn-xs">Promover a Coordenador</button>
        {/if}
    </p>
    {/foreach}
</div>
{include file='common/footer.tpl'}