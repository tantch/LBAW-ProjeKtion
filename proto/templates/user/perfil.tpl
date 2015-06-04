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
                 <div class="col-lg-12"><a href="" ><img title="profile image" class="img-responsive center-block" src={$view_picurl} width="340em"></a>
                 <br>
                 </div>
             </div>
         </div>


         <div class="row">
             <div class="col-lg-12">
                <!--left col-->
                
                <ul class="list-group">
                    <li class="list-group-item text-muted" contenteditable="false">Info</li>
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
            
                        <!---
                        <ul class="list-group">
                            <li class="list-group-item text-muted">Estatisticas</li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Projetos Concluidos</strong></span> 125</li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Projetos a decorrer</strong></span> 13</li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Posts</strong></span> 37</li>

                        </ul>
                        <div class="panel panel-default">
                            <div class="panel-heading">Social Media</div>
                            <div class="panel-body">    <i class="fa fa-facebook fa-2x"></i>  <i class="fa fa-github fa-2x"></i>
                                <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i>  <i class="fa fa-google-plus fa-2x"></i>
                            </div>
                        </div>
                    -->


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

    {include file='common/footer.tpl'}
