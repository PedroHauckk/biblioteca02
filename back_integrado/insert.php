<?php
// Inclui o arquivo de conexão
include 'config/config.php';
include 'query/query.php';

// Verifica se os dados foram submetidos pelo formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $curso = $_POST['curso'];
    $faixa_etaria = $_POST['faixa_etaria'];
    $mensalidade = $_POST['mensalidade'];
    $saldo_devedor = $_POST['saldo_devedor'];
    $metodo_de_pagamento = $_POST['metodo_de_pagamento'];

    // Prepara a query SQL
    $sql = InserirCliente($nome, $email, $telefone, $curso, $faixa_etaria, $mensalidade, $saldo_devedor, $metodo_de_pagamento);

    // Executa a query
    if ($conn->query($sql) === TRUE) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . $conn->error;
    }

    // Fecha a conexão
    $conn->close();
} else {
    // Se os dados não foram submetidos, redireciona para o formulário
    header("Location: form.html");
    exit;
}
?>
