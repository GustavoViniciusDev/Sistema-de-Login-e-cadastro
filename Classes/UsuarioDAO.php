<?php


class UsuarioDAO{
    private $conn;

    public function __construct(){
        $this->$conn = new Conexao();
    }


    //efetua o login
    public function login($nome,$senha){
        $sql = "SELECT * FROM usuario WHERE nome  = '$usuario'  AND senha = '$senha'";

        $executar = mysqli_query($this->$conn->getCon(), $sql);

        if(mysqli_num_rows($enviar)>0){
            return true;
        }
        else{
            return false;
        }
    }


    //verifica se ja existe login com o mesmo email no banco

    public function unico($email){
        $unic = "SELECT * FROM usuario WHERE email = '$email'";

        $executar = mysqli_query($this->$conn->getCon(), $unic);


        if(mysqli_num_rows($executar) > 0){
            return false;
        }
        else{
            return true;
        }
    }


    //cadastra usuario

    public function cadastrar($nome,$email,$senha,$confirmar_senha){
        $sql = "INSERT usuario (nome, email,senha,confirmar_senha) VALUES ('$nome','$email','$senha','$confirmar_senha')";

        $executar = mysqli_query($this->$conn->getCon()), $sql);

       

        if(mysqli_affected_rows($executar) > 0){
            return true;
        }
        else{
            return false;
        }
    }

    
}