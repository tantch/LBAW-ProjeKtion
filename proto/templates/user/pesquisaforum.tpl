{include file='common/header.tpl'}

<div class="mid-container">
  <div class="row">
    <div id="breadcrumb" class="col-xs-12">
      <ol class="breadcrumb pull-left">
        <li><a href="{$BASE_URL}/pages/user/visaogeralprojeto.php?idprojeto={$idproj}">Visão geral do projeto: {$nomeproj}</a></li>
        <li><a href="{$BASE_URL}/pages/user/forum.php?idprojeto={$idproj}">Forum</a></li>
      </ol>
      <div id="social" class="pull-right">
      <!--	<a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>-->
      </div>
    </div>
  </div>
  
  <H2 class="text-center">Projeto x - Fórum</H2>
  
  <div id="messages" class="container-fluid">
    <div class="row" id="test">
      <div class="col-xs-12">
        <div class="row">
          <div id="messages-list" class="col-xs-10 col-xs-offset-1">
            {foreach $topicos as $topic}
            <div class="row one-list-message msg-inbox-item" id="msg-zero">
              <div class="col-xs-1 checkbox">
                <label>
                 {$topic['username']}
               </label>
             </div>
             <a href="{$BASE_URL}/pages/user/topico.php?idtopico={$topic['idtopico']}&idprojeto={$idproj}">
               <div class="col-xs-8 message-title"><b>{$topic['nometopico']}</b></div>
             </a>
             <div class="col-xs-5 message-date " style="width:auto;">   {$topic['dcriacao']}   </div>
           </div>
           {/foreach}
         </div>
       </div>
     </div>
   </div>
 </div>

 {include file='common/footer.tpl'}