<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/1a56e06420.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/login.css" />
  <title>Login Forms</title>
  
  </head>
<body>

<main class="container">
    <h2>Login</h2>
    <form action="validacoes/logar.php" method="post" onsubmit="return validaLogin()">
      <div class="input-field">
        <input type="text" name="usuario" id="username" placeholder="Coloque seu Usuario" />
        <div class="underline"></div>
      </div>
      <div class="input-field">
        <input type="password" name="senha" id="password" placeholder="Coloque sua Senha" />
        <div class="underline"></div>
      </div>
      <input type="submit" value="Logar" />
      <a href="cadastrar.php" id="logar" class="cadastrar">Cadastrar</a>
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

  <script src="js/script.js"></script>

</body>

</html>