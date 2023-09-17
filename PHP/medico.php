<?php
if (isset($_POST['submit']))

{

include_once("config.php");

    $nome = $_POST['nome'];
    $dataConsulta = $_POST['dataConsulta'];
    $exames = $_POST['exames'];
    $dataReagendar = $_POST['dataReagendar'];
    $observacao = $_POST['observacao'];

    $result = mysqli_query($conexao, "INSERT INTO exames(nome,dataConsulta,exames,dataReagendar,observacao) values('$nome','$dataConsulta','$exames','$dataReagendar','$observacao')");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/medico.css">
    <title>Registro de Consulta</title>
    
</head>

<header id="imagemLogo">
    <a href="../root/indexSGDS.html"><img id="imagemLogo" src="../img/logo" alt="LogoSGDS"  ></a>
 </header>

<body>
    <div id="container">
        <h1>Registro de Consulta</h1>
        <form id="appointmentForm" action="medico.php" method="POST">
            <div class="form-group">
                <label for="nomePaciente">Nome do Médico:</label>
                <input type="text" id="nomePaciente" name="nome" required>
            </div>
            <div class="form-group">
                <label for="dataConsulta">Data da Consulta:</label>
                <input type="date" id="dataConsulta" name="dataConsulta" required>
            </div>
            <div class="form-group">
                <label for="exames">Exames a serem realizados:</label>
                <input type="text" id="exames" name="exames">
            </div>
            <div class="form-group">
                <label for="reagendarConsulta">Reagendar Próxima Consulta:</label>
                <input type="checkbox" id="reagendarConsulta" name="dataReagendar">
            </div>
            <div class="form-group" id="dataReagendamento">
                <label for="dataReagendamento">Data do Reagendamento:</label>
                <input type="date" id="dataReagendamentoInput" name="dataReagendar">
            </div>
            <div class="form-group">
                <label for="observacoes">Observações:</label>
                <textarea id="observacoes" name="observacao"></textarea>
            </div>

            <input type="submit"name="submit"id="submit"Registrar Consulta>
        </form>
    </div>

    <!-- <textarea id="observacoes" name="observacoes" style="height: 200px;"></textarea> -->


    <script>
        document.getElementById('reagendarConsulta').addEventListener('change', function() {
            var dataReagendamento = document.getElementById('dataReagendamento');
            dataReagendamento.style.display = this.checked ? 'block' : 'none';
        });

        
    </script>
</body>
</html>
