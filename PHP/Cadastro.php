<?php

if (isset($_POST['submit']))
{
//     print_r ($_POST['nome']);
//     print_r ($_POST['email']);
//     print_r ($_POST['cpf']);
//     print_r ($_POST['senha']);
// }

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO pacientes=(nome,email,cpf,senha) values('$nome','$email','$cpf','$senha')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/beb75efab6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300;0,400;0,700;1,900&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="../login/Css2/cadastronovo.css">  

    <title>Login SGDS</title>
</head>
<header id="imagemLogo">
   <a href="#"><img id="imagemLogo" src="../login/img/LogoSGDS.png" alt="LogoSGDS"  ></a>
</header>
<body>
    <main>
        <div class="login-container" id="login-container">
            <div class="form-contariner">
                <form class="form form-login">
                    <h2 class="form-title">Login</h2>
                    <div class="form-input-container">
                        <input type="email" class="form-input" placeholder="Email">
                        <input type="password" class="form-input" placeholder="Senha">

                    </div>
                    <a href="#" class="form-link">Esqueceu a senha?</a>
                    <button type="button" class="form-button">Entrar</button>
                    <p class="mobile-text">Não tem conta? 
                        <a href="#" id="open-register-mobile">Registre-se</a>
                    </p>
                </form>

                <form id class="form form-cadastro" action="cadastro.php" method="POST">
                    <h2 class="form-title">Criar conta</h2>

                    <input type="text" class="form-input" name="nome" placeholder="Nome Completo" maxlength="100" minlength="2" >
                    <input type="text" class="form-input " name="cpf" placeholder="CPF (sem traços ou pontos)"  maxlength="11" minlength="2">
                    <!-- <input type="email" class="form-input" placeholder="RG (sem traços ou pontos)"> -->
                    <input type="email" class="form-input " name="email" placeholder="Email" >
                    <!-- <input type="date" class="form-input" >
                    <input type="number" class="form-input" placeholder="Numero de Telefone"> -->
                    <input type="password" class="form-input " name="senha" placeholder="Senha" >
                    <!-- <input type="password" class="form-input " placeholder="Repita sua Senha" > -->
                    <button type="submit" name="submit" class="form-button">Cadastrar</button>
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
<script src="../login/js/login.js"></script>

</html>