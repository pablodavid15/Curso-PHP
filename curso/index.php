<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Formulário de Contato</h1>
    <form action="valida_exemplo13.php" method="post">
        <label><b>Nome:</b><br>
            <input type="text" name="nome" id="nome"><br><br>
        </label>
        <label><b>Idade:</b><br>
            <input type="text" name="idade" id="idade"><br><br>
        </label>
        <label><b>Assunto:</b><br>
            <input type="text" name="assunto" id="assunto"><br><br>
        </label>
        <label><b>Mensagem:</b><br>
            <textarea name="mensagem" id="mensagem" cols="30" rows="3">
</textarea><br><br>
        </label>
        <input type="submit" name="button" value="Enviar">
    </form>
</body>

</html>