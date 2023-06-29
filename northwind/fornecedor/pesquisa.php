<?php
$sql = "SELECT IDFornecedor, NomeCompanhia, NomeContato, Telefone, Cidade, Pais
        FROM fornecedores
        ORDER BY NomeCompanhia";

//Conectar o BD e pegar o resultado da sql
$result = mysqli_query($conn, $sql);
//Guardar o total de linhas da sql
$total = mysqli_num_rows($result);