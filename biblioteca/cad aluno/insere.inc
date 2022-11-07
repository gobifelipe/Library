<?php>

include '../conecta_mysql.inc';

 $nome                           =$_POST['NOME']
    $cpf                            =$_POST['CPF']
    $curso                          =$_POST['CURSO']
    $horario                        =$_POST['HORARIO']
    $email                          =$_POST['EMAIL']
    $dados_adicionais               =$_POST['DADOS_ADICIONAIS']

    $sql =" INSERT INTO cad_aluno VALUES "
    $sql .="('$nome', '$cpf', '$curso', '$horario', '$email', '$dados_adicionais')";

    if($conexao->query($sql) === TRUE){
        echo "usuario cadastrado com sucesso";
        
    } else {
        echo "ERRO: " .$sql . "<br>" . $conexao->error:
    }

    $conexao->close();