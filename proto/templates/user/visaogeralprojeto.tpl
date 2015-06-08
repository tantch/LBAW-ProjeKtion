{include file='common/header.tpl'}

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
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
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
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container-->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
</div>

{include file='common/footer.tpl'}