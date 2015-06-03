{include file='common/header.tpl'}

<div class="mid-container">
  <div class="row">
    <div id="breadcrumb" class="col-xs-12">
      <ol class="breadcrumb pull-left">
        <li><a href="visaopessoal.php">Visao Pessoal</a></li>

      </ol>
    </div>




    <!-- Header -->
    <a name="visaopessoal"></a>
    <div class="intro-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div id="projectBox"class="panel panel-default">
              <div class="span9">
                <h1>
                  Projetos
                </h1>
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th align="center">
                        Nome
                      </th>
                      <th>
                        Role
                      </th>
                    </tr>
                  </thead>
                  <tbody>

                    {foreach $projects as $proj}
                    <tr>
                      <td>
                        <a href="#nowhere">{$proj.nomeproj}</a>
                      </td>
                      <td>
                        {$proj.funcaoproj}
                      </td>

                    </tr>
                    {/foreach}
                  </tbody>
                </table>
                <a href="{$BASE_URL}pages/user/novoprojeto.php"> Novo Projeto</a>
              </div>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="span9">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <a href="{$BASE_URL}pages/user/editarperfil.php"> Editar Perfil </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div id="projectBox"class="panel panel-default">
              <div class="span9">
                <h2>
                  Tarefas:
                </h2>
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th >
                        Nome
                      </th>
                      <th>
                        Projeto
                      </th>
                      <th>
                        Data Final
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    {foreach $chores as $chore}
                    <tr>
                      <td>
                        <a href="#nowhere">{$chore.nometarefa}</a>
                      </td>
                      <td>
                        {$chore.nomeproj}
                      </td>
                      <td>
                        {$chore.dfinal}
                      </td>

                    </tr>
                    {/foreach}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>




  <!-- /.container -->


  <!-- /.intro-header -->

  <!-- Page Content -->

  {include file='common/footer.tpl'}
