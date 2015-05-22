{include file='common/header.tpl'}


<div class="mid-container">
  <div class="row">
    <div id="breadcrumb" class="col-xs-12">
      <ol class="breadcrumb pull-left">
        <li><a href="visaopessoal.html">Visao Pessoal</a></li>
        <li><a href="projetonovo.html">Projeto Novo</a></li>
      </ol>
    </div>


    <!-- Header -->
    <a name="novoprojeto"></a>
    <div class="intro-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div id="registerBox" class="panel panel-default">
              <h2 class="">Novo Projeto</h2>
              <form id="surveyForm" method="post" action="{$BASE_URL}actions/create_project.php" class="form-horizontal">

                <div class="form-group col-lg-12">
                  <label>Nome do Projeto</label>
                  <input type="" name="name" class="form-control" id="" value="" required>
                </div>

                <div class="form-group col-lg-6">
                  <label>Data de Conclusão</label>
                  <input type="date" name="fdate" class="form-control" id="" value="" required>
                </div>
                <div class="form-group">
                  <div class="col-xs-2 col-xs-offset-5">
                    <button type="submit" class="btn btn-default">Criar Projeto</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>

    {include file='common/footer.tpl'}
