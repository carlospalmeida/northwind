<?php
if (isset($_GET["id"])) {
  $id = $_GET["id"];
} elseif (isset($_POST["id"])) {
  $id = $_POST["id"];
} else {
  $id = 0;
}

$sql = "SELECT * FROM Produtos WHERE IDProduto = $id";
$result = mysqli_query($conn, $sql);
$total = mysqli_num_rows($result);

$tipo = "Novo Registro";
if ($total == 1) {
  $tipo = "Alterando Registro";
  $linha = mysqli_fetch_array($result);
  $valor["IDProduto"] = $linha["IDProduto"];
  $valor["NomeProduto"] = $linha["NomeProduto"];
  $valor["QuantidadePorUnidade"] = $linha["QuantidadePorUnidade"];
} else {
  $valor["IDProduto"] = "";
  $valor["NomeProduto"] = "";
  $valor["QuantidadePorUnidade"] = "";
}
