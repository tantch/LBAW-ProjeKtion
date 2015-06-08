{include file='common/header.tpl'}

<script src="../../javascript/login_vale.js"></script>

{if !$USERID}
<a name="login" ></a>
<div class="intro-header">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <div  id="loginBox" class="panel panel-default">
          <div class="panel-body">
            <h1 class="text-center">Login</h1>
          </div>
          <form class="form col-md-12 center-block" method="post" action="../../actions/login.php" enctype="multipart/form-data" name="form" >
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Username" name="inpt_username" id="inpt_username" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" name="inpt_pass" id="inpt_pass" required>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" type="submit" onClick="return validate();">Sign In</button>
              <span class="pull-right"><a href="register.php">Registar</a></span>
              <span class="pull-left"><a href="#faq">Ajuda-FAQ</a></span>
            </div>
          </form>
          <div class="panel-body">
          </div>

        </div>
      </div>
    </div>

  </div>
  <!-- /.container -->

</div>
{/if}
<!-- /.intro-header -->

<!-- Page Content -->

<a  name="oquefazemos"></a>
<div class="content-section-a">

  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-sm-6">
        <hr class="section-heading-spacer">
        <div class="clearfix"></div>
        <h2 class="section-heading">O Que Fazemos<br>ProjeKtion</h2>
        <p class="lead">O ProjeKtion apresenta-se como uma solução simples e completa para a gestão de projectos de qualquer dimensão. Desde o mais comum projeto uni-pessoal, até projetos com várias equipas e fases, tudo é contemplado e introduzido numa interface minimal e funcional.</p>
      </div>
      <div class="col-lg-5 col-lg-offset-2 col-sm-6">
        <img class="img-responsive" src="../../images/ipad.png" alt="">
      </div>
    </div>

  </div>
  <!-- /.container -->

</div>
<!-- /.content-section-a -->


<!-- /.content-section-b -->

<div class="content-section-a">

  <div class="container">

    <div class="row">
      <div class="col-lg-5 col-sm-6">
        <hr class="section-heading-spacer">
        <div class="clearfix"></div>
        <h2 class="section-heading">Ágil<br>E simples</h2>
        <p class="lead">O foco na simplicidade da interface, sendo um dos pontos mais visiveis, possibilita a colaboração ao mesmo nível de utilizadores de areas do projecto diferente, numa interface o mais comum possível.</p>
      </div>
      <div class="col-lg-5 col-lg-offset-2 col-sm-6">
        <img class="img-responsive" src="../../images/projeto.png" alt="cenas">
      </div>
    </div>

  </div>
  <!-- /.container -->

</div>
<!-- /.content-section-a -->

<a name="faq" ></a>

<div class="content-section-a" id="faq">

  <div class="container">

    <div class="row">
      <div class="col-lg-5 col-sm-6">
        <hr class="section-heading-spacer">
        <div class="clearfix"></div>
        <h2 class="section-heading">FAQ <br> Questões Frequentes</h2>
        <p class="lead">
          <dl>
            <dt><h4>O que necessito para usar o serviço?</h4></dt>
            <dd>Para usufruir da nossa aplicaçao é apenas necessário uma conta de utilizador ProjeKtion</dd>
              <dt><h4>Como posso obter uma conta de utilizador ProjeKtion?</h4></dt>
              <dd>Para tal, basta rregistar-se na pagina inicial, fornecendo alguns dados de identificação, necessarios ao serviço.</dd>
              <dt><h4>Quem tem acesso aos projetos?</h4></dt>
              <dd>Cada projeto é acessível pelo Master do projeto (utilizador que iniciou o projeto ou a que foi promovido), todos os Coordenadores presentes no momento assim como Colaboradores </dd>
              </dl>
            </p>
          </div>

        </div>

      </div>
      <!-- /.container -->

    </div>






    <a  name="contactos"></a>

    {include file='common/footer.tpl'}
