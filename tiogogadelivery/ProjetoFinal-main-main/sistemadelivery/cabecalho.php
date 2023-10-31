<?php @session_start(); ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="pt-br">

<head>
  <title>Tio Gôga Pizzaria</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <meta name="description" content="pizzaria samambaia df,lanches samambaia df,hamburguer samambaia df">


  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <!-- logo para a aba do site no navegador  -->
  <link rel="icon" href="images/logo.jpg" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_categorias.css">
  <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>

  <div class="page">
    <!-- Page Header-->
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap rd-navbar-modern-wrap">
        <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a title="ir para pagina inicial" class="brand" href="index.php"><img src="images/logo.jpg" alt="" width="400" height="120" /></a></div>
              </div>
              <div class="rd-navbar-main-element">
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Basket-->
                  <div class="rd-navbar-basket-wrap">
                    <button class="rd-navbar-basket fl-bigmug-line-shopping198" data-rd-navbar-toggle=".cart-inline"><span>2</span></button>
                    <div class="cart-inline">
                      <div class="cart-inline-header">
                        <!-- inclusao do nome do usuario dentro do carrinho e da classe css no arquivo style.css linha 12269  e identificação do usuário logado!-->
                        <span class="dados-usuarios">
                          <p>
                            <a href="" data-toggle="modal" data-target="#modal-login" title="Clique aqui para editar seus dados">
                              <?php echo $_SESSION['nome_usuario'] ?? '' ?></a>
                            <a href="logout.php" title="Sair">
                              <img src="images/logout.png" alt="" width="20px">
                            </a>
                          </p>
                        </span>
                        <!--  -->
                        <h5 class="cart-inline-title">Carrinho:<span> 2</span> Produtos</h5>
                        <h6 class="cart-inline-title">Valor Total:<span> $800</span></h6>
                      </div>
                      <div class="cart-inline-body">
                        <div class="cart-inline-item">
                          <div class="unit align-items-center">
                            <div class="unit-left"><a class="cart-inline-figure" href="#"><img src="images/product-mini-1-108x100.png" alt="" width="108" height="100" /></a></div>
                            <div class="unit-body">
                              <h6 class="cart-inline-name"><a href="#">Nome Produto</a></h6>
                              <div>
                                <div class="group-xs group-inline-middle">
                                  <div class="table-cart-stepper">
                                    <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                                  </div>
                                  <h6 class="cart-inline-title">$550</h6>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="cart-inline-item">
                          <div class="unit align-items-center">
                            <div class="unit-left"><a class="cart-inline-figure" href="#"><img src="images/product-mini-2-108x100.png" alt="" width="108" height="100" /></a></div>
                            <div class="unit-body">
                              <h6 class="cart-inline-name"><a href="#">Nome Produto</a></h6>
                              <div>
                                <div class="group-xs group-inline-middle">
                                  <div class="table-cart-stepper">
                                    <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                                  </div>
                                  <h6 class="cart-inline-title">$250</h6>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="cart-inline-footer">
                        <div class="group-sm"><a class="button button-md button-default-outline-2 button-wapasha" href="#"> Produtos</a><a class="button button-md button-primary button-pipaluk" href="#">Pagamentos</a></div>
                      </div>
                    </div>
                  </div><a class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping198" href="#"><span>2</span></a>
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search">
                    <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                    <form class="rd-search" action="#">
                      <div class="form-wrap">
                        <label class="form-label" for="rd-navbar-search-form-input">Procurar</label>
                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="search">
                        <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                      </div>
                    </form>
                  </div>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="sobre.php">Sobre</a></li>
                    <!-- inclusao para identificar se existe uma sessão com o nome de usuário -->
                    <?php if (!isset($_SESSION['nome_usuario'])) {
                      echo '<li class="rd-nav-item"><a class="rd-nav-link" href="login.php">Login</a></li>';
                    } ?>
                    <?php if (@$_SESSION['nivel_usuario'] == 'cliente') {
                      echo '<li class="rd-nav-item"><a class="rd-nav-link" href="./painel-cliente/index.php">Painel do cliente</a></li>';
                      echo '<li class="rd-nav-item"><a class="rd-nav-link" href="logout.php">Sair</a></li>';
                    } ?>
                    <?php if (@$_SESSION['nivel_usuario'] == 'admin') {
                      echo '<li class="rd-nav-item"><a class="rd-nav-link" href="./painel-administrativo/index.php" target="_blank">Painel Administrativo</a></li>';
                      echo '<li class="rd-nav-item"><a class="rd-nav-link" href="logout.php">Sair</a></li>';
                    } ?>



                    <li class="rd-nav-item"><a class="rd-nav-link" href="contatos.php">Contatos</a>
                    </li>
                  </ul>
                </div>
                <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                  <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span></div>
                  <div class="project-hamburger-2"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                  </div>
                  <div class="project-close"><span></span><span></span></div>
                </div>
              </div>
              <div class="rd-navbar-project rd-navbar-modern-project">
                <div class="rd-navbar-project-modern-header">
                  <h4 class="rd-navbar-project-modern-title">Contate-nos</h4>
                  <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                    <div class="project-close"><span></span><span></span></div>
                  </div>
                </div>
                <div class="rd-navbar-project-content rd-navbar-modern-project-content">
                  <div>
                    <p>Siga-nos em nossas redes sociais e fique por dentro das promoções, participe para ganhar prêmios e grandes descontos.</p>

                    <ul class="rd-navbar-modern-contacts">
                      <li>
                        <div class="unit unit-spacing-sm">
                          <div class="unit-left"><span class="fa-brands fa-whatsapp"></i> ></i>"></span></div>
                          <div class="unit-body"><img src="images/whatsapp-icon-transparent-free-png.webp" width="50" alt="" href="https://wa.me/5561994065329" target="_blank"><a target="_blank" title="Ir para o Whatssapp" class="link-phone" href="https://wa.me/5561994065329">61 99406-5329</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-sm">
                          <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                          <div class="unit-body"><a target="_blank" class="link-location" href="https://ul.waze.com/ul?ll=-15.87992010%2C-48.11438450&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location"> Quadra 415 conjunto 11 casa 24 Samambaia-Norte</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-sm">
                          <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                          <div class="unit-body"><a class="link-email" href="mailto:#">tiogogamassas@gmail.com</a></div>
                        </div>
                      </li>
                    </ul>
                    <ul class="list-inline rd-navbar-modern-list-social">
                      <li><a class="icon fa fa-facebook" href="https://www.facebook.com/tiogogapizzaexpress/" target="_blank" title="Ir para a página do facebook"></a></li>
                      <li><a class="icon fa fa-twitter" href="#" title="Ir para a página do twitter"></a></li>
                      <li><a class="icon fa fa-google-plus" href="#" title=""></a></li>
                      <li><a class="icon fa fa-instagram" href="https://www.instagram.com/tiogogapizzaria/" target="_blank" title="Ir para a página do instagran"></a></li>
                      <li><a class="icon fa fa-pinterest" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- janela modal -->

    <div class="modal fade" id="modal-login" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Cadastre-se</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="text-dark" for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control form-control-sm" id="nome" name="nome" placeholder="Nome e Sobrenome" required>

                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label class="text-dark" for="exampleInputEmail1">CPF</label>
                    <input type="text" class="form-control form-control-sm" id="cpf" name="cpf" placeholder="CPF" required>

                  </div>

                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label class="text-dark" for="exampleInputEmail1">Telefone</label>
                    <input type="text" class="form-control form-control-sm" id="telefone" name="telefone" placeholder="Telefone" required>

                  </div>

                </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="text-dark" for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Email" required value="<?php echo @$email?>">

                  </div>

                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <label class="text-dark" for="exampleInputEmail1">Rua</label>
                    <input type="text" class="form-control form-control-sm" id="rua" name="rua" placeholder="rua" required value="<?php echo @$rua ?>">

                  </div>

                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label class="text-dark" for="exampleInputEmail1">Número</label>
                    <input type="text" class="form-control form-control-sm" id="numero" name="numero" placeholder="numero" required value="<?php echo @$numero ?>">

                  </div>

                </div>
                
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="text-dark" for="exampleInputEmail1">Bairro</label>
                    <input type="text" class="form-control form-control-sm" id="bairro" name="numero" placeholder="Bairro" required value="<?php echo @$bairro ?>">

                  </div>

                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label class="text-dark" for="exampleInputEmail1">Cidade</label>
                    <input type="text" class="form-control form-control-sm" id="cidade" name="cidade" placeholder="Cidade" required value="<?php echo @$cidade?>">

                  </div>

                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label class="text-dark" for="exampleInputEmail1">Cep</label>
                    <input type="text" class="form-control form-control-sm" id="cidade" name="cep" placeholder="Cep" required value="<?php echo @$estado?>">

                  </div>

                </div>
              

                
              </div>
              </div>
              
              

              

















              <div align="center" class="" id="mensagem">
              </div>


          </div>
          <div class="modal-footer">
            <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button name="btn-cadastro" id="btn-cadastro" class="btn btn-info">Cadastrar</button>

            </form>
          
          </div>
        </div>
      </div>
    </div>