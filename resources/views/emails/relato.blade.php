<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Novo relato enviado pelo site</h2>

    <p><strong>Nome:</strong> {{ $nome }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>

    <p><strong>Mensagem:</strong></p>
    <p>{{ nl2br(e($mensagem)) }}</p>
</body>
</html>