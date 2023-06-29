<div class="table-responsive-md small">
  <table class="table table-bordered table-hover table-striped table-sm">
    <thead class="table-primary">
      <tr>
        <th scope="col" style="width:40px;">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Categoria</th>
        <th scope="col" style="width:100px;">Preço R$</th>
        <th scope="col" style="width:80px;">Status</th>
        <th scope="col" style="width:40px;"></th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($linha = mysqli_fetch_array($result)) {
      ?>
        <tr>
          <!-- Coluna com o botão Alterar -->
          <td class="text-center">
            <a href="produtos_cadastro.php?id=<?=$linha[0]?>" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Clique para alterar o registro">
              <i class="bi bi-pencil-square"></i>
            </a>
          </td>
          <!-- Fim da Coluna Alterar -->
          <td><?php echo ($linha["NomeProduto"]); ?></td>
          <td><?php echo ($linha["NomeCategoria"]); ?></td>
          <td class="text-end"><?php echo ($linha["PrecoUnitario"]); ?></td>
          <td class="text-center"><?php echo ($linha["StatusProduto"]); ?></td>
          <!-- Coluna com o botão Excluir -->
          <td class="text-center">
            <a href="#" onclick="excluir(<?php echo($linha["IDProduto"] . ",'" . $linha["NomeProduto"] . "'"); ?>)" class="text-danger" data-bs-toggle="modal" data-bs-target="#excluirModal">
              <span data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Clique para excluir o registro">
                <i class="bi bi-trash-fill"></i>
              </span>
            </a>
          </td>
          <!-- Fim da Coluna Excluir -->
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <form id="formUpload" method="post" enctype="multipart/form-data">
    <div class="mb-3 d-none">
      <label for="formFile" class="form-label">Selecionar Arquivo</label>
      <input accept="image/*" class="form-control" type="file" id="uploadImage" name="uploadImage" onchange="enviar();">
    </div>
    <input type="hidden" id="categoria" name="categoria" class="form-control">

  </form>

</div>