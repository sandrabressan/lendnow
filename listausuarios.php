<?php
    include "includes/banner.php";
?>
        <div class="container-ficha-cadastro">
            <div class="banner">
                <h1 class="banner">LendNow</h1>
                <h2 class="banner">Empréstimos de forma rápida e segura</h2>
              </div>
        <div class="ficha-cadastro">
        <h2 class="ficha-cadastro">Ficha Cadastral</h2>

        <table>
            <tr>
                <td>id</td>
                <td>nome</td>
                <td>sobrenome</td>
                <td>cpf</td>
                <td>rg</td>
                <td>orgaoemissor</td>
                <td>dataemissao</td>
                <td>datanascimento</td>
                <td>sexo</td>
                <td>telefoneresidencial</td>
                <td>telefonecelular</td>
                <td>email</td>
                <td>logradouro</td>
                <td>numero</td>
                <td>complemento</td>
                <td>bairro</td>
                <td>cidade</td>
                <td>estado</td>
                <td>cep</td>
            </tr>
            <?php

                include "includes/conecta.php";

                $sql = "SELECT id, nome, sobrenome, cpf, rg, orgaoemissor, dataemissao, datanascimento, sexo, telefoneresidencial, telefonecelular,
                        email, logradouro, numero, complemento, bairro, cidade, estado, cep FROM usuarios";

                $res = mysqli_query($conn, $sql);

                if($res){
                    while($row = mysqli_fetch_assoc($res)){
                        echo " <tr>
                                    <td>".  $row ['id'] ."</td>
                                    <td>".  $row ['nome'] ."</td>
                                    <td>".  $sobrenome = $row['sobrenome'] ."</td>
                                    <td>".  $cpf = $row['cpf'] ."</td>
                                    <td>".  $rg = $row['rg'] ."</td>
                                    <td>".  $orgaoemissor = $row['orgaoemissor'] ."</td>
                                    <td>".  $dataemissao = $row['dataemissao'] ."</td>
                                    <td>".  $datanascimento = $row['datanascimento'] ."</td>
                                    <td>".  $sexo = $row['sexo'] ."</td>
                                    <td>".  $telefoneresidencial = $row['telefoneresidencial'] ."</td>
                                    <td>".  $telefonecelular = $row['telefonecelular'] ."</td>
                                    <td>".  $email = $row['email'] ."</td>
                                    <td>".  $logradouro = $row['logradouro'] ."</td>
                                    <td>".  $numero = $row['numero'] ."</td>
                                    <td>".  $complemento = $row['complemento'] ."</td>
                                    <td>".  $bairro = $row['bairro'] ."</td>
                                    <td>".  $cidade = $row['cidade'] ."</td>
                                    <td>".  $estado = $row['estado'] ."</td>
                                    <td>".  $cep = $row['cep'] ."</td>

                                   <td><a href='cadUsuario.php?id=". $row['id'] ."'>Editar</td>
                                    <td><a href='excluiusuario.php?id=". $row['id'] ."'>Excluir</td>
                                </tr>";
                    }
                }
            ?>
        </table>
            <a href="Itens.php" class="ficha-cadastro">Voltar</a>
        </div>
    </div>
    <?php
  include "includes/rodape.php";
?>
