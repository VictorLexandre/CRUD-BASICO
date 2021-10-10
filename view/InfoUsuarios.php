<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a785a1723d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/infos.css">
</head>
<body style="background-color: #cad2c5; font-family: 'Times New Roman';font-size: 18px">
<h2 id="titulo"><i><b>Informações do Usuário :</b></i></h2>
<a id="voltar" href="./?acao=lista"><i class="fas fa-arrow-left"></i> Voltar</a><br>
<hr size="5" style=" color: #354f52; background-color: #354f52; margin-top: 2.5%">
<br>
<div id="infos">
    <center><h4><b>Nome do Usuário : <?=$usuarios->nome?></b></h4>
    <hr>
    <p>Email do Usuário : <?=$usuarios->email?></p>
    <p>Senha do Usuário : <?=$usuarios->senha?></p></center>
</div>
</body>
</html>
