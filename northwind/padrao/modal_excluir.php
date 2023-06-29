<!-- Modal -->
<div class="modal fade" id="excluirModal" tabindex="-1" aria-labelledby="excluirModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-danger" id="excluirModalLabel">
          <i class="bi bi-trash-fill"></i> Excluir
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="fw-bold pb-2 h5">Deseja excluir o registro selecionado?</div>
        <input type="text" class="form-control bg-warning bg-opacity-25" readonly id="textoExcluir" name="textExcluir">
        <div class="mt-2 row">
          <label for="idExcluir" class="col-sm-2 col-form-label text-end fw-bold">ID:</label>
          <div class="col-sm-10">
            <input type="text" readonly class="form-control" id="idExcluir" name="idExcluir">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-arrow-counterclockwise"></i> Cancelar</button>
        <button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i> Excluir</button>
      </div>
    </div>
  </div>
</div>

<script>
  function excluir(id, nome) {
    $("#textoExcluir").val(nome);
    $("#idExcluir").val(id);
  }
</script>