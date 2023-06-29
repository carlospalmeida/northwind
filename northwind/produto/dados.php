<?php include_once("./padrao/estrutura.php");?>
<div class="card">
  <form class="needs-validation" novalidate>
    <div class="card-body row g-2">

      <div class="col-md-3">
        <label for="IDProduto" class="form-label fw-semibold mb-1">
          <small>
            <i class="bi bi-info-circle" data-bs-placement="left" data-bs-toggle="tooltip" data-bs-title="o codigo é gerado automaticamente"></i>&nbsp;Código
            <sup>
              <i class="bi bi-asterisk text-danger" data-bs-placement="right" data-bs-toggle="tooltip" data-bs-title="Campo obrigátorio"></i>
            </sup>
          </small>
        </label>
        <div class="input-group has-validation">
          <input type="number" min="0" max="1000000" readonly class="form-control" id="IDProduto" name="IDProduto" required>
          <div class="invalid-feedback">
            Informe o código.
          </div>
        </div>
      </div>

      <div class="col-md-9 d-md-block d-none">
      </div>

      <div class="col-md-12">
        <?php textBox();?>
      </div>

    </div>
    <div class="card-footer">
      <div class="row">
        <div class="col-auto">
          <button class="btn btn-success btn-sm" type="submit"><i class="bi bi-save"></i>&nbsp;Salvar</button>
        </div>
      </div>
    </div>
  </form>
</div>