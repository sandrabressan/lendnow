<?php
    include "includes/banner.php";
?>
    <div class="container-cadastro-emprestimo">
      <div class="banner">
        <h1 class="banner">LendNow</h1>
        <h2 class="banner">Empréstimos de forma rápida e segura</h2>
      </div>
      <div class="cadastro-emprestimo">
        <h3 class="cadastro-emprestimo">Cadastrar Empréstimo</h3>
        <form action="buscaItens.php" method="post" name="cadastroemprestimo">
          <table class="cadastro-emprestimo">
            <tr>
              <th>Nome Item</th>
              <th>Quantidade</th>
              <th>Data empréstimo</th>
              <th>Data devolução</th>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>
                <input
                  class="cadastro-emprestimo"
                  type="date"
                  name="dataemprestimo"
                />
              </td>
              <td>
                <input
                  class="cadastro-emprestimo"
                  type="date"
                  name="datadevolucao"
                />
              </td>
            </tr>
          </table>
          <br />
          <input class="cadastro-emprestimo" type="submit" value="Cadastrar" />
        </form>
        <br />
        <a href="Itens.php" class="cadastro-emprestimo">Voltar</a>
      </div>
    </div>
    <?php
  include "includes/rodape.php";
?>
