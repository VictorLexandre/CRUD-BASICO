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
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body style="background-color: #cad2c5; font-family: 'Times New Roman';font-size: 18px">
<h2 id="titulo"><i><b>Cadastrar Usuários :</b></i></h2><br>
<a id="voltar" href="./?acao=lista"><i class="fas fa-arrow-left"></i> Voltar</a>
<hr size="5" style=" color: #354f52; background-color: #354f52; margin-top: 2.5%">
<br>
<center><div id="fundo">
    <form method="post" action="">
        <center><h3><b>Preencha o Formulário :</b></h3></center>
        <hr>
        <br>
        <div style="margin-left: 5%; margin-right: 5%" class="row mb-3">
            <div class="col-sm-12">
                <label for="nome" class="col-sm-2 col-form-label"><b>Nome :</b></label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="col-sm-12">
                <label for="email" class="col-sm-2 col-form-label"><b>Email :</b></label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-sm-12">
                <label for="senha" class="col-sm-2 col-form-label"><b>Senha :</b></label>
                <input type="text" class="form-control" id="senha" name="senha" required>
            </div>
        </div>
        <button style="width: 25%; margin-right: 12%;" type="submit" class="btn btn-success"><b>Cadastrar</b></button>
        <button style="width: 25%; margin-left: 12%;" type="reset" class="btn btn-danger"><b>Limpar</b></button>
    </form>
</div></center>
</body>
</html>

