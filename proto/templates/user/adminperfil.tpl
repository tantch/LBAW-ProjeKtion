    {include file='common/header.tpl'}
    <div class="mid-container">
      <div class="row">
        <div id="breadcrumb" class="col-xs-12">
          <ol class="breadcrumb pull-left">
            <li><a href="visaopessoal.php">Visao Pessoal</a></li>
            <li><a href={$profileurl}>Perfil</a></li>

          </ol>
        </div>
      </div>
      <!-- Header -->
      <a name="perfil"></a>

      <div class="intro-header">
        <div class="container" >
          <div class="panel panel-default" id="editBox" >
            <div class="row">
             <div class=" col-lg-12">
               <h1 class="">Perfil de {$view_username}</h1>
             </div>

           </div>
           <div class="col-lg-12"><a href="" ><br><img title="profile image" class="img-responsive center-block" src={$view_picurl} width="340em"></a>
             <br>
           </div>
         </div>
       </div>

       <br><br><br><br><br><br><br>

       <a name="visaopessoal"></a>
       <div class="intro-header">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div id="projectBox" class="panel panel-default">
                <div class="span9">
                  <ul>
                    <li class="list-group-item text-muted"><h3>Info</h3></li>

                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Nome</strong></span> {$view_nome}
                    </li>
                    {if $view_dnascimento neq NULL}
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Data de nascimento</strong></span> {$view_dnascimento}</li>
                    {/if}
                    {if $view_genero neq NULL}
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Género</strong></span> {$view_genero}</li>
                    {/if}
                    {if $view_email neq NULL}
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Contacto e-mail</strong></span> {$view_email}</li>
                    {/if}
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <a name="visaopessoal"></a>

        <a name="visaopessoal"></a>
        <div class="intro-header">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div id="projectBox"class="panel panel-default">
                  <div class="span9">
                    <ul class="list-group">
                      <li class="list-group-item text-muted"><h3>Estatisticas</h3></li>
                      <li class="list-group-item text-right"><span class="pull-left"><strong class="">Projetos Concluidos</strong></span> {$projetos_acabados}</li>
                      <li class="list-group-item text-right"><span class="pull-left"><strong class="">Projetos a decorrer</strong></span> {$projetos_decorrer}</li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


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
                            <a href="{$BASE_URL}pages/user/visaogeralprojeto.php?idprojeto={$proj.idprojeto}">{$proj.nomeproj}</a>
                          </td>
                          <td>
                            {$proj.funcaoproj}
                          </td>

                        </tr>
                        {/foreach}
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">Social Media</div>
              <div class="panel-body">    <i class="fa fa-facebook fa-2x"></i>  <i class="fa fa-github fa-2x"></i>
                <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i>  <i class="fa fa-google-plus fa-2x"></i>
              </div>
            </div>



          </div>
        </div>

</div>
</div>
<br>
<br>
<br> <br>
<br>
<br> <br>
<br>
<br> <br>
<br>
<br>