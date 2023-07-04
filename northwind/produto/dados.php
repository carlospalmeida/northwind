<?php include_once("./padrao/estrutura.php"); ?>
<div class="card">
  <form class="needs-validation" novalidate method="post">
    <div class="card-body row g-2">

      <div class="col-md-3">
        <?php numberBox("Código", "IDProduto", 999999999, 0, false, "O código é preenchido automaticamente", $valor["IDProduto"], true)
        ?>
      </div>

      <div class="col-md-9 d-md-block d-none">
      </div>

      <div class="col-md-12">
        <?php textBox("Nome do Produto", "NomeProduto", 40, true, "Informe o nome do Produto.", $valor["NomeProduto"]); ?>
      </div>

      <div class="col-md-12">
        <?php 
        $sql="SELECT IDCategoria, NomeCategoria FROM categorias ORDER BY NomeCategoria"; 
        selectBox("Categoria","IDCategoria",$conn,$sql,true,"Escolha uma Categoria",$valor["IDCategoria"]);
        ?>

      </div>

      <div class="col-md-12">
        <?php textBox("Quantidade por unidade", "QuantidadePorUnidade", 20, false, "Informe a quantidade de produtos por unidade", $valor["QuantidadePorUnidade"]); ?>
      </div>


      <div class="col-lg-2 col-md-3">
        <?php numberBox("valor Unitario", "PrecoUnitario", "999999999", 0.01, true, "Informe o valor do preço unitario", $valor["PrecoUnitario"], false) ?>
      </div>

      <div class="col-lg-10 col-md-9">
      </div>

      <div class="col-lg-2 col-md-3">
        <?php numberBox("Estoque", "UnidadesEmEstoque", "999999999", 0, false, "Quantidade do estoque atual", $valor["UnidadesEmEstoque"], false) ?>
      </div>

      <div class="col-lg-2 col-md-3">
        <?php numberBox("qts de pedido", "UnidadesEmOrdem", "999999999", 0, false, "Quantidade de pedidos", $valor["UnidadesEmOrdem"], false) ?>
      </div>

      <div class="col-lg-2 col-md-3">
        <?php numberBox("Estoque minimo", "NivelDeReposicao", "999999999", 0, false, "Estoque minimo para reposicao", $valor["NivelDeReposicao"], false) ?>
      </div>




    </div>
    <div class="card-footer">
      <div class="row">
        <div class="col-auto">
          <button class="btn btn-success btn-sm" type="submit"><i class="bi bi-save"></i>&nbsp;Salvar</button>
        </div>
        <div class="col"></div>
        <div class="col-auto">
          <button class="btn btn-secondary btn-sm" type="reset">
            <i class="bi bi-recycle"></i> Cancelar 
          </button>
        </div>
      </div>
    </div>
  </form>
</div>