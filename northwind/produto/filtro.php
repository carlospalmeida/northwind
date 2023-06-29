<form method="post" action="">
  <div class="card mb-3">
    <div class="card-header">
      Pesquisa
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-4">
          <div class="form-floating mb-1">
            <input type="text" class="form-control" id="nomeProduto" name="nomeProduto" value="<?php echo ($nome); ?>" placeholder="Nome do Produto">
            <label for="nomeProduto">Produto</label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-floating">
            <select class="form-select" id="categoria" name="categoria" aria-label="Floating label select example">
              <option>Selecione uma categoria</option>
              <?php
              $sql = "SELECT IDCategoria, NomeCategoria FROM categorias ORDER BY NomeCategoria";
              $lista = mysqli_query($conn, $sql);
              while ($item = mysqli_fetch_array($lista)) {
                $selecionar = ($item[0] == $categoria) ? "selected" : ""; //if ternário
                /* 
                  mesma coisa que o codigo de cima mas da forma clássica
                  if ($item[0]==$categoria) {
                    $selecionar = "selected";
                  }
                  else {
                    $selecionar = "";
                  }
                  */
                echo ("<option $selecionar value='$item[0]'>$item[1]</option>");
              }
              ?>
            </select>
            <label for="categoria">Categoria</label>
          </div>
        </div>
        <div class="col-md-4 pt-3">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" 
              id="inativo" name="inativo" value="checked" <?php echo($inativo); ?> >
            <label class="form-check-label" for="inativo">Somente Inativos</label>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <div class="row">
        <div class="col-6">
          <button type="button" class="btn btn-primary btn-sm">
            <i class="bi bi-file-earmark"></i> Novo
          </button>
        </div>
        <div class="col-6 text-end">
          <button type="submit" class="btn btn-warning btn-sm">
            <i class="bi bi-search"></i> Pesquisa
          </button>
        </div>
      </div>
    </div>
  </div>
</form>