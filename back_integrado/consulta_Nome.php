<?php

// Inclui o arquivo de conexão
include 'config/config.php';
include 'query/query.php';

// Verifica se os dados foram submetidos pelo formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura o valor digitado no campo de nome
    $nome = $_POST['nome'];

    // Chame a função que contém a consulta por nome
    $sql = ConsultaNome($nome);

    // Executa a consulta
    $result = $conn->query($sql);

    // Verifica se há resultados e exibe as informações do cliente
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h3>Informações do Cliente:</h3>";
            echo "Nome: " . $row["nome"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "Telefone: " . $row["telefone"] . "<br>";
            echo "Curso: " . $row["curso"] . "<br>";
            echo "Faixa Etária: " . $row["faixa_etaria"] . "<br>";
            echo "Mensalidade: " . $row["mensalidade"] . "<br>";
            echo "Saldo Devedor: " . $row["saldo_devedor"] . "<br>";
            echo "Método de Pagamento: " . $row["metodo_de_pagamento"] . "<br>";
        }
    } else {
        echo "Nenhum cliente encontrado com o nome: " . $nome;
    }

    // Fecha a conexão
    $conn->close();
}

?>
