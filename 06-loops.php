<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>

        <!-- utilizando bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: lightblue;
        text-align: center;
        margin: 50px;
    }
    </style>

</head>
<body>
    <div class="container">
    <h1>Trabalhando com Loops em <b>PHP</b></h1>
    <p><b><i>(laços de repetições)</i></b></p>
    <hr>
    
<h2>Loops tradicionais: <code>for / while</code></h2>
<hr>
<h2><b>UTILIZANDO: <code> WHILE</code></b></h2>
<?php

$i = 1;
$aux="info";
while ($i <= 3){?>

    <p class="alert alert-<?=$aux?>">Senac Penha</p>
<?php
    $i++;  
};
?>
<hr>
<h2><b>UTILIZANDO: <code>FOR</code> </b></h2>
<?php
for($i=1; $i <= 3; $i++){?>
    <p class="alert alert-danger">Senac Penha</p>
<?php
};
?>
<hr>
<h2>Acessando indice do <b>ARRAY</b> com <code>for</code></h2>
<?php
$cor = ["dark", "danger", "info"];

$alunos = ["Chaves", "Chapolim", "Kiko"];
for($i = 0; $i < count($alunos); $i++){?>
    <p class="alert alert-info">Aluno: <?=$alunos[$i]?></p>
<?php
};
?>
<hr>
<h2>Loops <i>ESPECÍFICO</i>do <b>PHP</b> <code>foreach</code> bom para <i>ARRAYS</i></h2>
<?php
foreach ($alunos as $aluno){?>
    <p class="alert alert-dark">Aluno: <?=$aluno?></p>
<?php
}
?>
    </div>
    
</body>
</html>