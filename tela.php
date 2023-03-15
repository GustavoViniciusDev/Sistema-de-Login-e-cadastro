<!DOCTYPE html>
<html lang="pr_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela</title>
    <?php
    session_start();
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
    {
        header('location:index.php');
    }

    $logado = $_SESSION['usuario'];

    ?>
</head>
<body>
<h1>Olá <?php echo $logado;  ?></h1>


    <?php   echo '<a href="validacoes/logout.php?token='.md5(session_id()).'">Sair</a>';?>
</body>
</html>