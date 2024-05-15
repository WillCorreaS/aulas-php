<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>

            <!-- utilizando bootstrap CSS-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


            <style>
                body{
                    margin: auto;
                    padding: 25px;
                }
            </style>

</head>
<body>
<h1>Trabalhando com Arrays</h1>
<hr>
<p>Array são dados indexados na memório que podem ser acessados utilizando o indice em que está alocado dentro do array</p>
<hr>
<div class="conatiner">
<?php
//Declarando array
$bandas = ["Rush", "The Clash", "Nirvana"];
$cursos = ["HTML", "PHP", "Design", "JS"];

define("UNIDADES_SESC", ["Belenzinho", "Bertioga"]);
const UNIDADES_SENAC = ["Penha", "São Miguel", "Itaquera"];
?>
<p> Acesso e saída de DADOS:</p>
<p>► Curto muito a banda <?=$bandas[2]?>.</p>
<p>► Estou aprendendo <?=$cursos[1]?> e praticando <?=$cursos[3]?>.</p>

<p>► Vou descançar no Sesc <?=UNIDADES_SESC[1]?>.</p>
<p>► Continuarei estudando no Senac <?=UNIDADES_SENAC[0]?>.</p>

<hr>

<h2>Array associativos:</h2>
<?php 
$filme = [
    //Aqui vem a chave associativa.
    "titulo" => "DeadPool",
    "ano" => 2016,
    "genero" => "Ação",
    "personagens" => ["Wade Wilson", "Cabrom Braboo"]
];


$livros = array (
    "titulo" => "Harry Potter",
    "autor" => "J.K. Rowlling",
    "genero" => "Fantasia"
);

?>

<p>O filme <?=$filme["titulo"]?> foi lançado em <?=$filme["ano"]?></p>

<p>O livro <?=$livros["titulo"]?> é da escritora <?=$livros["autor"]?>, curto muito o genero <?=$livros["genero"]?>.</p>

<hr>
<h2>Comando úteis para análise e depuração de ARRAYS</h2>

<h3><code>print_r()</code> e <code>var_dunp()</code></h3>

<p>► Exemplo:</p>
<pre><?=print_r($bandas)?></pre>

<pre><?=var_dump($filme)?></pre>

</div>



    
</body>
</html>