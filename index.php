<?php

$conexao = mysqli_connect("localhost","root","","folha_ponto");

if(isset($_POST["nome"])){

    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $data = date("Y-m-d");
    date_default_timezone_set("America/Sao_Paulo");
    $hora = date("H:i:s");

$sql = "INSERT INTO folha_ponto(nome,tipo,data,hora)
VALUES('$nome','$tipo','$data','$hora')";

    mysqli_query($conexao,$sql);
}

?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />

    <title>Folha de Ponto</title>

    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="container">
      <h1>Folha de Ponto</h1>

      <form method="POST" onsubmit="return validar();">
        <input
          type="text"
          name="nome"
          id="nome"
          placeholder="Nome do funcionário"
        />

        <button class="entrada" name="tipo" value="Entrada">
          Registrar Entrada
        </button>

        <button class="saida" name="tipo" value="Saída">Registrar Saída</button>
      </form>

      <table>
        <tr>
          <th>Funcionário</th>
          <th>Tipo</th>
          <th>Data</th>
          <th>Hora</th>
        </tr>

        <?php $sql = "SELECT * FROM folha_ponto ORDER BY id DESC";
        $resultado=mysqli_query($conexao,$sql);
        while($dados=mysqli_fetch_assoc($resultado)){ echo "
        <tr>
          "; echo "
          <td>".$dados["nome"]."</td>
          "; echo "
          <td>".$dados["tipo"]."</td>
          "; echo "
          <td>".$dados["data"]."</td>
          "; echo "
          <td>".$dados["hora"]."</td>
          "; echo "
        </tr>
        "; } ?>
      </table>
    </div>
    <script src="script.js"></script>
  </body>
</html>
