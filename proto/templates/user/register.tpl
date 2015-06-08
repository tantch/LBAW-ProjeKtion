{include file='common/header.tpl'}

<script src="../../javascript/register_vale.js"></script>
<script src="../../javascript/register_help.js"></script>

<a name="registar"></a>

<div class="intro-header">

  <div class="container">

    <div class="row">

      <div class="col-lg-12">
        <button class ="btn btn-primary" OnClick="help()">Ajuda</button>
        <div id="registerBox"class="panel panel-default">

          <form action="../../actions/register.php" method="post" enctype="multipart/form-data">
            <section class="container">
              <div class="container-page">

                <div class="col-md-6">
                  <h3 class="dark-grey">Registo</h3>

                  <div class="form-group col-lg-12">
                    <label>Username</label>
                    <input type="" name="username" class="form-control" id="username" value="" data-intro=" Introduza o Username com o qual se pretende registar, utilize no maximo 20 caracteres alfanumericos" data-position="top">
                  </div>

                  <div class="form-group col-lg-12">
                    <label>Full Name</label>
                    <input type="" name="name" class="form-control" id="name" value=""  data-intro="Introduza o Nome Completo com o qual se pretende registar, utilize no maximo 20 caracteres alfanumericos" data-position="right">
                    <br><br><br><br><br><br>                  
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" id="pass" value="" data-intro="Introduza a Password que vai utilizar para se autenticar no sistema, com pelo menos 1 digito e entre 4 a 12 caracteres no total" data-position="top">
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Repetir Password</label>
                    <input type="password" name="rpassword" class="form-control" id="cpass" value=""  data-intro="Introduza a mesma password para efeitos de confirmacao" data-intro="Termos e condições do serviço" data-position="top">
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Endereço de Email</label>
                    <input type="email" name="email" class="form-control" id="email" value=""  data-intro="Introduza o Email para o qual pretende ser notificado." data-intro="Termos e condições do serviço" data-position="bottom">
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Repetir Endereço de Email</label>
                    <input type="email" name="remail" class="form-control" id="cemail" value="" data-intro="Repita o Email para confirmar" data-position="bottom">
                  </div>

                </div>
                <div class="col-md-6"  >
                  <h3 class="dark-grey" data-intro="Termos e condições do serviço" data-position="top">Termos e Condições</h3>
                  <ul>
                    <li>Para utilizar as funcionalidades e recursos do ProjeKtion precisará de efectuar um registo. Poderemos, nessa oportunidade, solicitar alguns dados pessoais, tais como nome, endereço de e-mail, dentre outros.
                    Você deve ter 18 anos ou mais e plena capacidade civil para utilizar o Site e seus recursos; nos demais casos você deverá ter a autorização de seus pais ou responsáveis legais.
                  Enquanto estivermos em posse de informações ou dados seus, poderemos fornecê-los às autoridades competentes para colaborar em investigações ou procedimentos judiciais, ainda que preparatórios ou cautelares, desde que permitido por lei.</li>
                    <li>O Site e os recursos que estão nele são destinados ao seu uso pessoal e recreativo. Ao utilizar o Site não deve:
                        Disseminar conteúdo ilegal, ofensivo, violento ou que viole a privacidade e a intimidade de terceiros.
                        Violar propriedade intelectual de terceiros.
                        Disseminar vírus ou código malicioso, ficheiros ou programas desenvolvidos para recolher dados não autorizados, interromper, destruir ou limitar a funcionalidade do Site, de qualquer software ou hardware ou equipamentos de telecomunicações em geral (malware ou spyware).
                        Interferir com a arquitetura do Site de qualquer forma, meio ou técnica.
                        Disfarçar ou ocultar o número de IP (internet protocol) que identifica sua conexão à internet.
                        Usar qualquer um dos elementos do Site para fins que nao se enquadrem no contexto do Site.
                        Criar ou utilizar mais que uma forma de identificação, utilizar identificação de um terceiro, ou permitir que terceiros utilizem a sua identificação.
                        Poderemos impedir que utilize o Site, no nosso entendimento, caso viole quaisquer das condições destes Termos. Informaremos da suspensão de seu uso do Site.</li>
                    <li>O ProjeKtion reserva o direito de modificar a qualquer momento a apresentação, configuração e disponibilização do Site.</li>
                  </ul>
                  <button type="submit" class="btn btn-primary" OnClick="return validate(this);">Registar</button>
                </form>
                <div data-intro="Para qualquer duvida, questao ou sugestao por favor contacte-nos pelo nosso email: projektion@projektion.com"></div>

              </div>
            </div>
          </section>


        </div>
      </div>
    </div>

  </div>
  <!-- /.container -->

</div>
{include file='common/footer.tpl'}
