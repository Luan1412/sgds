<?php

 $dbHost = 'localhost';
 $dbUsername = 'root';
 $dbPassword = ''; 
 $dbName = 'sgds';

 $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//  if ($conexao->connect_errno) {
//      echo "Erro: " . $conexao->connect_error;
//  } else {
//      echo "Conexão efetuada com sucesso";
//  }

// URL da API que você deseja acessar
// $apiUrl = 'http://localhost:8080/usuario';

// // Inicializar a sessão cURL
// $ch = curl_init();

// // Configurar as opções da requisição
// curl_setopt($ch, CURLOPT_URL, $apiUrl);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// // Executar a requisição e obter a resposta
// $response = curl_exec($ch);

// // Verificar por erros
// if (curl_errno($ch)) {
//     // Lidar com erros, se necessário
//     die('Erro ao acessar a API: ' . curl_error($ch));
// }

// // Fechar a sessão cURL
// curl_close($ch);

// // Processar a resposta da API (por exemplo, imprimir os dados)
// echo $response;

?>

