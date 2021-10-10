<?php
session_start();

require_once "inc/config.php";

$con = new PDO(SERVIDOR, USUARIO, SENHA);

$sql = $con->prepare("SELECT * FROM usuarios WHERE email=? AND senha=?");
$sql->execute([$_POST['email'], $_POST['senha']]);

$usuario = $sql->fetchObject();

if ($usuario){

    $_SESSION['usuario'] = $usuario;
    header("Location: ./?acao=lista");

}else{

    $_SESSION['msg'] = "Acesso restrito";
    header("login.php");

}