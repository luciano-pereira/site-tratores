<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/assets/img/favicon.ico">
  <meta name="robots" content="index, follow">
  <title>Juca Tratores</title>
  <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     
        <link href="<?=base_url(); ?>assets/css/agency.min.css" rel="stylesheet">

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
    background-color: #f5f5f5;
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

}





@media (max-width: 762px){

#subt{
display:none;
}


}



header.baner {
    text-align: center;
    color: #fff;
    background-image: url(assets/img/loja.jpg);
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: center center;
    background-size: cover;
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
.fixed-top {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
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
.page-section {
    padding: 50px 0;
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

.carousel-control-next, .carousel-control-prev {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
     opacity: .8; 
    transition: opacity .15s ease;
}

.carousel-control-next-icon, .carousel-control-prev-icon {
    display: inline-block;
    width: 40px;
    height: 40px;
    background-color: blue;
    border-radius:50%;
}

  </style>

</head>

<body id="page-top">

  
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="<?= base_url(); ?>"><img style="height:110px;" class="logo img-fluid" src="<?= base_url(); ?>assets/img/about/logomarca.png"  ></a>
      

<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       <i class="fas fa-bars" style="font-size:17px;"></i>
     </button>
 
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>">Página Inicial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>produtos">Produtos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>





<div class="container" style="margin-top:180px;">
<h4>DESCRIÇÃO DO PRODUTO</h4><br>
<div class="row">

<div class="col-md-7" style="border: 1px solid #ccc;">




<div id="carouselExampleInterval" class="carousel slide"  data-ride="carousel">
              <div class="carousel-inner" style="height:500px; text-align:center;" >


                <?php if(!empty($produto->img1)){ ?>
                <div class="carousel-item active" data-interval="30000">
                  <img src="<?= base_url(); ?>uploads/<?= $produto->img1; ?>" style="height:500px;"   class="img-fluid" alt="...">
                </div>
                <?php } ?>


                <?php if(!empty($produto->img2)){ ?>
                <div class="carousel-item" data-interval="30000">
                  <img src="<?= base_url(); ?>uploads/<?= $produto->img2; ?>" style="height:500px;"    class="img-fluid" alt="...">
                </div>
                <?php } ?>

                <?php if(!empty($produto->img3)){ ?>
                <div class="carousel-item" data-interval="30000">
                  <img src="<?= base_url(); ?>uploads/<?= $produto->img3; ?>" style="height:500px;"   class="img-fluid" alt="...">
                </div>
                <?php } ?>

                <?php if(!empty($produto->img4)){ ?>
                <div class="carousel-item" data-interval="30000">
                  <img src="<?= base_url(); ?>uploads/<?= $produto->img4; ?>" style="height:500px;"    class="img-fluid" alt="...">
                </div>
                <?php } ?>
                
                <?php if(!empty($produto->img5)){ ?>
                <div class="carousel-item" data-interval="30000">
                  <img src="<?= base_url(); ?>uploads/<?= $produto->img5; ?>" style="height:500px;"    class="img-fluid" alt="...">
                </div>
                <?php } ?>

              </div>
              <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            </div>






<div class="col-md-5">
<table class="table table-bordered">
<tr>
  <td class="active"><strong>Nome: </strong></td>
  <td class="active"><?=$produto->nome;?></td>
  
</tr>
<tr>
  <td class=""><strong>Modelo: </strong></td>
  <td class=""><?=$produto->modelo;  ?></td>
</tr>
<tr>
  <td class="active"><strong>Valor: </strong></td>
  <td class="active"><?=$produto->valor;  ?></td>
</tr>
<tr>
  <td class=""><strong>Contato: </strong></td>
  <td class="">(00)3333-3333</td>
</tr>
<tr>
  <td  class="active"><strong>Descrição: </strong></td>
  <td  class="active"><?=$produto->descricao;  ?></td>
</tr>
<tr>
  <td  class=""><strong>Formas de Pagamento: </strong></td>
  <td  class=""><img src="<?= base_url(); ?>assets/img/pag.png"></td>
</tr>

<tr>
<td  class="active"><strong>Comprar via Whatsapp: </strong></td>
<td class="active">
        <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5516999999999&text=Olá,%20tenho%20interesse%20em%20comprar%20o%20produto%20<?=$produto->nome;?>%20modelo%20<?=$produto->modelo;?>." target="_blank" style="color:black;">
            <img src="<?= base_url(); ?>assets/img/zap.png" style="height:20px;" data-selector="img">Clique aqui e compre!
        </a>
</td>
</tr>

</table>
</div>



</div>

</div>


</div>



</div>


<section class="page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase" style="color:#000;"></h2>
        </div>
      </div>
      </div>
      </div>
    </div>
    
  </section>

<footer class="footer" style="border-top: 1px solid #ccc;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
        <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://www.facebook.com/jucatratores01/" target="_blank">
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
      </div>
    </div>
  </footer>






  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>



  <!-- Custom scripts for this template -->
  <script src="<?= base_url(); ?>assets/js/agency.min.js"></script>

</body>

</html>







