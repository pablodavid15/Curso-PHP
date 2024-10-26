<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php 
    $conexao = mysqli_connect('localhost', 'root', '', '');
    if (!$conexao){
        echo 'Não conectado';
    }
    echo 'Não conectado';
    $cpf = $_POST['CPF'];
    $sql = "SELECT FROM bdclinica.tabela WHERE cpf = '$cpf'";
    $cpf = mysqli_real_escape_string($conexao,$sql);
    $retorno = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($retorno) > 0){
        echo 'CPF já casdrastrado';
    } else { 
        
    }
    ?>
</body>
</html>