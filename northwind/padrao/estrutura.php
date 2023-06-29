<?php
function textBox(){
    echo('<label for="NomeProduto" class="form-label fw-semibold mb-1">');
    echo('<small>');    
    echo('<i class="bi bi-info-circle" data-bs-placement="left" data-bs-toggle="tooltip" data-bs-title="Informe o nome do produto"></i>&nbsp;Nome do Produto');        
    echo('<sup>');        
    echo('<i class="bi bi-asterisk text-danger" data-bs-placement="right" data-bs-toggle="tooltip" data-bs-title="Campo obrigátorio"></i>');            
    echo('</sup>');        
    echo('</small>');    
    echo('</label>');
    echo('<div class="input-group has-validation">');
    echo('<input type="text" maxlength="100" class="form-control" id="NomeProduto" name="NomeProduto" required>');    
    echo('<div class="invalid-feedback">');    
    echo('Informe o nome do produto.');        
    echo('</div>');    
    echo('</div>');
}

