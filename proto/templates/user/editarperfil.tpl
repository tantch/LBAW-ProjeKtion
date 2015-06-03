{include file='common/header.tpl'}

<div class="mid-container">
  <div class="row">
    <div id="breadcrumb" class="col-xs-12">
      <ol class="breadcrumb pull-left">
        <li><a href="visaopessoal.html">Visao Pessoal</a></li>
        <li><a href="editarperfil.html">Editar Perfil</a></li>

      </ol>
    </div>

    <!-- Header -->



    <div class="intro-header">
      <div class="row">

        <div id="editBox" class="col-lg-12">
          <div  class="panel panel-body">

            <div class="col-sm-6 col-centered">

              <form class=" " enctype="multipart/form-data" action="../../actions/editarperfil.php" method="post">
                <div class="form-group">
                  <label for="fullname">Full Name:</label>
                  <input class="form-control" name="fullname" type="text" value="Adrian Demian" id="fullname" required>
                </div>
                <div class="form-group">
                  <label for="address">Address:</label>
                  <input class="form-control" name="address" type="text" value="Street nr, postal code, city" id="address">
                </div>
                <div class="form-group">
                  <label for="dnascimento">Birth date:</label>
                  <input class="form-control" name="dnascimento" type="date"  id="dnascimento">
                </div>
                <div class="form-group">
                  <label for="dnascimento">Genre:</label>
                  <p> Male <input class="form-control" name="genre" type="radio"  id="genre" value="male">
                  Female <input class="form-control" name="genre" type="radio"  id="genre" value="female">
                </div>
                <div class="form-group">
                  <label for="email">Phone:</label>
                  <input class="form-control" name="phone" type="text" id="phone" placeholder="Enter your phone number">
                </div>

                <div class="form-group">
                  <label for="email">Email:</label>
                  <input class="form-control" name="email" type="email" value="contact@mosaicpro.biz" id="email">
                </div>

                <div class="form-group">
                  <label for="password">Password:</label>
                  <input class="form-control" name="password" type="password" value="password" id="password">
                </div>

                <div class="form-group">
                  <label for="password_confirmation">Password Confirmation:</label>
                  <input class="form-control" name="password_confirmation" type="password" value="" id="password_confirmation">
                </div>

                <div class="form-group">

                  <label for="picture">Profile picture:</label>
                  <input class="form-control" name="picture" type="url" value="example.com/picture.png" id="picture">

                </div>


                <div class="checkbox">
                  <label for="notify">
                    <input id="notify" checked="checked" name="notify" type="checkbox">
                    Email me with updates about current projects.
                  </label>
                </div>

                <div class="separator"></div>
                <div class="form-group">
                  <input class="btn btn-primary" type="submit" value="Update Profile"></div>
                </form>
              </div>


              <div class="col-sm-6 col-centered">

                <div class="well span3" align="center" id="infoEditar">
                  <h4>Additional Information</h4>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aspernatur assumenda at commodi dolorem eos eum exercitationem facere ipsum mollitia nemo perspiciatis quaerat qui quidem, quod repellat repudiandae sed veritatis voluptate? Eos necessitatibus non rem repudiandae similique vero voluptatem?</p>
                </div>
              </div>


            </div>
          </div>

        </div>
      </div>

      {include file='common/footer.tpl'}
