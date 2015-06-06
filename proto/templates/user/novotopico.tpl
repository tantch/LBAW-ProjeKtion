{include file='common/header.tpl'}


<div class="mid-container">
  <div class="row">
    <div id="breadcrumb" class="col-xs-12">
      <ol class="breadcrumb pull-left">
        <li><a href="{$BASE_URL}/pages/user/visaogeralprojeto.php?idprojeto={$idproj}">Visão geral do projeto: {$nomeproj}</a></li>
        <li><a href="{$BASE_URL}/pages/user/forum.php?idprojeto={$idproj}">Forum</a></li>
      </ol>
      <div id="social" class="pull-right">
      <!--  <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>-->
      </div>
    </div>
  </div>


    <!-- Header -->
    <a name="novoprojeto"></a>
    <div class="intro-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div id="registerBox" class="panel panel-default">
              <h2 class="">Novo tópico</h2>
              <form id="surveyForm" method="post" action="{$BASE_URL}actions/create_topic.php" class="form-horizontal">

                <div class="form-group col-lg-12">
                  <label>Titulo do tópico</label>
                  <input type="" name="name" class="form-control" id="" value="" required>
                </div>

                <div class="form-group col-lg-12">
                  <label>Texto</label>
                  <textarea class="form-control" name="description" form="surveyForm" style="height=200 px;">Digite o seu texto.</textarea>
                </div>
                <div class="form-group">
                  <div class="col-xs-2 col-xs-offset-5">
                    <button type="submit" class="btn btn-default">Criar tópico</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>

    {include file='common/footer.tpl'}
