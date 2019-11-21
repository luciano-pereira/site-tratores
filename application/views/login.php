<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Juca Tratores</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}


</style>
    </head>

        
    <body>

    <div class="container">

<form class="form-signin" action="<?= site_url("login/entrar"); ?>" method="post">
  <h2 class="form-signin-heading"><i>Juca Tratores</i></h2>
  <label for="usuario" >usuário</label>
  <input type="text" class="form-control" autocomplete="off" name="usuario" placeholder="usuario"  value="<?= set_value('usuario') ?>">
     <?=  form_error("usuario"); ?> 
  <label for="inputPassword">senha</label>
  <input type="password" class="form-control" autocomplete="off" name="senha" placeholder="senha">
    <?=  form_error("senha"); ?>
  <button class="btn btn-lg btn-primary btn-block" type="submit">entrar</button><br><br>
  <a href="<?= base_url(); ?>">voltar para página  inicial</a>
</form>


</div> <!-- /container -->




  </body>
</html>
