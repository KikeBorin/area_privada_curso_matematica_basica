<?php

Class Usuario
{
    //$pdo é fazer conexão com o banco de dados//
    private $pdo;
    public $msgErro = "";

    //método public function conectar, ele conecta o banco de dados//
    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        
        try
        {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        }catch(PDOException $e){
            $msgErro = $e->getMessage();
        } 
    }
    
    //método public function cadastrar, ele envia as informações para o banco de dados//
    public function cadastrar($nome, $telefone, $email, $senha)
    {
        global $pdo;

        //verificar se já existe o email cadastrado, buscando no sql//
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
        $sql->bindValue(":e",$email);
        $sql->execute();

        //se o id_usuario que é auto_increment estiver no banco, no caso um número qualquer, ele returna false//
        if($sql->rowCount() > 0)
        {
            return false;
        }
        //senão faremos o cadastro com o método prepare//
        else
        {
            $sql = $pdo->prepare("INSERT INTO usuarios(nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":t",$telefone);
            $sql->bindValue(":e",$email);
            $sql->bindValue(":s",md5($senha));
            $sql->execute();
            return true;
        }
    }

    public function logar($email, $senha)
    {
        global $pdo;
        
        //se tiver o email e senha entrar na areaPrivada.php//
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", md5($senha));
        $sql->execute();

        //se veio um id_usuario ela está cadastrada//
        if($sql->rowCount() > 0)
        {
            //transformar o que veio no banco de dados e transforma em um array através do comando fetch()//
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true; 
            //logado com sucesso
        }
        else
        {
            return false; //nao foi possivel logar
        }
    }
}


?>