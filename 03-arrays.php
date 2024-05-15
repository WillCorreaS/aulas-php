<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
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


$livro = array (
    "titulo" => "Harry Potter",
    "autor" => "J.K. Rowlling",
    "genero" => "Fantasia"
);

?>







</div>



    
</body>
</html>