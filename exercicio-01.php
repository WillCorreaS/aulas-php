<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>

        <!-- utilizando bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
        body {
        background-color: lightblue;
        text-align:center;
        margin: 50px;
        }

        .alert{
            margin:20%;
            margin-top:10px;
            padding: 30px;
            box-shadow:black 1px 3px 2px;
        }

        h2{font-size: 14px}

        </style>

</head>
<body>
    <div class="container">
        <h1>Exercício 01</h1>
        <h2>V15/05/2024 <b><i>PHP</i></b></h2>
        <hr>
<?php       
const NOME = "Pimpolho";
$idade = 25;
?>


<div class="alert alert-success" role="alert">
<p>Sr. <b><?=NOME?></b> possui <i><?=$idade?></i> anos.</p>
</div>



    </div>


<!-- utilizando bootstrap Javascrips-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>