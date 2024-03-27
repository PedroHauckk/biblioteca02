<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro, Alteração e Exclusão</title>
    <!-- Adicionando Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   

    <div class="container">
        <h2 class="mt-5 mb-4">Cadastro de Cliente</h2>
        <form id="formCliente" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="curso">Curso:</label>
                <input type="text" class="form-control" id="curso" name="curso" required>
            </div>
            <div class="form-group">
                <label for="faixa_etaria">Faixa Etária:</label>
                <input type="number" class="form-control" id="faixa_etaria" name="faixa_etaria" required>
            </div>
            <div class="form-group">
                <label for="mensalidade">Mensalidade:</label>
                <input type="text" class="form-control" id="mensalidade" name="mensalidade" required>
            </div>
            <div class="form-group">
                <label for="saldo_devedor">Saldo Devedor:</label>
                <input type="text" class="form-control" id="saldo_devedor" name="saldo_devedor" required>
            </div>
            <div class="form-group">
                <label for="metodo_de_pagamento">Método de Pagamento:</label>
                <input type="text" class="form-control" id="metodo_de_pagamento" name="metodo_de_pagamento" required>
            </div>

            <!-- Botões para ações -->
            <button type="button" class="btn btn-primary" onclick="submitForm('insert.php')">Inserir</button>
            <button type="button" class="btn btn-secondary" onclick="submitForm('update.php')">Alterar</button>
            <button type="button" class="btn btn-danger" onclick="submitForm('delete.php')">Excluir</button>
        </form>

        <h2 class="mt-5 mb-4">Consulta de Cliente por Nome</h2>
        <form action="consulta_Nome.php" method="post">
            <div class="form-group">
                <label for="nome_consulta">Nome do Cliente:</label>
                <input type="text" class="form-control" id="nome_consulta" name="nome" required>
            </div>
            <button type="submit" class="btn btn-success">Consultar</button>
        </form>
    </div>

    

    <!-- Adicionando Bootstrap JS (opcional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>
