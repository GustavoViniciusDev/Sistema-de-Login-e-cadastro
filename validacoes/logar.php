<?php
include_once('../conexao/conect.php');

session_start();

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);


$sql = "SELECT * FROM usuario WHERE nome = '{$usuario}' AND senha  = '{$senha}'";

$enviar = $conn->query($sql);

if(mysqli_num_rows($enviar) > 0){
    $_SESSION['usuario']= $usuario;
    $_SESSION['senha'] = $senha;
    header('location: ../tela.php');
   
}
else{
    unset ($_SESSION['usuario']);
    unset ($_SESSION['senha']);

    print"<script> location.href='../cadastrar.php';</script>";

}