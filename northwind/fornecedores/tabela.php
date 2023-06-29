<div class="table-responsive-md small">
    <table class="table table-striped table-hover table-bordered table-sm">
        <thead class="table-primary">
            <tr>
                <th scope="col" style="width: 40px;">#</th>
                <th scope="col">Codigo</th>
                <th scope="col">Nome</th>
                <th scope="col">Contato</th>
                <th scope="col">Telefone</th>
                <th scope="col">Pais</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($linha = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <!-- Coluna com btn alterar -->
                    <td class="text-center">
                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Clique para alterar o registro">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>
                    <!-- fim coluna alterar -->
                    
                    <td class="text-center"><?php echo ($linha["IDFornecedor"]); ?></td>
                    <td><?php echo ($linha["NomeCompanhia"]); ?></td>
                    <td><?php echo ($linha["NomeContato"]); ?></td>
                    <td><?php echo ($linha["Telefone"]); ?></td>
                    <td class="text-center"><?php echo ($linha["Pais"]); ?></td>

                   <!-- coluna btn excluir -->
                    <td class="text-center">
                        <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#excluirModal">
                            <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="clique para excluir o registro">
                                <i class="bi bi-trash3-fill"></i>
                            </span>

                        </a>
                    </td>
                    <!-- fim coluna excluir -->
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- Enviar arquivos -->
    <form id="formUpload" method="post" enctype="multipart/form-data">
        <div class="mb-3 d-none">
            <label for="formFile" class="form-label">Selecionar Arquivo</label>
            <input accept="image/*" class="form-control" type="file" id="uploadImage" name="uploadImage" onchange="enviar();">
        </div>
        <input type="hidden" id="categoria" name="categoria" class="form-control">

    </form>
</div>