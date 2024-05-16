<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP</title>

    <!-- utilizando bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: lightblue;
            text-align: center;
            margin: 50px;
        }

        .alert{
            padding: 20px;
            box-shadow: black 1px 1px 4px;
        }


    </style>


</head>

<body>

<h1>Trabalhando com Condicionais <b>PHP</b></h1>
<hr>
<div class="container">
<h2>Simples (usa <code>if</code>)</h2>
<?php
$numero = 50;

if($numero < 100){
    echo "<p>► Condição é verdadeira/true.</p>";
}
?>

<hr>
<h2>Composta (usa <code>if/else</code>)</h2>
<?php
//COntrole de estoque
$produto = "carro";
$qtdEmEstoque = 0; //quantidade no momento
$qtdCritica = 2 //quantidade mínima no estoque
?>

    <h3>Produto: <?=$produto?></h3>
    <h3>Estoque: <?=$qtdEmEstoque?></h3>


<!-- Se a quantidade em estoque for menor que a quantidade crítica, o sistema deve avisar e pedir para repor -->
<?php
if($qtdEmEstoque < $qtdCritica){
    echo "<p class= 'alert alert-warning' role='alert'>Precisa repor o produto $produto.</p>";

// condicional aninhada
if($qtdEmEstoque == 0){
    echo "<p class='alert alert-danger' role='alert'>Precisa repor URGENTE!</p>";
}

} else {
    echo "<p class='alert alert-success' role='alert'> Tem o suficiente, boas vendas!</p>";
};

?>
<hr>
<h3>Encadeada (usa <code>if, else, elseif</code> )</h3>

<?php
$ano = "anos";;
//Verificando o produto e atribuindo garantias

if ($produto == "Ultrabook"){
    $garantia=5;
} elseif ($produto == "Geladeira"){
    $garantia=3;
}elseif ($produto == "Tv"){
    $garantia=2;
}else {
    $garantia=1;
    $ano = "ano";

};


?>

<p>O produto <b><?=$produto?></b> tem garantia de <span class="badge text-bg-primary"><?=$garantia?></span> <?=$ano?>.</p>

<hr>

<!-- Sintax alternativa utilizando Switch/case -->
<?php
switch($produto){
    case "Ultrabook": $garantia2= 5; break;
    case "Geladeira": $garantia2= 4; break;
    case "Tv": $garantia2= 3; break;
    case "Aspirador": $garantia2= 2; break;
    default: $garantia2= 1; break;
};
?>

<p>Garantia 3: <?=$garantia2?></p>


</div>



</body>

</html>