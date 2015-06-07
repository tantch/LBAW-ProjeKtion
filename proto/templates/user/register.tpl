{include file='common/header.tpl'}

<script src="../../javascript/register_vale.js"></script>

<a name="registar"></a>
<div class="intro-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div id="registerBox"class="panel panel-default">
          <form action="../../actions/register.php" method="post" enctype="multipart/form-data">
            <section class="container">
              <div class="container-page">
                <div class="col-md-6">
                  <h3 class="dark-grey">Registo</h3>

                  <div class="form-group col-lg-12">
                    <label>Username</label>
                    <input type="" name="username" class="form-control" id="username" value="" required>
                  </div>

                  <div class="form-group col-lg-12">
                    <label>Full Name</label>
                    <input type="" name="name" class="form-control" id="name" value="" required>
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" id="pass" value="" required>
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Repetir Password</label>
                    <input type="password" name="rpassword" class="form-control" id="cpass" value="" required>
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Endereço de Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="" required>
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Repetir Endereço de Email</label>
                    <input type="email" name="remail" class="form-control" id="cemail" value="" required>
                  </div>

                </div>
                <div class="col-md-6">
                  <h3 class="dark-grey">Termos e Condições</h3>
                  <ul>
                    <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
                    <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
                    <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
                    <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
                  </ul>
                  <button type="submit" class="btn btn-primary" OnClick="return validate(this);">Registar</button>
                </form>
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
