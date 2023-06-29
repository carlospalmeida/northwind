<div class="table-responsive-md small">
  <table class="table table-bordered table-hover table-striped table-sm">
    <thead class="table-primary">
      <tr>
        <th scope="col" style="width:40px;">#</th>
        <th scope="col">Categoria</th>
        <th scope="col">Descrição</th>
        <th scope="col" style="width:30px;">Foto</th>
        <th scope="col" style="width:40px;"></th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($linha = mysqli_fetch_assoc($result)) {
      ?>
        <tr>
          <td class="text-center">
            <a href="categoria_cadastro.php?id=" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Clique para alterar o registro">
              <i class="bi bi-pencil-square"></i>
            </a>
          </td>
          <td><?php echo ($linha["NomeCategoria"]); ?></td>
          <td><?php echo ($linha["Descricao"]); ?></td>
          <td class="text-center">
            <?php if (strlen($linha["Foto"]) >= 5) { ?>
              <a href="./image/categoria/<?php echo ($linha["Foto"]); ?>" data-toggle="lightbox" class="text-info">
                <i class="bi bi-image"></i>
              </a>
            <?php } else { ?>
              <a href="#" class="upload">
                <i id="<?php echo ($linha["IDCategoria"]); ?>" class="bi bi-images text-success"></i>
              </a>
            <?php } ?>
          </td>
          <td class="text-center">
            <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#excluirModal">
              <span data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Clique para excluir o registro">
                <i class="bi bi-trash-fill"></i>
              </span>
            </a>
          </td>
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