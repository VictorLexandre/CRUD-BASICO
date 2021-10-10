<?php


class ADMcontroller
{
    public function all(){
        $obj = new MODmodel();
        $usuarios = $obj->all();

        include 'view/ListaUsuarios.php';
    }

   public function create(){
    $obj = new MODmodel();

        if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
              $obj->setNome($_POST['nome']);
              $obj->setEmail($_POST['email']);
              $obj->setSenha($_POST['senha']);

              $obj->create();
        }

        include 'view/CadastrarUsuarios.php';
    }

    public function update(){
        if (!isset($_GET['id'])){
            echo "Id não informado";
            exit;
        }

        $obj = new MODmodel();

        $obj->setId($_GET['id']);

        if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])){
            $obj->setNome($_POST['nome']);
            $obj->setEmail($_POST['email']);
            $obj->setSenha($_POST['senha']);
            $obj->update();
        }

        $usuarios = $obj->read();

        include 'view/EditarUsuarios.php';
    }

    public function info(){
        if (!isset($_GET['id'])){
            echo "Id não informado";
            exit;
        }else{
            $obj = new MODmodel();
            $obj->setId($_GET['id']);
            $usuarios = $obj->read();
        }

        include 'view/InfoUsuarios.php';
    }

    public function delete(){
        if (!isset($_GET['id'])){
            echo "Id não informado";
            exit;
        }

        $obj = new MODmodel();

        $obj->setId($_GET['id']);

        $obj->delete();
    }
}