<?php

// Inclui o arquivo de conexão
include 'config/config.php';
include 'query/query.php';

// Verifica se os dados foram submetidos pelo formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura o nome do cliente a ser excluído
    $nome = $_POST['nome']; // Supondo que o campo do formulário seja nome

    // Prepara a query SQL para excluir o cliente pelo nome
    $sql = "DELETE FROM cliente WHERE nome = '$nome'";

    // Executa a query
    if ($conn->query($sql) === TRUE) {
        echo "Registro excluído com sucesso!";
    } else {
        echo "Erro ao excluir registro: " . $conn->error;
    }

    // Fecha a conexão
    $conn->close();
}

?>
