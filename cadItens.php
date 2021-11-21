<!DOCTYPE html>
<html>
  <head>
    <title>LendNow-Cadastro Itens</title>
    <link href="estilo.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container-cadastro-itens">
      <div class="banner">
        <h1 class="banner">LendNow</h1>
        <h2 class="banner">Empréstimos de forma rápida e segura</h2>
      </div>
      <div class="cadastro-itens">
        <h2 class="cadastro-itens">Cadastro Item</h2>

        <form action="buscaItens.php" method="post" name="cadastroitens">
          <p class="cadastro-itens">
            Foto
            <input class="cadastro-itens" type="file" name="foto" size="20" />
          </p>
          <br />
          <br />
          <table>
            <tr>
              <th class="cadastro-itens">Nome</th>
              <th class="cadastro-itens">Quantidade</th>
              <th class="cadastro-itens">Tempo de empréstimo</th>
            </tr>
            <tr>
              <td>
                <input
                  class="cadastro-itens"
                  type="text"
                  name="nomeitem"
                  placeholder="Furadeira Bosch GSB 13"
                />
              </td>
              <td>
                <input
                  class="cadastro-itens"
                  type="number"
                  name="quantidade"
                  placeholder="1, 2, 3"
                />
              </td>
              <td>
                <input
                  class="cadastro-itens"
                  type="text"
                  name="tempoemprestimo"
                  placeholder="7 dias"
                />
              </td>
            </tr>
          </table>

          <p class="cadastro-itens"><b>Informações técnicas</b></p>
          <textarea
            class="cadastro-itens"
            cols="50"
            rows="10"
            placeholder="Voltagem 110V."
          ></textarea>
          <p class="cadastro-itens"><b>Orientações de segurança</b></p>
          <textarea
            class="cadastro-itens"
            cols="50"
            rows="10"
            placeholder="Não trabalhe sob chuva."
          ></textarea>
          <p class="cadastro-itens"><b>Informações adicionais</b></p>
          <textarea
            class="cadastro-itens"
            cols="50"
            rows="10"
            placeholder="Não acompanha brocas."
          ></textarea>
          <p>
            <input class="cadastro-itens" type="submit" value="Cadastrar" />
          </p>
        </form>
        <a href="Itens.php" class="cadastro-itens">Voltar</a>
      </div>
    </div>
    <footer>
      <p>Todos os direitos reservados</p>
    </footer>
  </body>
</html>
