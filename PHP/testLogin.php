<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Recupere a senha criptografada do banco de dados usando o e-mail
    $consultaSenha = "SELECT senha FROM usuario WHERE email = '$email'";
    $resultadoSenha = $conexao->query($consultaSenha);

    if ($resultadoSenha && $resultadoSenha->num_rows > 0) {
        $dadosUsuario = $resultadoSenha->fetch_assoc();
        $senhaArmazenada = $dadosUsuario['senha'];

        // Verifique se a senha inserida está correta
        if (password_verify($senha, $senhaArmazenada)) {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: Perfil.php');

            $consultaNome = "SELECT nome FROM usuario WHERE email = '$email'";
            $resultadoNome = $conexao->query($consultaNome);

            if ($resultadoNome && $resultadoNome->num_rows > 0) {
                $dadosUsuario = $resultadoNome->fetch_assoc();
                $NOME = $dadosUsuario['nome'];
            }
        } else {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: Cadastro.php');
        }
    } else {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: Cadastro.php');
    }
} else {
    header('Location: login.php');
}
?>
