<?php

// Query SQL para selecionar o número de pessoas na tabela Cliente;
function ConsultaCliente() {
    $query = "SELECT COUNT(nome) AS total_pessoas
              FROM cliente";

    return $query;
}


// Query para selecionar informações pelo nome das pessoas;
function ConsultaNome($nome){
    $query = "SELECT * FROM cliente
              WHERE nome = '$nome'";

    return $query;
}


// Query para selecionar a quantidade de pessoas por curso individual;
function ConsultaCursoIndividual($curso){
    $query = "SELECT COUNT(*) AS total_pessoas
              FROM cliente
              WHERE curso = '$curso'";

    return $query;
}


// Query para selecionar a quantidade de pessoas por curso;
function ConsultaCurso(){
    $query = "SELECT curso, COUNT(*) AS total_pessoas
              FROM cliente
              GROUP BY curso
              ORDER BY total_pessoas ASC";

    return $query;
}

// Query para selecionar a maior mensalidade por curso;
function ConsultaMensalidade(){
    $query = "SELECT curso, MAX(mensalidade) AS maior_mensalidade
              FROM cliente
              GROUP BY curso
              ORDER BY maior_mensalidade
              DESC LIMIT 1";

    return $query;
}


// Query para selecionar a média de idade por curso;
function ConsultaMediaIdade(){
    $query = "SELECT curso, ROUND(AVG(faixa_etaria)) AS media_idade_inteira
              FROM cliente
              GROUP BY curso";
              
    return $query;
}


// Query para selecionar pessoas com saldo devedor;
function ConsultaSaldoDevedor(){
    $query = "SELECT * FROM cliente 
              WHERE saldo_devedor > 0";
              
    return $query;
}


// Query para selecionar o valor total com saldo devedor;
function ConsultaSaldoDevedorTotal(){
    $query = "SELECT SUM(saldo_devedor) AS total_saldo_devedor
              FROM cliente";
              
    return $query;
}


// Query para selecionar o valor total das mensalidades;
function ConsultaMensalidadeTotal(){
    $query = "SELECT SUM(mensalidade) AS total_mensalidade
              FROM cliente";
              
    return $query;
}


// Query para selecionar o saldo final;
function ConsultaSaldoTotal(){
    $query = "SELECT 
             (SELECT SUM(mensalidade) FROM cliente) AS total_mensalidade,
             (SELECT SUM(saldo_devedor) FROM cliente) AS total_saldo_devedor,
             (SELECT SUM(mensalidade) FROM cliente)
           - (SELECT SUM(saldo_devedor) FROM cliente) AS diferenca";
              
    return $query;
}


// Query para selecionar o meio de pagamento;
function ConsultaMeioPagamento(){
    $query = "SELECT metodo_de_pagamento,
              COUNT(*) AS quantidade
              FROM cliente
              GROUP BY metodo_de_pagamento";
              
    return $query;
}

// Query para inserir dados na tabela;
function InserirCliente($nome, $email, $telefone, $curso, $faixa_etaria, $mensalidade, $saldo_devedor, $metodo_de_pagamento){
    $query = "INSERT INTO cliente
     (nome, email, telefone, curso, faixa_etaria, mensalidade, saldo_devedor, metodo_de_pagamento) 
     VALUES ('$nome', '$email', '$telefone', '$curso', '$faixa_etaria', '$mensalidade', '$saldo_devedor', '$metodo_de_pagamento')";
              
    return $query;
}


// Query para alterar dados na tabela;
function AlterarCliente($id_cliente, $curso, $saldo_devedor){
    $query = "UPDATE cliente SET curso = '$curso', saldo_devedor = '$saldo_devedor'
              WHERE id = $id_cliente";
              
    return $query;
}



// Query para deletar dados na tabela;
function DeletarCliente($id_cliente){
    $query = "DELETE FROM cliente WHERE id = $id_cliente";
              
    return $query;
}



?>