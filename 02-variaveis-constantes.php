<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <!-- utilizando bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
        body {
        background-color: lightblue;
        text-align:center;
        text-shadow: 0 0 2px;
        }


        </style>

</head>
<body>
    <div class="container">
        <h1>Trabalhando com:</h1>
        <h2>Variáveis e Constantes em <b><i>PHP</i></b></h2>
        <hr>
        
<!-- Declarando Variáveis -->

<h2><b><i>Declaração</i></b> e <b><i>Saída</i></b> de dados utilizando <b>echo</b></h2>
        <?php
$curso = "Promamação Web";
$ano = "2024";
$area = "Back-end";

//Criando uma sida de dados (Estamos no Programador Web em 2024)

echo "<p>Estamos no curso <b><i>$curso</i></b> em <b>$ano</b></p>";


//Declarando Constantes
define ("AUTOR", "Wilian Correa");
//OU
const EMPRESA = "HOME Tech";

//Wilian trabalha na empresa Home Tech
echo AUTOR . "trabalha na empresa " . EMPRESA;
?>

<hr>
<h2><b><i>Saída</i></b> de dados <b><i>SIMPLIFICADA/DIRETA</i></b>.</h2>

<!-- Criando uma sida de dados (Estamos no Programador Web em 2024) -->

<p>Estamos no <b><?=$curso?></b> em <?=$ano?>.</p>


<!-- Wilian trabalha na empresa Home Tech -->

<p><?=AUTOR?> trabalha na empresa <?=EMPRESA?>.</p>

    </div>


<!-- utilizando bootstrap Javascrips-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>