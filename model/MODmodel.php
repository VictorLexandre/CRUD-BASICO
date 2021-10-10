<?php


class MODmodel
{
    private $id;
    private $nome;
    private $email;
    private $senha;

    private $con;

    public function __construct(){
    $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
}

    public function all(){
        $sql = $this->con->prepare("SELECT * FROM usuarios");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

    public function create(){
    $sql = $this->con->prepare("INSERT INTO usuarios(nome, email, senha) VALUES(?,?,?)");
    $sql->execute([$this->getNome(), $this->getEmail(), $this->getSenha()]);

    if ($sql->errorCode()!='00000'){
        echo $sql->errorInfo()[2];
    }else{
        header("Location: ./?acao=lista");
    }
}

    public function read(){
        $sql = $this->con->prepare("SELECT * FROM usuarios WHERE id =?");
        $sql->execute([$this->getId()]);
        $row = $sql->fetchObject();
        return $row;
    }

    public function update(){
        $sql = $this->con->prepare("UPDATE usuarios SET email=?, nome=?, senha=? WHERE id =?");
        $sql->execute([$this->getEmail(), $this->getNome(), $this->getSenha(),$this->getId()]);

        if ($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }
        header("Location: ./?acao=lista");
    }

    public function delete(){
        $sql = $this->con->prepare("delete from usuarios WHERE id =?");
        $sql->execute([$this->getId()]);

        if ($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }
        header("Location: ./?acao=lista");
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}