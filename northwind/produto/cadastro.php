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
  $valor["PrecoUnitario"] = $linha["PrecoUnitario"];
  $valor["UnidadesEmEstoque"] = $linha["UnidadesEmEstoque"];
  $valor["UnidadesEmOrdem"] = $linha["UnidadesEmOrdem"];
  $valor["NivelDeReposicao"] = $linha["UnidadesEmOrdem"];
  $valor["IDCategoria"] = $linha["IDCategoria"];



} else {
  $valor["IDProduto"] = "";
  $valor["NomeProduto"] = "";
  $valor["QuantidadePorUnidade"] = "";
  $valor["PrecoUnitario"] = "";
  $valor["UnidadesEmEstoque"] = "" ;
  $valor["UnidadesEmOrdem"] = "";
  $valor["NivelDeReposicao"] = "";
  $valor["IDCategoria"] = "";
}
