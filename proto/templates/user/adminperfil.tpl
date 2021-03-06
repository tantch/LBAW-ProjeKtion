    {include file='common/header.tpl'}
    <div >
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


             {if $view_picurl}
             <div class="col-lg-12"><a href="" ><br><img title="profile image" class="img-responsive center-block" src={$view_picurl} width="340em"></a>
               <br>
             </div>
             {else}
             <div class="col-lg-12"><a href="" ><br><img title="profile image" class="img-responsive center-block" src="{$defaultpic}" width="340em"></a>
               <br>
             </div>
             {/if}
           </div>




           <div class="panel panel-default">

            <div class="panel-heading">Informação geral</div>
            <div class="panel-body"> 
              <ul>
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

          <div class="panel panel-default">
           <div class="panel-heading">Estatísticas</div>
           <div class="panel-body"> 
             <ul class="list-group">
               <li class="list-group-item text-right"><span class="pull-left"><strong class="">Projetos Concluidos</strong></span> {$projetos_acabados}</li>
               <li class="list-group-item text-right"><span class="pull-left"><strong class="">Projetos a decorrer</strong></span> {$projetos_decorrer}</li>

             </ul>
           </div> 
         </div>




         <div class="panel panel-default">
          <div class="panel-heading">Projetos</div>
          <div class="panel-body"> 
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

        <div class="panel panel-default">
          <div class="panel-heading">Social Media</div>
          <div class="panel-body">    <i class="fa fa-facebook fa-2x"></i>  <i class="fa fa-github fa-2x"></i>
            <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i>  <i class="fa fa-google-plus fa-2x"></i>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">Admin options</div>
          <div class="panel-body"> 
            {if $isBanned eq 0} 
            <form method="post" action="../../actions/banUser.php">
              <input type="hidden" name="userid" value="{$INSPECTED_USER_ID}">
              <button class="btn btn-primary btn-lg btn-block" type="submit" >Banir</button>
            </form>
            <br>
            {else}
            <form method="post" action="../../actions/banUser.php">
              <input type="hidden" name="userid" value="{$INSPECTED_USER_ID}">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Restituir</button>
            </form>
            <br>
            {/if}
            <form method="post" action="../../actions/deleteuser.php">
              <input type="hidden" name="userid" value="{$INSPECTED_USER_ID}">
              <button class="btn btn-primary btn-lg btn-block" type="submit" >Apagar definitivamente esta conta</button>
            </form>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
  {include file='common/footer.tpl'}