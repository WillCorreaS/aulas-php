<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>

                <!-- utilizando bootstrap CSS-->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<style>
    body{
        margin: auto;
        padding: 25px;
    }
    .borda{
        background-color: cadetblue;
    }
</style>

</head>
<body>
<div class="container">


<?php
$dados = [
    "nomeUsuario" => "Marcos",
    "senha" => "123teste",
    "idade" => 30,
    "cidade" => "São Paulo",
    "telefone" => ["11-2135-0000", "11-91234-5678"]
];

?>

<!-- nome do Usuário / idade / cidade / 1 dos telefones -->
<div class="p-3 mb-2 bg-dark-subtle text-dark-emphasis">




<p><b>Nome do Usuário: </b> <?=$dados["nomeUsuario"]?></p>
<p><b>Idade: </b><?=$dados["idade"]?></p>
<p><b>Cidade: </b><?=$dados["cidade"]?></p>
<p><b>telefone: </b><?=$dados["telefone"][1]?></p>

</div>
<br>

<div class="p-3 mb-2 bg-info-subtle text-info-emphasis">
<p>Como uma lista:</p>
<ul>
    <li><b>Nome do Usuário: </b> <?=$dados["nomeUsuario"]?></li>
    <li><b>Idade: </b><?=$dados["idade"]?></li>
    <li><b>Cidade: </b><?=$dados["cidade"]?></li>
    <li><b>telefone: </b><?=$dados["telefone"][1]?></li>
</ul>
</div>








</div>


    
</body>
</html>