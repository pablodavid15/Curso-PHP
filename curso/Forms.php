<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado IMC</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php 
    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $nome = $_POST["nome"];
    $imc = $peso * ($altura * 2);

    if ($imc < 18.5){
        print "$nome, o seu IMC: $imc abaixo do peso.";
    } elseif ($imc >= 18.5 and $imc <= 24.9) {
        echo "$nome, o seu IMC: $imc peso normal.";
    }elseif ($imc >= 25 && $imc <= 29.9) {
        print "$nome, o seu IMC: $imc Sobrepeso.";
    }elseif ($imc >= 30 && $imc <= 34.9){
        echo "$nome, o seu IMC: $imc Obesidade.";
    }elseif ($imc >= 35 && $imc <= 39.9){
        print "$nome, o seu IMC: $imc Obesidade Grau II.";
    }elseif ($imc >= 40){
        echo "$nome, o seu IMC: $imc Obesidade Grau III.";
    }
    ?>
    
</body>
</html>