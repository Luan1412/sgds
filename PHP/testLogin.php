<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit'])&& !empty($_POST['email'])&& !empty($_POST['senha'])){
        
        include_once('config.php');
        $email=$_POST['email'];
        $senha=$_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha '. $senha);

        $sql ="SELECT * FROM usuario WHERE email = '$email'and senha='$senha'";
        $result=$conexao->query($sql);

         if(mysqli_num_rows($result)< 1 )  
         {
            unset ($_SESSION['email']);
            unset ($_SESSION['senha']);
            header('Location: Cadastro.php');
         }

         else
         {
            
            $_SESSION['email']= $email;
            $_SESSION['senha']= $senha;
            header('Location: Perfil.php');
            $consultaNome = "SELECT nome FROM usuario WHERE email = '$email'";
            $resultadoNome = $conexao->query($consultaNome);
        
            if ($resultadoNome && $resultadoNome->num_rows > 0) {
                $dadosUsuario = $resultadoNome->fetch_assoc();
                $NOME = $dadosUsuario['nome'];
            }
         }

    }else{
        header('Location: login.php');
    }

?>