<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">

<head>
<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Juca Tratores jaboticabal, Máquinas e Implementos Agrícolas Jaboticabal e Região, aqui você encontra produtos variados do ramo agrícola.">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/assets/img/favicon.ico">
  <meta name="robots" content="index, follow">
  <title>Juca Tratores Jaboticabal | Máquinas e Implementos Agrícolas</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="assets/css/agency.min.css" rel="stylesheet">

  <style>
  #mainNav .navbar-brand {
    color: #000;
    font-family: sans-serif;
}

#mainNav .navbar-brand:hover {
    color: #000;
    font-family: sans-serif;
}

::selection {
    background: #ccc;
    text-shadow: none;
}

.portfolio-modal .modal-content {
    padding: 0px 0;
    text-align: left;
}

#mainNav .navbar-nav .nav-item .nav-link {
    font-size: 90%;
    font-weight: 800!important;
    padding: .75em 0;
    letter-spacing: 1px;
    color: #000;
    font-family: Montserrat,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
}



@media (min-width: 992px){
#mainNav {
    padding-top: 0px;
    padding-bottom: 0px;
    -webkit-transition: padding-top .3s,padding-bottom .3s;
    transition: padding-top .3s,padding-bottom .3s;
    border-bottom: 1px solid #f5f5f5;
    background-color: #fff;
}
}

@media (min-width: 992px){

#mainNav.navbar-shrink {
    padding-top: 0;
    padding-bottom: 0;
    background-color: #f5f5f5;
    border-bottom: 1px solid #f5f5f5;
}

.logo{

height:170px;
}

#titulo{
    font-size:65px;
}



}





@media (max-width: 762px){

#subt{
display:none;
}


#titulo{
    font-size:35px;
}

.rodape{
    margin-top:40px;
}

}





#mainNav {
    background-color: #000;
    border-bottom: 1px solid #000;
}

#mainNav .navbar-toggler {
    font-size: 12px;
    right: 0;
    padding: 13px;
    text-transform: uppercase;
    color: #fff;
    border: 0;
    background-color: #333;
    font-family: Montserrat,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
}

.nav-item{

  margin: 5px;
  border-bottom: 1px solid #001628;
}

#portfolio .portfolio-item .portfolio-link .portfolio-hover {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-transition: all ease .5s;
    transition: all ease .5s;
    opacity: 0;
    background: rgba(0,22,40, 0.5);
}

#mainNav .navbar-nav .nav-item .nav-link {
    font-size: 90%;
    font-weight: 400;
    padding: .75em 0;
    letter-spacing: 1px;
    color: #fff;
    font-family: Montserrat,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
}



.text-muted {
  color: #000!important;
}

#mainNav .navbar-nav .nav-item .nav-link.active, #mainNav .navbar-nav .nav-item .nav-link:hover {
 color: #fff;
}

.text-primary {
    color: #007bff!important;
}

.page-section h4.section-subheading {
    font-size: 20px!important;
    font-weight: 700;
    margin-top: 40px;
    margin-bottom: 20px;
    text-transform: none;
    font-family: 'Droid Serif',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
}




#mainNav .navbar-toggler {
    font-size: 12px;
    right: 0;
    /* padding: 0px!important; */
    text-transform: uppercase;
    /* color: #fff; */
    border: 1px solid #ccc;
    background-color: #fff;
    color: #333;
    font-family: Montserrat,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
}


.fixed-top {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
}

header.masthead .intro-text .intro-lead-in {
    font-size: 30px;
    font-weight: 700;
    line-height: 50px;
    margin-bottom: 25px;
    font-family: Montserrat,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
}

header.masthead .intro-text .intro-heading {
    font-size: 30px;
    font-weight: 700;
    line-height: 50px;
    margin-bottom: 25px;
    font-family: Montserrat,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
}




  </style>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top"><img style="height:110px;" class="logo img-fluid" src="<?= base_url(); ?>assets/img/about/logomarca.png"  ></a>
      
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars" style="font-size:17px;"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Fotos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Quem Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>produtos">Produtos</a>
          </li>
          <!--
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
        -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in" ><h1 style="background:rgba(0,0,0, 0.6);  display:inline-block;">Juca Tratores</h1><br>
        <div class="intro-heading text-uppercase" style="background:rgba(0,0,0, 0.6); display:inline-block;">Máquinas e Implementos Agrícolas</div>
      </div>
    </div>
  </header>

  <a class="navbar-brand js-scroll-trigger" href="#page-top">
    <img src="<?= base_url(); ?>assets/img/uparrow.png" style="height:50px; position:fixed; bottom: 90px; right: 20px; z-index:100;" data-selector="img">
</a>

  <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5516991194488" target="_blank">
    <img src="<?= base_url(); ?>assets/img/zap.png" style="height:50px; position:fixed; bottom: 20px; right: 20px; z-index:100;" data-selector="img">
</a>


  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Serviços</h2>
          <h3 class="section-subheading text-muted">Alguns dos nossos serviços.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-tractor fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Compra, venda e troca de máquinas e implementos agrícolas</h4>
          <p class="text-muted">Vendemos e compramos dos mais variados equipamentos do ramo agrícola </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-tools  fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Manutenção em Geral</h4>
          <p class="text-muted">Fazemos manutenções em geral, manutenções preventivas até reparos mais complexos.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-chart-line fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Consultoria</h4>
          <p class="text-muted">Venha fazer sua consultoria ajudamos você a encontrar o melhor equipamento para seu negócio, tiramos todas as suas dúvidas.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Fotos</h2>
          <h3 class="section-subheading text-muted">Algumas fotos da empresa.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
            <img class="img-fluid" src="<?= base_url(); ?>assets/img/portfolio/juca.jpg" >
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <img class="img-fluid" src="<?= base_url(); ?>assets/img/portfolio/juca1.jpg" >
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <img class="img-fluid" src="<?= base_url(); ?>assets/img/portfolio/juca2.jpg" >
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <img class="img-fluid" src="<?= base_url(); ?>assets/img/portfolio/juca3.jpg" >
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <img class="img-fluid" src="<?= base_url(); ?>assets/img/portfolio/juca4.jpg" >
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <img class="img-fluid" src="<?= base_url(); ?>assets/img/portfolio/juca5.jpg" >
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase" style="color:#333;">Quem Somos</h2>
          <h3 class="section-subheading text-muted" style="color:#333;">Um pouco sobre nossa história.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">


          <ul class="timeline">
            <li>
              <div class="timeline-image" style="background-color:#ccc;">
                <img class="rounded-circle img-fluid" src="assets/img/about/logo.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 style="color:#333;">1999-2019</h4>
                  <h4 class="subheading" style="color:#333;">História</h4>
                  <hr style="border-top: 6px solid rgba(0,0,0,.1);">
                </div>
                <div class="timeline-body">
                <p class="text-muted text-justify">A loja Juca Tratores foi fundada em 1999, se encontra na cidade de jaboticabal, atuamos no mercado de Máquinas e Implementos Agrícolas há 20 anos.</p>
                </div>
              </div>
            </li>

            <li class="timeline-inverted">
              <div class="timeline-image" style="background-color:#ccc;">
                <img class="rounded-circle img-fluid" src="assets/img/about/logo.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="subheading" style="color:#333;">Nossa Missão</h4>
                  <hr style="border-top: 6px solid rgba(0,0,0,.1);">
                </div>
                <div class="timeline-body">
                <p class="text-muted text-justify">A loja Juca Tratores tem como missão oferecer produtos e serviços que atendam a necessidade de nossos clientes, trabalhamos com produtos de excelentíssima qualidade para o crescimento da organização do cliente.</p>
                </div>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients 
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
            <h4>Kay Garland</h4>
            <p class="text-muted">Lead Designer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
            <h4>Larry Parker</h4>
            <p class="text-muted">Lead Marketer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
            <h4>Diana Pertersen</h4>
            <p class="text-muted">Lead Developer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
        </div>
      </div>
    </div>
  </section>
-->
  <!-- Clients 
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>
-->

  <!-- Contact -->
<section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contato</h2>
          <h4 class="section-subheading" style="color:#fff;">rua teste, N°2185<br>
                                                            CENTRO - JABOTICABAL-SP<br>
                                                            CPNJ 123456</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="formulario" >
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" autocomplete="off" name="nome" id="nome" type="text" placeholder="Digite seu Nome*" required="required" >
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Digite seu Email *" required="required">
                </div>
                <div class="form-group">
                  <input class="form-control" autocomplete="off" name="assunto" id="assunto" type="text" placeholder="Digite o Assunto *" required="required" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" autocomplete="off" name="mensagem" id="mensagem" placeholder="Digite sua Mensagem *" required="required"></textarea>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-light" type="submit">Enviar mensagem</button>
              </div>
            </div>
          </form>
          <br>
          <div id="msg"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
        <ul class="list-inline social-buttons">
            <li class="list-inline-item">
            <a href=" https://www.instagram.com/jucatratores01/" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item">
            <a href="https://www.facebook.com/jucatratores01/" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
            <a style="color:#000;" href="<?= base_url(); ?>login">Área Restrita</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">

                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Threads</li>
                  <li>Category: Illustration</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
   
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Explore</li>
                  <li>Category: Graphic Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
         
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Finish</li>
                  <li>Category: Identity</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">

                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Lines</li>
                  <li>Category: Branding</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">

                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Southwest</li>
                  <li>Category: Website Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">

                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Window</li>
                  <li>Category: Photography</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>



  <!-- Custom scripts for this template -->
  <script src="<?= base_url(); ?>assets/js/agency.min.js"></script>


<script>
      $(function(){
                  $("#formulario").on('submit', function(){
                     var form = $('#formulario')[0];
                     var formData = new FormData(form);
                     $.ajax({
                          url: 'http://jucatratores.com.br/welcome/email',
                          data: formData,
                          cache: false,
                          type: 'POST',
                          cache: false,
                          processData: false, 
                          contentType: false, 
                         success: function(data){
                          $('#msg').append(data);
                          $("#nome").val('');
                          $("#email").val('');
                          $("#assunto").val('');
                          $("#mensagem").val('');
                         }
                      });                
                      return false;
                  });
  
                  });
     
  </script>

</body>

</html>
