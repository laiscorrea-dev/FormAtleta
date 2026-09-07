<?php
$usr = $_POST['usr'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$clube = $_POST['cidade'];
$sexo = $_POST['sexo'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Retorno</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container mt-3">
            <img src="logo.png" class="rounded" alt="Logo Atletismo Brasil">
            <h1>Acesso Restrito ao Atleta</h1>

            <!-- Mensagem de confirmação estilizada -->
            <div class="alert alert-success" role="alert">
                Cadastro realizado com sucesso, Bem-Vindo ao time!
            </div>
            <!-- Fim da mensagem de confirmação -->

            <p><strong>Usuário:</strong> <?php echo $usr; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Clube:</strong> <?php echo $clube; ?></p>
            <p><strong>Sexo:</strong> <?php echo $sexo; ?></p>

            <!-- Botão para retornar à página inicial -->
            <a href="index.html" class="btn btn-primary mt-3">Voltar à página inicial</a>
            <!-- Fim do botão -->
        </div>
    </body>
</html>
