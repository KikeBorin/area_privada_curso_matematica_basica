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
                                <a href="#" class="active" id="login-form-link">Cadastrar</a>
                            </div>
						</div>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" method="POST" role="form" style="display: block;">
									<div class="form-group">
                                        <div class="form-group">
                                            <input type="text" name="nome" id="username" tabindex="1" class="form-control" placeholder="Nome Completo" value="" maxlength="30">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="telefone" id="telefone" tabindex="1" class="form-control" placeholder="Telefone" value="" maxlength="30">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="" maxlength="30">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="senha" id="password" tabindex="2" class="form-control" placeholder="Senha" maxlength="15">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="confSenha" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar Senha" maxlength="15">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Cadastrar">
                                                </div>
                                            </div>
									    </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="index.php" tabindex="5" class="forgot-password"><strong>Retorne para tela inicial!</strong></a>
                                                    </div>
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
//php cadastra o cliente//
//verificar se clicou no botão, através do isset($_POST[])//
if(isset($_POST['nome']))
{
    //recebendo as informações depois de clicar no botão//
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confSenha']);

    //verificar se as informações estão preenchidas, através do comando empty//
    if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
    {
        $u->conectar("projeto_login","localhost","root", "");
        if($u->msgErro == "")//aqui verifica se tem algum erro, se aparecer vazio é que está tudo ok//
        {
            //aqui verifica se senha e confirmar senha estão iguais para cadastrar//
            if($senha == $confirmarSenha)
            {
                if($u->cadastrar($nome, $telefone, $email, $senha))
                {
                    ?>
                        <div id="msg-sucesso">
                            Cadastrado com sucesso! Retorne a página inicial para entrar!
                        </div>
                    <?php
                }else
                {
                    ?>
                        <div class="msg-erro">
                            Email já cadastrado!
                        </div>
                    <?php
                }
            }else
            {   
                ?>
                    <div class="msg-erro">
                        Senha e confirmar senha não correspondem!
                    </div>
                <?php
            }      
        }else
        {
            ?>
                <div class="msg-erro">
                    <?php echo "Erro:".$u->msgErro;?>
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