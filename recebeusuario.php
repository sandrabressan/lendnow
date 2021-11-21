<?php
    include "includes/banner.php";
    include "includes/conecta.php";

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $orgaoemissor = $_POST['orgaoemissor'];
        $dataemissao = $_POST['dataemissao'];
        $datanascimento = $_POST['datanascimento'];
        $sexo = $_POST['sexo'];
        $telefoneresidencial = $_POST['telefoneresidencial'];
        $telefonecelular = $_POST['telefonecelular'];
        $email = $_POST['email'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];

        if(empty($id)){

            $sql = "INSERT INTO usuarios (nome, sobrenome, cpf, rg, orgaoemissor, dataemissao, datanascimento, sexo, telefoneresidencial, telefonecelular,
                    email, logradouro, numero, complemento, bairro, cidade, estado, cep)
                    VALUES
                    ('$nome', '$sobrenome', '$cpf', '$rg', '$orgaoemissor', '$dataemissao', '$datanascimento', '$sexo', '$telefoneresidencial',
                        '$telefonecelular', '$email', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade',
                        '$estado', '$cep')";

            $res = mysqli_query($conn, $sql);

            if($res){
                header("Location: listausuarios.php");
            }
            else{
                echo "ERRO AO INSERIR";
            }
        }
            else{
                $sql = "UPDATE usuarios SET
                            nome = '$nome';
                            sobrenome = '$sobrenome';
                            cpf = '$cpf';
                            rg = '$rg';
                            orgaoemissor = '$orgaoemissor';
                            dataemissao = '$dataemissao';
                            datanascimento = '$datanascimento';
                            sexo = '$sexo';
                            telefoneresidencial = '$telefoneresidencial';
                            telefonecelular = '$telefonecelular';
                            email = '$email';
                            logradouro = '$logradouro';
                            numero = '$numero';
                            complemento = '$complemento';
                            bairro = '$bairro';
                            cidade = '$cidade';
                            estado = '$estado';
                            cep = '$cep';
                        WHERE
                            id = $id";
                        
                        $res = mysqli_query($conn, $sql);

                        if($res){
                            header("Location: listausuarios.php");
                        }
                        else{
                            echo "ERRO AO ATUALIZAR";
                        }
                    }

?>