<?php
session_start();
require_once('../conexao/conect.php');

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$confirmar_senha = md5($_POST['confirmar_senha']);

//tratar pra verificar se os dados estao corretos

if($senha == $confirmar_senha){
    $sql = "INSERT INTO usuario (nome,email,senha,confirmar_senha) VALUES ('{$usuario}','{$email}','{$senha}','{$confirmar_senha}')";
    $enviar = $conn ->query($sql);

        if(empty($_POST['usuario'])){
            print"<script> alert('O campo usuario esta em branco!!!');</script>";
        }
        else if (empty($_POST['email'])){
            print"<script> alert('O campo email esta em branco!!!');</script>";
        }
        else if(empty($_POST['senha'])){
            print"<script> alert('O campo senha esta em branco!!!');</script>";
        }
        else if(empty($_POST['confirmar_senha'])){
            print"<script> alert('O campo confirmar senha esta em branco!!!');</script>";
        }
        
        
            if($enviar == true){
                print"<script> alert('Cadastro concluido com sucesso!!!');</script>";
                print"<script> location.href='../index.php';</script>";
            }
            else{
                print"<script> location.href='../cadastrar.php';</script>";
                print"<script> alert('Erro ao cadastrar usuario')</script>";
            }
        


    
}else{
    print"<script> alert('As senhas não coincidem');</script>";
    print"<script> location.href='../cadastrar.php';</script>";
    
}


