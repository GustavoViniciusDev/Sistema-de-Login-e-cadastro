<?php

private $id;
private $nome;
private $email;
private $senha;
private $confirmar_senha;


function getId(){
    return $this->id;
}

function setId($id){
    $this->id = $id;
}

function getNome(){
    return $this->nome;
}

function setNome(){
    $this->nome = $nome;
}

function getEmail(){
    return $this->email;
}

function setEmail(){
    $this->email = $email;
}

function getSenha(){
    return $this->senha;
}

function setSenha(){
    $this->senha = $senha;
}

function getConfirmarSenha(){
    return $this->Confirmar_senha;
}

function setConfirmarSenha(){
    $this->getConfirmar_senha; = $confirmar_senha;
}