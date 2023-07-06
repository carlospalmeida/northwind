<?php

include_once("./database/conexao.php");
include_once("./utilitarios/upload.php");

$pasta = "produto";

include_once("./$pasta/parametro.php");
include_once("./$pasta/salvar.php");
include_once("./$pasta/cadastro.php");

?>
<!doctype html>
<html lang="pt-BR" data-bs-theme="auto">

<head>
    <?php include_once("./padrao/head.php"); ?>
    <title>Northwind - <?php echo ($pagina); ?></title>
</head>

<body>

    <?php include_once("./padrao/tema.php"); ?>

    <?php include_once("./padrao/header.php"); ?>

    <div class="container-fluid">
        <div class="row">

            <?php include_once("./padrao/sidebar.php"); ?>

            <main class="ms-sm-auto col-lg-10 px-md-4">
                <?php include_once("./padrao/titulo_cadastro.php"); ?>
                <?php include_once("./$pasta/dados.php"); ?>
            </main>
        </div>
    </div>

    <?php include_once("./padrao/modal_excluir.php"); ?>

    <?php include_once("./padrao/script_padrao.php"); ?>

    <?php include_once("./$pasta/script_pesquisa.php"); ?>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>