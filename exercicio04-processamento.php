<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 04 (Dados)</title>

<style>
    div{
        background-color:lightcyan;
        margin: 30%;
        margin-top: 0;
        padding: 10px;
        box-shadow: 1px 1px 4px;
        border-radius: 8px;
    }
</style>
</head>
<body>
<h1>Exercício 04 (dados/processamento)</h1>
<hr>

<!-- Faça a partir daqui a programação
necessária para obter os dados vindos do formulário
e mostrá-los usando elementos HTML (da forma que você quiser). -->
<div>
<?php
$produto = $_POST['produto'];
$fabricantes = $_POST['fabricante'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
?>

<h2><p>Produto:</p></h2>
<ul>
    <li><b>Produto: </b><?=$produto?></li>
    <li><b>Fabricante: </b><?=$fabricantes?></li>
    <li><b>Preço: </b>R$<?=number_format($preco, 2, ',', '.' )?></li>
    <li><b>Descrição: </b><?=$descricao?></li>
</ul>
</div>



    
</body>
</html>