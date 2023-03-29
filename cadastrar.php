<?php


if(isset($_POST['cadastrar'])){
  include('Classes/Conexao.php');
  include('Classes/UsuarioDAO.php');


  $cadastrar = new UsuarioDAO();

  $nome = trim(strip_tags($_POST['usuario']));// atribui login à variavel, com funções contra sql inject
  $email = trim(strip_tags($_POST['email']));
  $senha = trim(strip_tags($_POST['senha']));
  $confirmar_senha = trim(strip_tags($_POST['confirmar_senha']));

  if($senha == $repitir_senha){
    //caso o login escolhido ja exista
    $consulta = $cadastrar->unico($nome);
    if($consulta == false){
      header('location:cadastrar.php?repetido=senha');

    }else{
      $insere = $cadastrar->cadastrar($nome,$email,$senha,$confirmar_senha);

        if($insere == true){
          header('location:cadastrar.php?success=cadastro');
        }
      }
    
    }else{
      header('location:cadastrar.php?erro=senha');
    }
}




?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Cadastro de usuario</title>
  </head>

<body>

  <?php
    // mensagem de erro caso as senhas não sejam iguais
    if(isset($_GET['erro'])) {
      echo '<div class="alert alert-danger">As senhas devem ser iguais!</div>';
    }

    //mensagem de erro caso o login escolhido ja exista

    if(isset($_GET['repetido'])){
      echo '<div class="alert alert-danger">Este Login já foi escolhido por outra pessoa!</div>';
    }

    //mensagem caso o usuario seja cadastrado corretamente

    if(isset($_GET['success'])) {
      echo '<div class="alert alert-success">Usuario cadastrado!</div>';
    }


  ?>


<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Cadastre-se Agora</h3>
              
            </div>
            <!-- <form action="#" method="post"   onsubmit="return validaCadastro()"> -->
            <form action="#" method="post" >
              <div class="form-group first">
                <label for="username">Usuario</label>
                <input type="text" class="form-control" name="usuario" id="username">
              </div>
              <div class="form-group ">
                <label for="username">Email</label>
                <input type="text" class="form-control" name="email" id="email">
              </div>
              <div class="form-group ">
                <label for="username">Senha</label>
                <input type="password" class="form-control" name="senha" id="password" onkeyup="senhaForca()">
                
              </div>
              <div  id="erroSenhaFraca">
              </div>
              <!-- <div class="form-group" id="ifnSenha"></div> -->
             
              <div class="form-group last mb-4">
                <label for="password">Confirmar senha</label>
                <input type="password" class="form-control" name="confirmar_senha" id="confpassword">
              </div>
              <div  id="erroConfirmarSenha">
              
              

              <input type="submit" value="Criar conta" class="btn btn-block btn-primary">

              <div class="align-items-center">
                <!-- <label class="control control--checkbox mb-0"><span class="caption">Lembrar de mim</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div> -->
                </label>
                <span class="ml-auto"><a href="index.php" class="forgot-pass">Voltar a tela de login</a></span> 
              </div>

              <span class="d-block text-left my-4 text-muted">&mdash; Ou entre com suas redes sociais &mdash;</span>
              
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>