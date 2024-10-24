<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nome = "$_POST[nome]"; //nome
    $idade = "$_POST[idade]"; //idade
    $mensagem = "$_POST[mensagem]"; //mensagem
    $assunto = "$_POST[assunto]"; //assunto
    /*condições de envio. Se os campos nome, idade, assunto e mensagem
não forem preenchidos será mostrada uma mensagem de erro.*/
    if (($nome == "") || ($idade == "") || ($assunto == "") || ($mensagem == ""))
        echo "Atenção! Todos os campos do formulario devem ser preenchidos, clique em voltar";
    /*caso todos os campos estejam preenchidos, testar se a idade está
no intervalo de 0 a 100*/
    else
if ($idade < 0 || $idade > 100)
        echo "Idade invalida, fora do intervalo 0-100, clique em voltar e redigite";

    ?>
    <br>
    <a href="index.php"> Voltar</a>
</body>

</html>