<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <a class="navbar-brand topnav" href="#">ProjeKtion</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">

                      <!-- parte sempre visivel -->
                      <a href="#" class="dropdown-toggle account" data-toggle="dropdown">
                        <!-- mudar o avatar aqui-->
                        <div class="avatar">
                          <img src="{$BASE_URL}images/avatar.jpg" class="img-circle" alt="avatar" />
                        </div>

                        <i class="fa fa-angle-down pull-right"></i><!-- setinha, da para mnudar o fa -->
                        <!-- mensagem e nome-->
                        <div class="user-mini pull-right">
                          <span class="welcome">Bem-vindo,</span>

                          <span>{$USERNAME}</span> <!-- £username-->
                        </div>

                      </a>
                      <!-- dropdown com opcoes e logout , facil de alterar-->
                      <ul class="dropdown-menu">
                        <li>
                          <a href="{$BASE_URL}pages/user/visaopessoal.php" class="ajax-link">
                            <i class="fa fa-user"></i>
                            <span>Visão Pessoal</span>
                          </a>
                        </li>
                        <li>
                          <a href="{$BASE_URL}actions/logout.php">
                            <i class="fa fa-power-off"></i>
                            <span>Logout</span>
                          </a>
                        </li>
                      </ul>

                    </li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
