<?php
$sql = "SELECT IDCategoria, NomeCategoria, Descricao, Foto
    FROM categorias
    ORDER BY NomeCategoria ";

//Conectar o BD e pegar o resultado da sql
$result = mysqli_query($conn, $sql);
//Guardar o total de linhas da sql
$total = mysqli_num_rows($result);