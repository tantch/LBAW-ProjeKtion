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
    <p>Linux is a Unix-like and POSIX-compliant computer operating system assembled under the model of free and open source software development and distribution. Maemo - Software platform developed by Nokia and then handed over to Hildon Foundation for smartphones and Internet tablets</p>

  </div>
</div>
{/foreach}
</div>

{include file='common/footer.tpl'}