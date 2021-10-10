<?php
session_start();

if ( !isset($_SESSION['usuario'])) {
    $_SESSION['msg'] = "Acesso restrito";
    header("login.php");
}