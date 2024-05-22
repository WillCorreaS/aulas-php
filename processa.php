<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento dos Dados</title>
    <!-- utilizando bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<h1>processamento dos dados vindo do <b>FORMULÁRIO</b></h1>
<hr>


<!-- Programando PHP para CAPTURAR os DADOS do FORMULÁRIO 
- utilizando 'array superglobal $_POST[]' (caso o método utilize 'GET', então usa-se a superglobal '$_GET[]')-->
<?php

// $variavel = supergoblal ['nome do campo no html']

$nome = $_POST['nome'];
$email = $_POST['email'];
$nascimento = $_POST['nascimento'];
$mensagem = $_POST['mensagem'];

if (empty($name) || empty($email)) {
?>
<p class='alert alert-danger' role='alert'>Você deve preencher os campos nome e e-mail</p><?php

} else{

?>

<h2>Dados recebidos:</h2>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>Email: <?=$email?></li>

    <?php  if (!empty($nascimento)){ ?>
    <li>Data de nascimento: <?=$nascimento?></li>
    <?php } ?>
        
    <?php if (!empty($mensagem)){ ?>
    <li>Mensagem: <?=$mensagem?></li>
    <?php } ?>

</ul>
<?php } ?>

</body>
</html>