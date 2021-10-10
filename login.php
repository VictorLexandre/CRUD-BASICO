<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
</head>
<body style="background-color: #cad2c5; font-family: 'Times New Roman'">
<h2 id="titulo"><i><b>Login :</b></i></h2>
<hr size="5" style="color: #354f52; background-color: #354f52">
<br>
<center>
    <div id="fundo">
        <form id="form" method="post" action="autenticacao.php" class="row g-3">
            <center><h3><b>Formulário de Login :</b></h3></center>
            <hr>
            <center><img style="width: 40%" src="imgs/Login.png" alt=""></center>
            <br>
            <div class="col-md-12">
                <label style="font-size: 20px" for="email" class="form-label"><b>Email :</b></label>
                <input style="font-size: 20px" type="email" class="form-control" id="email" name="email" placeholder="Digite o email" autofocus required>
            </div>
            <div class="col-md-12">
                <label style="font-size: 20px" for="senha" class="form-label"><b>Senha :</b></label>
                <input style="font-size: 20px" type="password" class="form-control" id="senha" name="senha" placeholder="Digite a senha" required>
            </div>
            <div class="col-12">
                <button style="width: 25%; margin-right: 12%;" type="submit" class="btn btn-success"><b>Entrar</b></button>
                <button style="width: 25%; margin-left: 12%;" type="reset" class="btn btn-danger"><b>Limpar</b></button>
            </div>
        </form>
    </div></center>
</body>
</html>
