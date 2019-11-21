<?php


if($this->session->userdata("usuario_id")){


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <title>Juca Tratores</title>
    <style>

/*
 * Base structure
 */

/* Move down content because we have a fixed navbar that is 50px tall */
body {
  padding-top: 50px;
}


/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

/*
 * Top navigation
 * Hide default border to remove 1px line.
 */
.navbar-fixed-top {
  border: 0;
}

/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}





@media (min-width: 768px) {
  .navbar-nav  {
    display: none;
  }
}

@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #428bca;
}



.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


</style>
  </head>
  <body>
  
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Juca Tratores</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="<?= base_url();?>painel">Inicio<span class="sr-only">(current)</span></a></li>
          <li ><a href="<?= base_url();?>login/deslogar">Sair</a></li>
          </ul>

        </div>
      </div>
    </nav>

    <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Menu Principal <span class="sr-only">(current)</span></a></li>
            <li><a href="<?= base_url();?>painel">Início</a></li>
            <li><a href="<?= base_url();?>login/deslogar"); ?>Sair</a></li>
          </ul>
      </div>

  <div class="container col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <div style="border:1px solid #ccc; padding:7px;">
    <h2>Edição do Produto</h2>
	 <form id="editar" method="POST" enctype="multipart/form-data">

      <input type="hidden" class="form-control" name="id_produto" value="<?= $produto->id_produto; ?>" >
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" autocomplete="off" class="form-control" id="name" name="nome" value="<?= $produto->nome?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Modelo</label>
                    <input type="text" autocomplete="off" class="form-control" id="modelo" name="modelo" value="<?= $produto->modelo; ?>" required>
                </div>
                <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Categoria</label>
                <select class="form-control" name="fk_categoria" id="fk_categoria" required>
                    <option  value="<?= $produto->fk_categoria; ?>" >
                   
                    <?php
                    
                    if(($produto->fk_categoria) == "1")  {
                      echo 'Tratores';
                    }

                    if(($produto->fk_categoria) == "2")  {
                      echo 'Plantadeiras';
                    }

                    if(($produto->fk_categoria) == "3")  {
                      echo 'Pulverizadores';
                    } 

                    if(($produto->fk_categoria) == "4")  {
                      echo 'Cultivadores e Calçadeiras';
                    } 

                    if(($produto->fk_categoria) == "5")  {
                      echo 'Grades e Arados';
                    } 

                    if(($produto->fk_categoria) == "6")  {
                      echo 'Colheitadeiras';
                    } 

                    if(($produto->fk_categoria) == "7")  {
                      echo 'Sub isoladores';
                    } 
                    
                    if(($produto->fk_categoria) == "10")  {
                      echo 'Rotativas';
                    } 

                    if(($produto->fk_categoria) == "8")  {
                      echo 'Peças';
                    } 
                    
                    if(($produto->fk_categoria) == "9")  {
                      echo 'Implementos em Geral';
                    } 
                    
                    ?>
                    
                    (atual)
                    </option>
                    <?php foreach($categorias as $categoria){ ?>
                    <option value="<?= $categoria['id_categoria']; ?>"><?= $categoria['nome']; ?></option>
                    <?php } ?>
                </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Valor</label>
                    <input type="text" autocomplete="off"   class="form-control" id="valor" name="valor" value="<?= $produto->valor; ?>" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">Descrição</label>
                    <textarea class="form-control"  rows="5" id="descricao" name="descricao" maxlength="300"  required><?= $produto->descricao; ?></textarea>
                </div>


            <input type="submit" class="btn btn-success " value="Alterar" />
			</form>
		</div>
		</div>
		


  <div class="container col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div style="border:1px solid #ccc; padding:7px;">
      <h2>Edição das Fotos</h2>

        <input type="hidden" class="form-control" name="id_produto" value="<?= $produto->id_produto; ?>">
        <div class="form-group" style="display:inline-block;">
          <div class="row">
            <div class="form-group col-md-3">
              <img src="../uploads/<?= $produto->img1; ?>" style="height:100px;"><br>
              <button type="button" class="btn btn-dark btn-sm view_data" data-toggle="modal" data-target="#exampleModal" data-img1="img1" data-whatevernome1="<?= $produto->img1; ?>" data-whatevernome_img="<?= base_url(); ?>uploads/<?= $produto->img1; ?>"><span class="glyphicon glyphicon-pencil" style="font-size:18px;"></span>editar</button>
            </div>

            <div class="form-group col-md-3">
              <img src="../uploads/<?= $produto->img2; ?>" style="height:100px;"><br>
              <button type="button" class="btn btn-dark btn-sm view_data" data-toggle="modal" data-target="#exampleModal" data-img2="img2" data-whatevernome2="<?= $produto->img2; ?>" data-whatevernome_img="<?= base_url(); ?>uploads/<?= $produto->img2; ?>"><span class="glyphicon glyphicon-pencil" style="font-size:18px;"></span>editar</button>

            </div>

            <div class="form-group col-md-3">
              <img src="../uploads/<?= $produto->img3; ?>" style="height:100px;"><br>
              <button type="button" class="btn btn-dark btn-sm view_data" data-toggle="modal" data-target="#exampleModal" data-img3="img3" data-whatevernome3="<?= $produto->img3; ?>" data-whatevernome_img="<?= base_url(); ?>uploads/<?= $produto->img3; ?>"><span class="glyphicon glyphicon-pencil" style="font-size:18px;"></span>editar</button>
            </div>

            <div class="form-group col-md-3">
              <img src="../uploads/<?= $produto->img4; ?>" style="height:100px;"><br>
              <button type="button" class="btn btn-dark btn-sm view_data" data-toggle="modal" data-target="#exampleModal" data-img4="img4" data-whatevernome4="<?= $produto->img4; ?>" data-whatevernome_img="<?= base_url(); ?>uploads/<?= $produto->img4; ?>"><span class="glyphicon glyphicon-pencil" style="font-size:18px;"></span>editar</button>
            </div>
            
            <div class="form-group col-md-3">
              <img src="../uploads/<?= $produto->img5; ?>" style="height:100px;"><br>
              <button type="button" class="btn btn-dark btn-sm view_data" data-toggle="modal" data-target="#exampleModal" data-img5="img5" data-whatevernome5="<?= $produto->img5; ?>" data-whatevernome_img="<?= base_url(); ?>uploads/<?= $produto->img5; ?>"><span class="glyphicon glyphicon-pencil" style="font-size:18px;"></span>editar</button>
            </div>
            
          </div>
        </div>
    </div>
  </div>




  

  <script>
    $(function() {
      $("#editarfoto").on('submit', function() {
        var form = $('#editarfoto')[0];
        var formData = new FormData(form);
        $.ajax({
          url: 'updatefoto',
          data: formData,
          cache: false,
          type: 'POST',
          cache: false,
          processData: false,
          contentType: false,
          success: function(data) {
            swal("editado!", "foto alterada", "success").then(function() {
              location.reload();
            });

          }
        });
        return false;
      });
    });
  </script>



  <script>
    $(function() {
      $("#editar").on('submit', function() {
        var form = $('#editar')[0];
        var formData = new FormData(form);
        $.ajax({
          url: 'update',
          data: formData,
          cache: false,
          type: 'POST',
          cache: false,
          processData: false,
          contentType: false,
          success: function(data) {
            swal("editado!", "produto editado!", "success").then(function() {
              location.reload();
            });

          }
        });
        return false;
      });
    });
  </script>



  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="exampleModalLabel">detalhes</h4>
        </div>
        <div class="modal-body">
          <form id="editarfoto" method="POST" enctype="multipart/form-data">
            <div class="col-md-12 col-12">
              <img src="" class="recipient-nome_img" style="width:100%">
            </div>
            <div class="col-md-12 col-12"><br><br>
              <label>selecione a foto</label>
              <input type="hidden" class="form-control" name="id_produto" value="<?= $produto->id_produto; ?>">
              <input type="hidden" class="recipient-name" name="imgantes" value="">
              <input type="hidden" class="recipient-img" name="img" value="">
              <input type="file" name="imagem" id="imagem">
              <button type="submit" class="btn btn-success">alterar</button>
            </div>
            <form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    $('#exampleModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes

      var img1 = button.data('img1') // Extract info from data-* attributes
      var img2 = button.data('img2') // Extract info from data-* attributes
      var img3 = button.data('img3') // Extract info from data-* attributes
      var img4 = button.data('img4') // Extract info from data-* attributes
      var img5 = button.data('img5') // Extract info from data-* attributes

      var whatevernome1 = button.data('whatevernome1') // Extract info from data-* attributes
      var whatevernome2 = button.data('whatevernome2') // Extract info from data-* attributes
      var whatevernome3 = button.data('whatevernome3') // Extract info from data-* attributes
      var whatevernome4 = button.data('whatevernome4') // Extract info from data-* attributes
      var whatevernome5 = button.data('whatevernome5') // Extract info from data-* attributes
      var recipientnome_img = button.data('whatevernome_img')
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('Detalhes')
      modal.find('#recipient').text(recipient)

      modal.find('.recipient-img').attr('value', img1)
      modal.find('.recipient-img').attr('value', img2)
      modal.find('.recipient-img').attr('value', img3)
      modal.find('.recipient-img').attr('value', img4)
      modal.find('.recipient-img').attr('value', img5)

      modal.find('.recipient-name').attr('value', whatevernome1)
      modal.find('.recipient-name').attr('value', whatevernome2)
      modal.find('.recipient-name').attr('value', whatevernome3)
      modal.find('.recipient-name').attr('value', whatevernome4)
      modal.find('.recipient-name').attr('value', whatevernome5)
      modal.find('.recipient-nome_img').attr('src', recipientnome_img)

      //modal.find('#recipient-nome_img').src = ""+recipientnome_img;
    })
  </script>













</body>

</html>

<?php

} else {
  redirect("login");
} ?>