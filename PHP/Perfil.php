<?php
    include_once("config.php");
    session_start();
    if((!isset($_SESSION['email'])==true)and(!isset($_SESSION['senha'])==true))
    {
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
        header('Location: Cadastro.php');
    }
    $logado = $_SESSION['email'];

    // Consulta ao banco de dados para obter o nome do usuário
$consultaNome = "SELECT nome FROM usuario WHERE email = '$logado'";
$resultadoNome = $conexao->query($consultaNome);

if ($resultadoNome && $resultadoNome->num_rows > 0) {
    $dadosUsuario = $resultadoNome->fetch_assoc();
    $NOME = $dadosUsuario['nome'];
} else {
    // Se não encontrou o nome do usuário, você pode definir um valor padrão
    $NOME = "User";
}
   



$consulta = "SELECT * FROM exames LIMIT 4";
$con = $conexao->query($consulta) or die ($conexao->error);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<header>
    <div class="container">
        <nav class="navbar">
            <a href="indexSGDS.html">
                <img src="../img/logo.png" alt="SGDS"class="navbar-logo">
            </a>
            <div class="profile-dropdown">
                <div class="profile-dropdown-btn"onclick="toggle()">
                    <div class="profile-img">
                        <img src="../img/user.jpg">
                    </div>
                    <span class="perfilSpan"><?php echo $NOME; ?>
                        <i class="fa-solid fa-angle-down"></i>
                    </span>
                </div>

                <ul class="profile-dropdown-list">
                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <i class="fa-regular fa-user"></i>
                            Perfil
                        </a>
                    </li>
                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <i class="fa-regular fa-envelope"></i>
                            Inbox
                        </a>
                    </li>
                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <i class="fa-solid fa-chart-line"></i>
                            Analise
                        </a>
                    </li>
                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <i class="fa-solid fa-circle-question"></i>
                            Ajuda e suporte
                        </a>
                    </li>
                    <hr/>
                    <li class="profile-dropdown-list-item">
                        <a href="sair.php">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </div>
</header>
<body>
        <div class="corpo">
            <h1>
                <button class="bot bot1">Exames</button>
                <button class="bot btn2">Historico medico</button>
                <button class="bot btn3">Vacinas</button>
                <button class="bot btn4">Consultas agendadas</button>
            </h1>
            <div class="blk1 hideblk">
                <table class="tabela">
                    <tr>
                        <td>Nome</td>
                        <td>Data da consulta</td>
                        <td>Exames</td>
                        <td>Data do reagendamento</td>
                        <td>Observação</td>
                    </tr>
                    <?php while($dado= $con->fetch_array()){ ?>
                    <tr>
                        <td><?php echo $dado["nome"];?></td>
                        <td><?php echo date ("d/m/Y", strtotime( $dado["dataConsulta"]));?></td>
                        <td><?php echo $dado["exames"];?></td>
                        <td><?php echo date ("d/m/Y", strtotime($dado["dataReagendar"]));?></td>
                        <td><?php echo $dado["observacao"];?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="blk2 hideblk">
                <h3>Bloco 2</h3>
                <p>Conteúdo do Bloco 2</p>
            </div>

            <div class="blk3 hideblk">
                <h3>Bloco 3</h3>
                <p>Conteúdo do Bloco 3</p>
            </div>
            <div class="blk4 hideblk">
                <h3>Bloco 4</h3>
                <p>Conteúdo do Bloco 4</p>
            </div>
        </div>
     </div>
  </footer>
<!-- 
    <div class="asaide">
        asaide
    </div> -->
    <script src="../js/script.js"></script>  
</body>
<!---<footer style="background-color: #053956; color: #fff; padding: 20px;">
    <div style="max-width: 960px; margin: 0 auto; text-align: center;">
      <p>© 2023 <a href="Index.html" style="color: #048484" >PanasTech.</a> Todos os direitos reservados.</p> 
      <p>Endereço: Rua Exemplo, 123 - Cidade, Estado - CEP 12345-678</p>
      <p>Telefone: (00) 0000-0000 | Email: info@panastech.com</p>
    </div>
  </footer>
-->
</html>
</html>