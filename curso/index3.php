<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php3</title>
</head>

<body>
    <?php
    echo "<ul>";
    echo "<li>Nome do script php é: " . $_SERVER['PHP_SELF'] . "</li>";
    echo "<li>Outra variável superglobal para descobrir o nome do script php:

" . $_SERVER['SCRIPT_NAME'] . "</li>";

    echo "<li>Nome do diretório raiz onde o script php está:

" . $_SERVER['DOCUMENT_ROOT'] . "</li>";

    echo "<li>Nome do servidor é: " . $_SERVER['SERVER_NAME'] . "</li>";
    echo "<li>Cabeçalho do host é: " . $_SERVER['HTTP_HOST'] . "</li>";
    echo "<li>Informações do navegador cliente:

" . $_SERVER['HTTP_USER_AGENT'] . "</li>";
    echo "</ul>";
    ?>
    <form action="" method="post">

    </form>

</body>

</html>