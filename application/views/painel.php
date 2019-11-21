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



    <link rel="stylesheet" href="<?= base_url();?>assets/css/jquery.dataTables.min.css">


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

.navbar-inverse .navbar-brand {
    color: #fff;
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
            <li class="menu"><a href="<?= base_url();?>painel">Início</a></li>
            <li><a href="<?= base_url();?>login/deslogar"); ?>Sair</a></li>
          </ul>
      </div>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" >
	<div class="row">

		<div class="">
			<?php if(isset($error)):?>
				<div class="alert alert-warning"><?=$error?></div>
			<?php endif; ?>
      <h2>Cadastro do Produto</h2>
			<form  action="<?= base_url(); ?>painel/cadastro" method="POST" enctype="multipart/form-data">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome"  placeholder="" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Valor</label>
                    <input  type="text" class="form-control" id="valor" name="valor" placeholder="" required>
                </div>
                <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Categoria</label>
                <select class="form-control" name="categoria_id" id="categoria_id" required>
                    <option value="" >Selecione uma Categoria</option>
                    <?php foreach($categorias as $categoria){ ?>
                    <option value="<?= $categoria['id_categoria']; ?>"><?= $categoria['nome']; ?></option>
                    <?php } ?>
                </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">Descrição</label>
                    <textarea class="form-control"  rows="5" id="descricao" name="descricao" maxlength="300" placeholder="" required></textarea>
                </div>
                <div class="form-group col-md-12">
					<label>Selecione as fotos</label>
					<input type='file' name='userfile[]' id="userfile" multiple accept=".jpg, .png, .jpeg" required> <br/><br/>
				</div>

        <div class="form-group col-md-12">
				<input type="submit" class="btn btn-success " value="Cadastrar" />
			</div>


			</form>

		</div>
		</div>
    <?php if($this->session->flashdata("success")) { ?>
      <div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong><?= $this->session->flashdata("success") ?></strong></div>
    <?php } ?>

    <?php if($this->session->flashdata("foto")) { ?>
      <div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <strong><?= $this->session->flashdata("foto") ?></strong></div>
    <?php } ?>
		
  </div>
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" >
  <h2 style="margin-bottom: 50px;">Listagem de Produtos</h2>
  <table id="example"  class="table table-striped table-bordered" cellspacing="0" width="100%" >
        <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Modelo</th>
            <th>Foto</th>
            <th>Ações</th>
        </tr>
        </thead>
    </table>
</div>

<div style="margin-bottom:80px;"></div>




<script>
function deletar(id_produto){

swal({
title: "deseja realmente excluir?",
icon: "warning",
buttons: true,
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
  $.ajax({
    url: "<?= base_url(); ?>painel/selectapagar",
    type: "POST",
    data: {id_produto : id_produto},
    success:function(){

      swal("deletado!", "produto deletado!", "success").then(function(){
    location.reload();
    });

    },
    error:function(){
      swal("erro ao deletar!", {icon: "error",});
    }
  });



}

});


}

</script>
-->

<script src="<?= base_url();?>assets/js/jquery-3.3.1.js"></script>

<script src="<?= base_url();?>assets/js/jquery.dataTables.min.js"></script>


<script>
    $(document).ready(function(){
        $('#example').DataTable({
            "processing": true,
            "serverSide": true,
            "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ registros",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                    }
                },
            "ajax":{
                "url":"<?php echo base_url()?>painel/fetch",
                "type": "POST"
            },
            "columns": [
            { "data": "id_produto" },
            { "data": "nome" },
            { "data": "modelo" },
            { "data": "img1" },
            { "data": "descricao" }
        ],
        "order": [[ 0, "desc" ]]
        });
    });
</script>





  </body>
</html>
<?php

}else{
    redirect("login");
 } ?>