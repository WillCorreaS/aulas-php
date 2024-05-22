<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com PHP</title>
</head>

<body>
    <h1>Formulário e processamento juntos</h1>
    <hr>
    <!-- Detectando o envio/acionamento do formulário -->
    <?php
    if(isset($_POST['enviar']) ){
       $nome = $_POST['nome'];?>
<h2>Bem vindo <?=$nome?>!</h2>
    <?php } else{?> 
        <!-- Colocando o Formulário dentro do 'else' faz com que ele desapareça assim que o 'if' se tornar verdadeiro -->

<!-- Para processar PHP na mesma página manter o "action='vazio'" -->
    <form autocomplete="off" action="" method="post"> <label for="nome">Nome:</label> <input type="text" name="nome" id="nome"> <button type="submit" name="enviar">Enviar</button>
    </form>

 <?php } ?>

</body>

</html>