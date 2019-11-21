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

header.baner {
    text-align: center;
    color: #fff;
    background-image: url(assets/img/loja.jpg);
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: center center;
    background-size: cover;
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





  <header class="baner">
    <div class="container" style="margin-top:120px;">
      <div class="intro-text">
        <div style="padding: 180px;"></div>
    </div>
  </header>

  <a class="navbar-brand js-scroll-trigger" href="#page-top">
    <img src="<?= base_url(); ?>assets/img/uparrow.png" style="height:50px; position:fixed; bottom: 90px; right: 20px; z-index:100;" data-selector="img">
</a>

  <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5516991194488" target="_blank">
    <img src="<?= base_url(); ?>assets/img/zap.png" style="height:50px; position:fixed; bottom: 20px; right: 20px; z-index:100;" data-selector="img">
</a>


<div class="container" style="margin-top:60px;">
<div class="row">


<div class="container">

    <h3>Pesquise por Categoria</h3>
    <form id="ir" method="post" style="margin-bottom:40px;">
        <div class="row">
            <div class="form-group col-md-8">
            <input  id="start" name="start" type="hidden"  value="0" >
            <input  id="limit" name="limit" type="hidden"  value="6">
                <select class="form-control" name="busca" id="busca" required>
                    <option value="" >Selecione uma Categoria</option>
                    <?php foreach($categorias as $categoria){ ?>
                    <option value="<?= $categoria['id_categoria']; ?>"><?= $categoria['nome']; ?></option>
                    <?php } ?>
                </select>
            </div> 
            <div class="col-md-4">
                <button type="submit" id="submit" class="btn btn-light" style="border-color:#000;">pesquisar</button>
            </div>        
        </div>
        <form>
</div>



</div>

<div class="col-md-12">
  
<div class="row">


<div id="load_dado" class="row col-12" ></div>
<div id="load_dado_message"></div> 
    
    
<div id="load_data" class="row col-12" ></div>
<div id="load_data_message"></div>
    
    
    
 </div>

    
  

<br />

</div>


</div>
</div>






<!--
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">detalhes</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="col-md-6 col-6">
          <img src="" class="recipient-nome_img" style="max-height:290px; max-width:390px;">
          </div>
          <div class="col-md-6 col-6">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Código</label>
            <p id="recipient"><p>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Nome</label>
            <p id="recipient-nome"></p>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Modelo</label>
            <p id="recipient-modelo"><p>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Valor</label>
            <p  id="recipient-valor"></p>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Descricao</label>
            <p  id="recipient-descricao"></p>
          </div>

          <div class="form-group">
          <b>Formas de pagamento: <img src="assets/img/pag.png"></b>
          <p><br>
          <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5516991194488" target="_blank" style="color:black;">
            <img src="<?= base_url(); ?>assets/img/zap.png" style="height:20px;" data-selector="img">Clique aqui e compre!
        </a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a style="color:black;">
            <img src="<?= base_url(); ?>assets/img/tel.png" style="height:20px;" data-selector="img">(16)3212-1109
        </a>          
          </p>
        <button style="float:right;" type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
          </div>


        </div>
      </div>

      <div class="modal-footer" style="text-align:center;">
                    

      </div>
    </div>
  </div>
</div>
-->
<script>
/*
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  var recipientnome = button.data('whatevernome') // Extract info from data-* attributes
  var recipientmodelo = button.data('whatevermodelo') // Extract info from data-* attributes
  var recipientvalor = button.data('whatevervalor') // Extract info from data-* attributes
  var recipientdescricao = button.data('whateverdescricao') // Extract info from data-* attributes
  var recipientnome_img = button.data('whatevernome_img')
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Detalhes')
  modal.find('#recipient').text(recipient)
  modal.find('#recipient-nome').text(recipientnome)
  modal.find('#recipient-modelo').text(recipientmodelo)
  modal.find('#recipient-valor').text(recipientvalor)
  modal.find('#recipient-descricao').text(recipientdescricao)
  modal.find('.recipient-nome_img').attr('src',recipientnome_img)
})
*/
</script>



<script>
  $(document).ready(function(){

    var limit = 6;
    var start = 0;
    var action = 'inactive';

    function lazzy_loader(limit)
    {
	  $('#load_data_message').html("<img src='<?php echo base_url(); ?>assets/img/ic.gif' style='height:150px; width:210px;'>");
    }


    function load_data(limit, start)
    {
      $.ajax({
        url:"<?php echo base_url(); ?>painel/show",
        method:"POST",
        data:{limit, start},
        cache: false,
        success:function(data)
        {
          if(data == '')
          {
            $('#load_data_message').html('');
            action = 'active';
          }
          else
          {
            $('#load_data').append(data);
            $('#load_data_message').html("");
            action = 'inactive';
          }
        }
      })
    }

    if(action == 'inactive')
    {
      action = 'active';
      load_data(limit, start);
    }

    $(window).scroll(function(){
      if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
      {
        lazzy_loader(limit);
        action = 'active';
        start = start + limit;
        setTimeout(function(){
          load_data(limit, start);
        }, 2000);
      }
    });

  });
</script>




      
<script>
      
      
      $(function(){
                  $("#ir").on('submit', function(){
                     var busca = $("#busca").val();
                     var limit = $("#limit").val();
                     var start = $("#start").val();



                      
                      //alert(busca);
                      //alert(limit);
                      //alert(start);
                      
                     var vazio = null;
                     $('#load_dado').html(vazio);
                      
                     $('#load_data').remove();
                     $('#load_data_message').remove();
  
                     var action = 'inactive';
                     
                       function load_country_dado(busca, limit, start) {
                            $.ajax({
                              url:"<?php echo base_url(); ?>painel/pesquisa",
                             method:"POST",
                             data:{busca, limit, start },
                             cache:false,
                             success:function(data)
                             {
                              $('#load_dado').append(data);
                              if(data == '')
                              {
                               $('#load_dado_message').html("");
                               action = 'active';
                              }
                              else
                              {
                                $('#load_dado_message').html("<img src='<?php echo base_url(); ?>assets/img/ic.gif' style='height:150px; width:210px;'>");
                               action = "inactive";
                              }
                             }
                            });
  
                           }
                      
                      
                       if(action == 'inactive')
                           {
                            action = 'active';
                            load_country_dado(busca, limit, start);
                           }
                           $(window).scroll(function(){
                            if($(window).scrollTop() + $(window).height() > $("#load_dado").height() && action == 'inactive')
                            {
                             action = 'active';
                             start = start + limit;
                             setTimeout(function(){
                              load_country_dado(busca, limit, start);
                             }, 2000);
                            }
                           });
                  return false;
  
                  });
  
                  });
            
        
     
  </script>





  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>



  <!-- Custom scripts for this template -->
  <script src="<?= base_url(); ?>assets/js/agency.min.js"></script>

</body>

</html>
