<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "cadastro";


$conn = mysqli_connect($host,$username,$password,$database);

if(!$conn){
    echo "Erro ao conectar o banco de dados". mysqli_error_connect();
}