<?php
if (isset($_POST['submit'])) {
    include_once('config.php');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $rep_senha = $_POST['rep_senha'];
    
    if ($senha != $rep_senha) {
        //echo "As senhas não coincidem. Por favor, tente novamente.";
    } else {
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
        
        $result = mysqli_query($conexao , "INSERT INTO usuario(nome, email, cpf, senha) values('$nome', '$email', '$cpf', '$senhaCriptografada')");

        if ($result) {
            // Cadastro bem-sucedido, definir variável de sessão
            session_start();
            $_SESSION['cadastro_sucesso'] = true;
        }
        else {
            // Ocorreu um erro no cadastro, definir variável de sessão
            session_start();
            $_SESSION['cadastro_erro'] = true;
        }
    
        //if ($result) {
        //     echo "Cadastro bem-sucedido!";
        // } else {
        //     echo "Ocorreu um erro ao cadastrar. Por favor, tente novamente.";
        //  }
    }
}
?>

<!DOCTYPE html>
<?php
if (isset($_SESSION['cadastro_sucesso']) && $_SESSION['cadastro_sucesso']) {
    echo "<script>alert('Cadastro feito com sucesso!');</script>";
    // Limpar a variável de sessão
    unset($_SESSION['cadastro_sucesso']);
}
if (isset($_SESSION['cadastro_falho']) && $_SESSION['cadastro_falho']) {
    echo "<script>alert('Cadastro feito com sucesso!');</script>";
    // Limpar a variável de sessão
    unset($_SESSION['cadastro_sucesso']);
}
if (isset($_SESSION['cadastro_erro']) && $_SESSION['cadastro_erro']) {
    echo "<script>alert('Ocorreu um erro no cadastro. Tente novamente mais tarde.');</script>";
    // Limpar a variável de sessão
    unset($_SESSION['cadastro_erro']);
}
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/beb75efab6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300;0,400;0,700;1,900&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="../Css/cadastro.css">  

    <title>Login SGDS</title>
</head>
<header id="imagemLogo">
   <a href="../root/indexSGDS.html"><img id="imagemLogo" src="../img/Logo.png" alt="LogoSGDS"  ></a>
</header>
<body>
    <main>
        <div class="login-container" id="login-container">
            <div class="form-contariner">
                <form class="form form-login" action="testLogin.php" method="POST">
                    <h2 class="form-title">Login</h2>
                    <div class="form-input-container">
                        <input type="email" class="form-input" name="email"placeholder="Email">
                        <input type="password" class="form-input" name="senha" placeholder="Senha">
                        <input type="submit"name="submit"value="enviar"class="form-button">


                    </div>
                    <a href="#" class="form-link">Esqueceu a senha?</a>
                    <p class="mobile-text">Não tem conta? 
                        <a href="#" id="open-register-mobile">Registre-se</a>
                    </p>
                </form>

                <form id class="form form-cadastro" action="cadastro.php" method="POST">
                    <h2 class="form-title">Criar conta</h2>

                    <input type="text" class="form-input" name="nome"id="nome" placeholder="Nome Completo" maxlength="100" minlength="2" >
                    <input type="text" class="form-input " name="cpf" id="cpf"placeholder="CPF (sem traços ou pontos)"  maxlength="11" minlength="2">
                    <!-- <input type="email" class="form-input" placeholder="RG (sem traços ou pontos)"> -->
                    <input type="email" class="form-input "id="email" name="email" placeholder="Email" >
                    <!-- <input type="date" class="form-input" >
                    <input type="number" class="form-input" placeholder="Numero de Telefone"> -->
                    <input type="password" class="form-input "id="senha" name="senha" placeholder="Senha" >
                    <input type="password" class="form-input " name="rep_senha" placeholder="Repita sua Senha" >
                    <button type="submit" id="submit"name="submit" class="form-button">Cadastrar</button>
                    <p class="mobile-text">já tem conta? 
                        <a href="#" id="open-login-mobile">Login</a>
                    </p>

                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <h2 class="form-title form-title-ligth">Já tem conta?</h2>
                    <p>Clique aqui para fazer seu login e acessar a plataforma!</p>
                    <button class="form-button form-button-ligth" id="open-login">Login</button>
                </div>
                <div class="overlay">
                    <h2 class="form-title form-title-ligth">Sem cadastro?</h2>
                    <p>Cadastre-se para conseguir acessar a plataforma!</p>
                    <button class="form-button form-button-ligth" id="open-register">Cadastrar</button>

                </div>
            </div>
        </div>
    </main>
</body>

<script src="../js/login.js">

</script>

</html>