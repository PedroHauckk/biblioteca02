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
    $sql = "UPDATE cliente SET nome = '$nome', email = '$email',
            telefone = '$telefone', curso = '$curso', faixa_etaria = '$faixa_etaria',
            mensalidade = '$mensalidade', saldo_devedor = '$saldo_devedor',
            metodo_de_pagamento = '$metodo_de_pagamento'
            WHERE nome = '$nome'";


    // Executa a query
    if ($conn->query($sql) === TRUE) {
        echo "Registro alterado com sucesso!";
    } else {
        echo "Erro ao alterar registro: " . $conn->error;
    }

    // Fecha a conexão
    $conn->close();
}
?>
