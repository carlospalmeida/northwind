<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST["IDProduto"])){
    $codigo = (is_numeric($_POST["IDProduto"]))?$_POST["IDProduto"]:0;
    $produto = $_POST["NomeProduto"];
    $forncedor = 1;//(is_numeric($_POST["IDFornecedor"]))?$_POST["IDFornecedor"]:"null";
    $categoria = (is_numeric($_POST["IDCategoria"]))?$_POST["IDCategoria"]:"null";
    $unidade = $_POST["QuantidadePorUnidade"];
    $preco = (is_numeric($_POST["PrecoUnitario"]))?$_POST["PrecoUnitario"]:"null";
    $estoque = (is_numeric($_POST["UnidadesEmEstoque"]))?$_POST["UnidadesEmEstoque"]:0;
    $ordem = (is_numeric($_POST["UnidadesEmOrdem"]))?$_POST["UnidadesEmOrdem"]:0;
    $reposicao = (is_numeric($_POST["NivelDeReposicao"]))?$_POST["NivelDeReposicao"]:0;
    $descontinuado = 'F';
    $sql = "CALL produtos_cadastro($codigo, '$produto', $forncedor, $categoria,
    '$unidade', $preco, $estoque, $ordem, $reposicao, '$descontinuado')";
    $connExec = mysqli_connect($nomeServidor, $userBanco, $senhaBanco, $nomeBanco);
    $salvar = mysqli_query($connExec, $sql);
    $cadastro = mysqli_fetch_array($salvar);
    $connExec->close();
  }
}
?>