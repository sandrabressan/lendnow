<?php
    include "includes/banner.php";
?>
    <div class="container-lista-emprestados">
      <div class="banner">
        <h1 class="banner">LendNow</h1>
        <h2 class="banner">Empréstimos de forma rápida e segura</h2>
      </div>
      <div class="lista-emprestados">
        <h3 class="lista-emprestados">Lista Itens Emprestados</h3>
        <table class="lista-emprestados">
          <tr>
            <th>Nome item</th>
            <th>Emprestado para</th>
            <th>Data empréstimo</th>
            <th>Data devolução</th>
          </tr>
        </table>
        <br />

        <a href="Itens.php" class="lista-emprestados">Voltar</a>
      </div>
    </div>
    <?php
  include "includes/rodape.php";
?>
