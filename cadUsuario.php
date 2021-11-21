<?php

    include "includes/banner.php";

    include "includes/conecta.php";

    $id = "";
    $nome = "";
    $sobrenome = "";
    $cpf = "";
    $rg = "";
    $orgaoemissor = "";
    $dataemissao = "";
    $datanascimento = "";
    $sexo = "";
    $telefoneresidencial = "";
    $telefonecelular = "";
    $email = "";
    $logradouro = "";
    $numero = "";
    $complemento = "";
    $bairro = "";
    $cidade = "";
    $estado = "";
    $cep = "";

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * from usuarios where id = $id";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);

        $nome = $row['nome'];
        $sobrenome = $row['sobrenome'];
        $cpf = $row['cpf'];
        $rg = $row['rg'];
        $orgaoemissor = $row['orgaoemissor'];
        $dataemissao = $row['dataemissao'];
        $datanascimento = $row['datanascimento'];
        $sexo = $row['sexo'];
        $telefoneresidencial = $row['telefoneresidencial'];
        $telefonecelular = $row['telefonecelular'];
        $email = $row['email'];
        $logradouro = $row['logradouro'];
        $numero = $row['numero'];
        $complemento = $row['complemento'];
        $bairro = $row['bairro'];
        $cidade = $row['cidade'];
        $estado = $row['estado'];
        $cep = $row['cep'];
   }
?>
        <div class="container-ficha-cadastro">
            <div class="banner">
                <h1 class="banner">LendNow</h1>
                <h2 class="banner">Empréstimos de forma rápida e segura</h2>
              </div>
        <div class="ficha-cadastro">
        <h2 class="ficha-cadastro">Ficha Cadastral</h2>

            <form action="recebeusuario.php" method="post">
                <table>
                    <tr>
                        <td><input class="ficha-cadastro" type="hidden" name="id" value="<?php echo $id; ?>"></td>
                    </tr>
                    <tr>
                        <th class="ficha-cadastro">Nome</th>
                        <th class="ficha-cadastro">Sobrenome</th>
                        <th class="ficha-cadastro">CPF</th>
                        <th class="ficha-cadastro">RG</th>
                        <th class="ficha-cadastro">Órgão Emissor</th>
                        <th class="ficha-cadastro">Data de Emissão</th>
                    </tr>
                    <tr>
                        <td><input class="ficha-cadastro" type="text" name="nome" value="<?php echo $nome; ?>" placeholder="Digite o nome"></td>
                        <td><input class="ficha-cadastro" type="text" name="sobrenome" value="<?php echo $sobrenome; ?>" placeholder="Digite o sobrenome"></td>
                        <td><input class="ficha-cadastro" type="text" name="cpf" value="<?php echo $cpf; ?>" placeholder="000.000.000-00" ></td>
                        <td><input class="ficha-cadastro" type="text" name="rg" value="<?php echo $rg; ?>" placeholder="Digite o RG"></td>
                        <td><input class="ficha-cadastro" type="text" name="orgaoemissor" value="<?php echo $orgaoemissor; ?>" placeholder="SSP/UF"></td>
                        <td><input class="ficha-cadastro" type="date" name="dataemissao" value="<?php echo $dataemissao; ?>" placeholder="Digite o Órgão Emissor"></td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <th class="ficha-cadastro">Data de Nascimento</th>
                        <th class="ficha-cadastro">Sexo</th>
                        <th class="ficha-cadastro">Telefone Residencial</th>
                        <th class="ficha-cadastro">Telefone Celular</th>
                        <th class="ficha-cadastro">E-mail</th>
                        <th class="ficha-cadastro">Logradouro</th>

                    </tr>
                    <tr>
                        <td><input class="ficha-cadastro"  type="date" name="datanascimento" value="<?php echo $datanascimento?>" ></td>
                        <td>
                            <select class="ficha-cadastro" name="sexo" >
                                <option value="F" <?php if($sexo=='F'){echo "selected";}?> >Feminino</option>
                                <option value="M" <?php if($sexo=='M'){echo "selected";}?> >Masculino</option>
                            </select>
                        </td>
                        <td><input class="ficha-cadastro" type="tel" name="telefoneresidencial" value="<?php echo $telefoneresidencial; ?>" placeholder="(xx) xxxx-xxxx"></td>
                        <td><input class="ficha-cadastro" type="tel" name="telefonecelular" value="<?php echo $telefonecelular; ?>" placeholder="(xx) 9xxxx-xxxx"></td>
                        <td><input class="ficha-cadastro" type="email" name="email" value="<?php echo $email; ?>" placeholder="aaa_bb@gmail.com"></td>
                        <td><input class="ficha-cadastro" type="text" name="logradouro" value="<?php echo $logradouro; ?>" placeholder="Rua/Avenida/Rodovia"></td>

                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <th class="ficha-cadastro">Número</th>
                        <th class="ficha-cadastro">Complemento</th>
                        <th class="ficha-cadastro">Bairro</th>
                        <th class="ficha-cadastro">Cidade</th>
                        <th class="ficha-cadastro">Estado</th>
                        <th class="ficha-cadastro">CEP</th>
                    </tr>
                    <tr>
                        <td><input class="ficha-cadastro" type="text" name="numero"  value="<?php echo $numero; ?>" placeholder="Digite o número"></td>
                        <td><input class="ficha-cadastro" type="text" name="Complemento" value="<?php echo $complemento; ?>" placeholder="Bloco/Apartamento/Casa"></td>
                        <td><input class="ficha-cadastro" type="text" name="bairro" value="<?php echo $bairro; ?>" placeholder="Digite o bairro"></td>
                        <td><input class="ficha-cadastro" type="text" name="cidade" value="<?php echo $cidade; ?>" placeholder="Digite a cidade"></td>
                        <td><input class="ficha-cadastro" type="text" name="estado" value="<?php echo $estado; ?>" placeholder="Digite o estado"></td>
                        <td><input class="ficha-cadastro" type="text" name="CEP" value="<?php echo $cep; ?>" placeholder="00.000-000"></td>
                    </tr>
                    <tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                        <td><input class="ficha-cadastro" type="submit" value="Cadastrar"></td>
                        <td><input class="ficha-cadastro"  type="submit" value="Atualizar Cadastro"></td>
                    </tr>
                </table>
            </form><br />
            <a href="listausuarios.php" class="ficha-cadastro">Voltar</a>
        </div>
    </div>
    <?php
  include "includes/rodape.php";
?>
