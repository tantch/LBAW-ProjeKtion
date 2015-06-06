{include file='common/header.tpl'}
<!-- Main Body -->

<div class="mid-container">

  <div class="row">
    <div id="breadcrumb" class="col-xs-12">
      <ol class="breadcrumb pull-left">
        <li><a href="projeto.html">Projeto 2</a></li>
        <li><a href="forum.html">Forum</a></li>
        <li><a href="topico1.html">Topico 1</a></li>
      </ol>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 page-feed">
      <div class="box">
        <div class="avatar">
          {if $topicInfo.profilepic}
          <img src={$topicInfo.profilepic} alt={$topicInfo.nome} />
          {else}
          <img src={$defaultpic} alt={$topicInfo.nome} />
          {/if}
        </div>
        <div class="page-feed-content">
          <small class="time">{$topicInfo.username}, {$topicInfo['dcriacao']}</small>
          <p>{$topicInfo.descricao}</p>

        </div>
      </div>
    </div>
  </div>
  {foreach $respostas as $resposta}
  <div class="box">
    <div class="avatar">
     {if $topicInfo.profilepic}
     <img src={$resposta.profilepic} alt={$resposta.nome} />
     {else}
     <img src={$defaultpic} alt={$resposta.nome} />
     {/if}
   </div>
   <div class="page-feed-content">
    <small class="time">{$resposta.username}, {$resposta.dcriacaor}</small>
    <p>{$resposta.texto}</p>

  </div>
</div>
{/foreach}
<div class="form-group col-lg-12">
  <br>
  <form id="surveyForm" method="post" action="{$BASE_URL}actions/answer.php" class="form-horizontal">
   <label>Responda a este tópico</label>
   <textarea class="form-control" name="text" form="surveyForm" style="height=200 px;"></textarea>
   <input type="hidden" name="idprojeto" value={$idproj}>
   <input type="hidden" name="idtopico" value={$topicInfo.idtopico}>
   <div class="col-xs-2 col-xs-offset-5">
     <br>
     <button type="submit" class="btn btn-default">Responder</button>
     <br>
   </div>
 </form>
</div>
</div>


{include file='common/footer.tpl'}