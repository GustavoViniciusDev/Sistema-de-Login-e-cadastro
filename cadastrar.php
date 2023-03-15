<?php
session_start();
require_once('conexao/conect.php'); 

if(!isset($_SERVER['$enviar'])){

}


?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/1a56e06420.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/cadastrar.css" />
  <title>Login Forms</title>
  
</head>

<body>
<main class="container">
    <h2>Cadastro</h2>
    <!--  -->
    
    <form action="validacoes/cadastro.php" method="post" onsubmit="return validaCadastro()">
    <label for="">Nome de usuario</label>
      <div class="input-field">          
        <input type="text" name="usuario" id="username" placeholder="Coloque seu Usuario" />
        <div class="underline"></div>
      </div>
      <label for="">Email</label>
      <div class="input-field">
        <input type="email" name="email" id="email" placeholder="Coloque um Email valido" />
        <div class="underline"></div>
      </div>
      <label for="">Senha</label>
      <div class="input-field">
        <input type="password" name="senha" id="password" placeholder="Coloque uma Senha" />
        <div class="underline"></div>
      </div>
      <label for="">Confirmar senha</label>
      <div class="input-field">
        <input type="password" name="confirmar_senha" id="confpassword" placeholder="Coloque uma Senha" />
        <div class="underline"></div>
      </div>
      <input type="submit" id="cadastrar" value="Cadastrar" />
      <a href="index.php" class="cadastrar">Voltar</a>
    </form>

    <!-- <div class="footer">
      <span>Or Connet with Social Media</span>
      <div class="social-field">
        <div class="social-field twitter">
          <a href="#">
            <i class="fab fa-twitter"></i>
            Sign in with Twitter
          </a>
        </div>
      </div>
      <div class="social-field">
        <div class="social-field facebook">
          <a href="#">
            <i class="fab fa-facebook"></i>
            Sign in with Facebook
          </a>
        </div>
      </div>
    </div> -->
  </main>

  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>