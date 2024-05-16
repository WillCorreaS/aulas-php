<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
        <!-- utilizando bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: lightblue;
    }
    </style>

</head>
<body>
    <h1>Exercício 03 <b>PHP</b></h1>
    <hr>
    <div class="container">
<?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

foreach($meses as $mes){?>
    <ol>
        <li><?=$mes?></li>
    </ol>
<?php
}
?>
    </div>
    
</body>
</html>