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
        }
        </style>

</head>
<body>
    <div class="container">
        <h1>Trabalhando com:</h1>
        <h2>Variáveis e Constantes em <b><i>PHP</i></b></h2>
        <hr>
        
<!-- Declarando Variáveis -->
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



    </div>




<!-- utilizando bootstrap Javascrips-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>