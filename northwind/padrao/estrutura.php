<?php
function textBox($titulo, $coluna, $tamanho, $requerido = false, $validacao = "", $valor = "")
{
    $requerido = ($requerido == false) ? "" : "required";
    echo ('<label for="' . $coluna . '" class="form-label fw-semibold mb-1">');
    echo ('<small>');
    echo ('<i class="bi bi-bookmarks-fill" data-bs-placement="left" data-bs-toggle="tooltip" data-bs-title="' . $validacao . '"></i>&nbsp; ' . $titulo . ' ');

    if ($requerido == "required") {
        echo ('<sup>');
        echo (' <i class="bi bi-braces-asterisk text-danger" data-bs-placement="right" data-bs-toggle="tooltip" data-bs-title="Campo obrigátorio"></i>');
        echo ('</sup>');
    }

    echo ('</small>');
    echo ('</label>');
    echo ('<div class="input-group has-validation">');
    echo ('<input type="text" value="' . $valor . '" maxlength="' . $tamanho . '" class="form-control" id="' . $coluna . '" name="' . $coluna . '" ' . $requerido . '>');
    echo ('<div class="invalid-feedback">');
    echo ($validacao);
    echo ('</div>');
    echo ('</div>');
}

function numberBox($titulo, $coluna, $max = 999999999, $decimal = 0, $requerido = false, $validacao = "", $valor = "", $bloqueado = true)
{
    $requerido = ($requerido == false) ? "" : "required";
    $bloqueado = ($bloqueado == true) ? "readonly" : "";
    echo ('<label for="' . $coluna . '" class="form-label fw-semibold mb-1">');
    echo ('<small>');
    echo ('<i class="bi bi-bookmarks-fill" data-bs-placement="left" data-bs-toggle="tooltip" data-bs-title="' . $validacao . '"></i>&nbsp; ' . $titulo . ' ');

    if ($requerido == "required") {
        echo ('<sup>');
        echo ('<i class="bi bi-braces-asterisk text-danger" data-bs-placement="right" data-bs-toggle="tooltip" data-bs-title="Campo obrigátorio"></i>');
        echo ('</sup>');
    }

    echo ('</small>');
    echo ('</label>');
    echo ('<div class="input-group has-validation">');
    // echo ('<input type="number" value="' . $valor . '" step ="'. $decimal .'" min = "0" max="' . $max . '" '.$bloqueado.' class="form-control" id="' . $coluna . '" name="' . $coluna . '" ' . $requerido . '>');
    echo ("<input type='number' value='$valor' step='$decimal' min='0' max= '$max' $bloqueado class='form-control text-end' id='$coluna' name='$coluna' $requerido >");
    echo ('<div class="invalid-feedback">');
    echo ($validacao);
    echo ('</div>');
    echo ('</div>');
}

function selectBox($titulo, $coluna, $conn, $sql, $requerido = false, $validacao = "", $valor, $value = "")
{
    $requerido = ($requerido == false) ? "" : "required";
    echo ('<label for="' . $coluna . '" class="form-label fw-semibold mb-1">');
    echo ('<small>');
    echo ('<i class="bi bi-bookmarks-fill" data-bs-placement="left" data-bs-toggle="tooltip" data-bs-title="' . $validacao . '"></i>&nbsp; ' . $titulo . ' ');

    if ($requerido == "required") {
        echo ('<sup>');
        echo ('<i class="bi bi-braces-asterisk text-danger" data-bs-placement="right" data-bs-toggle="tooltip" data-bs-title="Campo obrigátorio"></i>');
        echo ('</sup>');
    }
    echo ('</small>');
    echo ('</label>');
    echo ('<div class="input-group has-validation">');

    echo ("<select id='$coluna' name='$coluna' $requerido class='form-select' aria-label='Default select example'>");
    echo ("<option value=''>($validacao)</option>");
    $select = mysqli_query($conn, $sql);
    while ($item = mysqli_fetch_array($select)) {
        $selected = ($item[0] == $valor) ? "selected" : "";
        echo ("<option $selected value = '$item[0]'>$item[1]</option>");
    }
    echo('</select>');
    echo ('<div class="invalid-feedback">');
    echo ($validacao);
    echo ('</div>');
    echo ('</div>');
}

