<?php
$sql = "SELECT f.IDFornecedor,f.NomeCompanhia,f.NomeContato,f.Telefone,f.Pais
        FROM fornecedores AS f
        ORDER BY NomeCompanhia";
            
$result = mysqli_query($conn, $sql);
$total = mysqli_num_rows($result);

?>