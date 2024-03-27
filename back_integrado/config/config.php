<?php

$servername = "localhost"; //padrão - server local.
$database = "aulabanco"; //alterar conforme o nome do banco.
$username = "root"; //padrão - root.
$password = ""; //senha de conexão do banco de dados.
$PORT = "7306"; //Porta de conexão com do MySQL. 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database, $PORT);

// Verifica se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

?>