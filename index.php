<?php
    require_once 'CLASSES/usuarios.php';
    $u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="estiloLogin.css">
</head>

<body>
    <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="active" id="login-form-link">Entrar</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="login-form" method="POST" role="form" style="display: block;">
                                        <div class="form-group">
                                            <input type="text" name="email" id="username" tabindex="1" class="form-control" placeholder="Email" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="senha" id="password" tabindex="2" class="form-control" placeholder="Senha">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Acessar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="cadastrar.php" tabindex="5" class="forgot-password">Ainda não é inscrito? <strong>Cadastre-se!</strong></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>						    		
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php

if(isset($_POST['email']))
{
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if(!empty($email) && !empty($senha))
    {
        $u->conectar("projeto_login", "localhost", "root", "");
        if($u->msgErro == "")
        {
            if($u->logar($email,$senha))
            {
                header("location: areaPrivada.php");
            }else
            {
                ?>
                    <div class="msg-erro">
                        Email e/ou senha estão incorretos!
                    </div>
                <?php
            }
        }else
        {
            ?>
                <div class="msg-erro">
                    <?php echo "Erro: ".$u->msgErro;?>
                </div>
            <?php
        }
    }else
    {
        ?>
            <div class="msg-erro">
                Preencha todos os campos!
            </div>
        <?php
    }
}

?>

</body>
</html>