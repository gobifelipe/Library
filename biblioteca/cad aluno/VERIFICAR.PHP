<!DOCTYPE html>

<html>

    <head>

        <title>Verifica Dados</title>
        <meta charset="utf-8">
</head>
<body>
    <?php

    $nome                           =$_POST['NOME']
    $cpf                            =$_POST['CPF']
    $curso                          =$_POST['CURSO']
    $horario                        =$_POST['HORARIO']
    $email                          =$_POST['EMAIL']
    $dados_adicionais               =$_POST['DADOS_ADICIONAIS']
    $erro                           =$0;


// verificar se o campo nome não esta em branco

if (emputy($$nome) or strstr($nome, ' ')==false){
    echo "por favro digitar seu nome corretamente<br>";
    $erro =1;
} 

//verifica se o campo cpf não esta em branco 

if (emputy($cpf)){
    echo "por favor digitar seu CPF corretamente<br>";
    $erro =1;
}

//verificar se o campo curso não esta em branco
if (emputy($cpf)){
    echo "por favor digitar seu curso corretamente<br>";
    $erro =1;
}

//verificar se o campo horario não esta em branco
if (emputy($horario)){
    echo "por favor digitar o horario corretamente<br>";
    $erro =1;
}

//verificar se o campo email não esta em branco
if (emputy($email)) < 8 || strstr($email, '@')==false{
    echo "por favor digitar o email corretamente<br>";
    $erro =1;
}

//verificar se o campo dados adicionais naõ esta em branco
if (emputy($dados_adicionais)){
    echo "por favor entrar com um comentario<br>";
    $erro =1;
}

//verificar se não houve nenhum erro

if (erro ==0){
    echo "verificar se todos os dados foram preenchidos<br>";
    include 'insere.inc'
}
?>
</boby>
</html>





