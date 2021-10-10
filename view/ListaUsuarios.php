<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a785a1723d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/lista.css">
</head>
<body style="background-color: #cad2c5; font-family: 'Times New Roman';font-size: 18px">
<a id="sair" href="logout.php">Sair <i class="fas fa-sign-out-alt"></i></a><br>
<div id="tabUsu">
<h4 id="titulo"><b>Lista de Usuários :</b></h4>
    <a id="btNovo" href="./?acao=create" class="btn"><b>Novo Usuário</b></a>
    <hr size="8" style="color: #ccc5b9; margin-top: 4%">
    <table style="background-color: #ccc5b9;box-shadow: 1px 1px 1px 1px black;" class="table table-bordered border-dark">
    <thead style="text-align: center">
    <tr>
        <th scope="col">Id :</th>
        <th scope="col">Nome :</th>
        <th scope="col">Email :</th>
        <th scope="col">Senha :</th>
        <th>Ação :</th>
    </tr>
    </thead>
        <?php foreach ($usuarios as $usuario){ ?>
    <tbody style="text-align: center;">
    <tr>
        <td><?=$usuario->id?></td>
        <td><?=$usuario->nome?></td>
        <td><?=$usuario->email?></td>
        <td><?=$usuario->senha?></td>
        <td><a href="./?acao=read&id=<?=$usuario->id?>" style="padding:5px; border:1px solid; border-radius: 5px;margin-left: 10%" type="button" class="btn-outline-success"><i class="fas fa-eye"></i></a>
            <a href="./?acao=update&id=<?=$usuario->id?>" style="padding:5px; border:1px solid; border-radius: 5px;margin-left: 10%; margin-right: 10%" type="button" class="btn-outline-primary"><i class="fas fa-edit"></i></a>
            <a href="./?acao=delete&id=<?=$usuario->id?>"  style="padding: 6px; text-align: center; border:1px solid; border-radius: 5px;margin-right: 10%" type="button" class="btn-outline-danger"><i class="fas fa-trash-alt"></i></a>

    </tr>
    </tbody>
        <?php } ?>
</table>
</div>
</body>
</html>


